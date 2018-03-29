<?php
namespace Product;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;


return [
    'router' => [
        'routes' => [
            'basket' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/basket',
                    'defaults' => [
                        'controller' => Controller\ProductController::class,
                        'action'     => 'basket',
                    ],
                ],
            ],
            'detail' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/detail',
                    'defaults' => [
                        'controller' => Controller\ProductController::class,
                        'action'     => 'detail',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\ProductController::class => Controller\Factories\ProductControllerFactory::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];