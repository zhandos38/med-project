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
        $manager = $auth->createRole('manager');
        $manager->description = 'Роль для менеджера';

        /* User comments */
        $ItsMyCommentRule = new ItsMyComment();

        $auth->add($admin);
        $auth->add($manager);

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

        $auth->add(new \yii\rbac\Permission([
            'name' => Permission::CREATE,
            'description' => 'Can create own comments',
        ]));
        $auth->add(new \yii\rbac\Permission([
            'name' => Permission::UPDATE,
            'description' => 'Can update all comments',
        ]));
        $auth->add(new \yii\rbac\Permission([
            'name' => Permission::UPDATE_OWN,
            'ruleName' => $ItsMyCommentRule->name,
            'description' => 'Can update own comments',
        ]));
        $auth->add(new \yii\rbac\Permission([
            'name' => Permission::DELETE,
            'description' => 'Can delete all comments',
        ]));
        $auth->add(new \yii\rbac\Permission([
            'name' => Permission::DELETE_OWN,
            'ruleName' => $ItsMyCommentRule->name,
            'description' => 'Can delete own comments',
        ]));

        $auth->addChild($admin, $updateUsers);

        // Еще админ имеет собственное разрешение - «Просмотр админки»
        $auth->addChild($admin, $viewAdminPage);

        $this->stdout('Done!' . PHP_EOL);
    }
}