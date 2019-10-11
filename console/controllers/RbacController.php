<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
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

        $auth->addChild($admin, $updateUsers);

        // Еще админ имеет собственное разрешение - «Просмотр админки»
        $auth->addChild($admin, $viewAdminPage);

        $this->stdout('Done!' . PHP_EOL);
    }
}