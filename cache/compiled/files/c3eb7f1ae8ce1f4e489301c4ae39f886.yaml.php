<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/MAMP/htdocs/grav/user/accounts/mostlywhat.yaml',
    'modified' => 1698982816,
    'size' => 567,
    'data' => [
        'state' => 'enabled',
        'email' => 'mostlywhatstudios@gmail.com',
        'fullname' => 'MostlyWhat',
        'title' => 'Administrator',
        'hashed_password' => '$2y$10$w3iBVmrQoaUnUKoRQDZyl.jY48RBlLmQ3Dd2N7d9eaMFjhkaS6Ty2',
        'language' => 'en',
        'content_editor' => 'default',
        'twofa_enabled' => false,
        'twofa_secret' => '56J6PLJR7PX6KKHFRNPXM6TMGKL5O5VH',
        'avatar' => [
            
        ],
        'access' => [
            'site' => [
                'login' => true
            ],
            'admin' => [
                'login' => true,
                'super' => true,
                'cache' => true,
                'configuration' => true,
                'pages' => true,
                'maintenance' => true,
                'statistics' => true,
                'plugins' => true,
                'themes' => true,
                'tools' => true,
                'users' => true,
                'flex-objects' => true,
                'gantry' => true
            ]
        ]
    ]
];
