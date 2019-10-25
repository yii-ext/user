<?php
return [
    'components' => [
        'user' => [
            'identityClass' => 'dektrium\user\models\User',
        ],
    ],
    'modules' => [
        'user' => [
            'class' => 'dektrium\user\Module',
            'enableUnconfirmedLogin' => true,
        ],
    ],
];
