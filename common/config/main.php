<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            'class' => 'common\components\rbac\AuthManager',
            'itemFile' => '@common/components/rbac/items/items.php',
            'assignmentFile' => '@common/components/rbac/items/assignments.php',
            'ruleFile' => '@common/components/rbac/items/rules.php',
        ],
        'mailer' => [
            'class' => 'boundstate\mailgun\Mailer',
            'key' => 'pubkey-281e64791f4870b2919787222174b44c',
            'domain' => 'mg.ksior.kz',
        ],
    ],
];
