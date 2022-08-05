<?php
return [
    //admin setting
    'admin_namespace' => 'admin',
    'guards' => [
        'admin' => 'admin'
    ],

    'admin' => [
        'sidebar' => [
            ''
        ]
    ],

    //user setting
    'user' => [
        'roles' => [
            'root' => [
                'id' => 1,
                'name' => 'Supper Admin'
            ],

            'admin' => [
                'id' => 2,
                'name' => 'Admin'
            ],

            'user' => [
                'id' => 9,
                'name' => 'Admin'
            ]
        ],

        'status' => [
            'active' => [
                'id' => 1,
                'name' => 'Active'
            ],

            'inactive' => [
                'id' => 2,
                'name' => 'Inactive'
            ],

            'block' => [
                'id' => 9,
                'name' => 'Block'
            ]
        ]
    ]
];
