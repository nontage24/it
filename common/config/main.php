<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        
        'authManager' => [
          'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\PhpManager'
          'defaultRoles' => ['admin', 'author'],
    ],
        'user' => [
            //'class' => 'mdm\admin\models\User',  //uncomment this line before run   yii migrate --migrationPath=@yii/rbac/migrations in CMD CommandLine
            'identityClass' => 'mdm\admin\models\User',
            'loginUrl' => ['admin/user/login'],
        ],
        
    ],
    
    'modules' => [
        'admin' => [
            'class' => 'mdm\admin\Module',
        ],
    ],
];
