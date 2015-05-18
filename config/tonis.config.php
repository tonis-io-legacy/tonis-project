<?php
return [
    'environment' => file_exists(__DIR__ . '/env.config.php') ? include __DIR__ . '/env.config.php' : [],
    'hooks' => [
        'Tonis\Mvc\Hook\DefaultMvcHook'
    ],
    'packages' => [

    ]
];
