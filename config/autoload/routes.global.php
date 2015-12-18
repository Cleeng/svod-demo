<?php

return [
    'dependencies' => [
        'invokables' => [
            Zend\Expressive\Router\RouterInterface::class => Zend\Expressive\Router\FastRouteRouter::class,
        ],
        'factories' => [
            App\Action\HomePageAction::class => App\Action\HomePageFactory::class,
            App\Action\AuthenticateAction::class => App\Action\AuthenticateFactory::class,
            App\Action\PremiumContentAction::class => App\Action\PremiumContentFactory::class,
            App\Action\SelectPlanAction::class => App\Action\SelectPlanFactory::class,
            App\Action\SettingsAction::class => App\Action\SettingsFactory::class,
        ],
    ],

    'routes' => [
        [
            'name' => 'home',
            'path' => '/',
            'middleware' => App\Action\HomePageAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name' => 'authenticate',
            'path' => '/authenticate',
            'middleware' => App\Action\AuthenticateAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name' => 'premium-content',
            'path' => '/premium-content',
            'middleware' => App\Action\PremiumContentAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name' => 'select-plan',
            'path' => '/select-plan',
            'middleware' => App\Action\SelectPlanAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name' => 'setting',
            'path' => '/settings',
            'middleware' => App\Action\SettingsAction::class,
            'allowed_methods' => ['GET'],
        ],
    ],
];
