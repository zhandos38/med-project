<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
use \rmrevin\yii\module\Comments\Permission;
use \rmrevin\yii\module\Comments\rbac\ItsMyComment;
/**
 * Инициализатор RBAC выполняется в консоли php yii rbac/init
 */
class RbacController extends Controller {

    public function actionInit() {

        if (!$this->confirm("Are you sure? It will re-create permissions tree.")) {
            return self::EXIT_CODE_NORMAL;
        }

        $auth = Yii::$app->authManager;

        $auth->removeAll();

        // Создадим роли админа и редактора новостей
        $admin = $auth->createRole('admin');
        $admin->description = 'Роль для админа';
        $user = $auth->createRole('user');
        $user->description = 'Роль для пользователя';

        /* User comments */
        $ItsMyCommentRule = new ItsMyComment();

        $auth->add($admin);
        $auth->add($user);

        // Создаем наше правило, которое позволит проверить автора новости
//        $authorRule = new \app\rbac\AuthorRule;

        // Запишем его в БД
//        $auth->add($authorRule);

        // Создаем разрешения. Например, просмотр админки viewAdminPage и редактирование новости updateNews
        $viewAdminPage = $auth->createPermission('viewAdminIndex');
        $viewAdminPage->description = 'Просмотр главной страницы админки';

        $updateUsers = $auth->createPermission('updateUsers');
        $updateUsers->description = 'Редактирование новости';

        // Запишем все разрешения в БД
        $auth->add($viewAdminPage);
        $auth->add($updateUsers);
        $auth->add($ItsMyCommentRule);

        $createOwnComment = $auth->createPermission(Permission::CREATE);
        $createOwnComment->description = 'Can create own comments';
        $auth->add($createOwnComment);


        $auth->add(new \yii\rbac\Permission([
            'name' => Permission::UPDATE,
            'description' => 'Can update all comments',
        ]));
        $updateOwnComment = $auth->createPermission(Permission::UPDATE_OWN);
        $updateOwnComment->description = 'Can update own comments';
        $updateOwnComment->ruleName = $ItsMyCommentRule->name;
        $auth->add($updateOwnComment);

        $auth->add(new \yii\rbac\Permission([
            'name' => Permission::DELETE,
            'description' => 'Can delete all comments',
        ]));

        $deleteOwnComment = $auth->createPermission(Permission::DELETE_OWN);
        $deleteOwnComment->description = 'Can delete own comments';
        $deleteOwnComment->ruleName = $ItsMyCommentRule->name;
        $auth->add($deleteOwnComment);

        $auth->addChild($user, $createOwnComment);
        $auth->addChild($user, $updateOwnComment);
        $auth->addChild($user, $deleteOwnComment);

        $auth->addChild($admin, $createOwnComment);
        $auth->addChild($admin, $updateOwnComment);
        $auth->addChild($admin, $deleteOwnComment);
        $auth->addChild($admin, $updateUsers);

        // Еще админ имеет собственное разрешение - «Просмотр админки»
        $auth->addChild($admin, $viewAdminPage);

        $this->stdout('Done!' . PHP_EOL);
    }
}