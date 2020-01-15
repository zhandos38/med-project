<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);
return [
    'id' => 'app-frontend',
    'language' => 'ru',
    'basePath' => dirname(__DIR__),
    'bootstrap' => [
        'log',
        'under-construction',
    ],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'to_specialist/vacations' => 'site/vacations',
            ],
        ],
        'mailer' => [
            'class' => \YarCode\Yii2\Mailgun\Mailer::class,
            'domain' => 'mg.ksior.kz',
            'apiKey' => Yii::$app->request->params['mailApiKey'],
        ],
    ],
    'modules' => [
        'comments' => [
            'class' => 'rmrevin\yii\module\Comments\Module',
            'userIdentityClass' => 'common\models\User',
            'useRbac' => true,
        ],
        'under-construction' => [
            'class' => '\mervick\underconstruction\Module',
            // this is the on off switch
            'locked' => true,
            // the list of IPs that are allowed to access site.
            // The default value is `['127.0.0.1', '::1']`, which means the site can only be accessed by localhost.
            'allowedIPs' => ['2.132.213.112', '5.34.31.112', '127.0.0.1', '::1'],
            // change this to your namespace, if you want use your own controller
            'controllerNamespace' => 'mervick\underconstruction\controllers',
            // if you want use your views
            'viewPath' => '',
            // default layout
            'layout' => 'main',
            // if you want redirect to external website, default is null
            'redirectURL' => 'http://stop.ksior.kz',
        ],
        'comment' => [
            'class' => 'yii2mod\comments\Module',
        ],
    ],
    'container' => [
        'definitions' => [
            \yii\widgets\LinkPager::class => \yii\bootstrap4\LinkPager::class,
        ],
    ],
    'params' => $params,
];
