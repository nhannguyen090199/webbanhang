<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 9/5/2019
 * Time: 10:14 PM
 */

return [

    'shop' => [
        'title' => 'shop',
        'route' => 'admin.shop',
        'icon' => 'fa-users',
        'items' => [
            [
                'title' => 'order',
                'route' => 'admin.shop.order',
                'permission' => [
                    ['title' => 'view', 'action' => 'view', 'icon' => 'fa-list'],
                    ['title' => 'create', 'action' => 'create', 'icon' => 'fa-plus'],
                    ['title' => 'Update', 'action' => 'update', 'icon' => 'fa-file'],
                    ['title' => 'delete', 'action' => 'delete', 'icon' => 'fa-trash'],
                    ['title' => 'publish', 'action' => 'publish', 'icon' => 'fa-check'],
                ],
            ],
            [
                'title' => 'product',
                'route' => 'admin.shop.product',
                'permission' => [
                    ['title' => 'view', 'action' => 'view', 'icon' => 'fa-list'],
                    ['title' => 'create', 'action' => 'create', 'icon' => 'fa-plus'],
                    ['title' => 'Update', 'action' => 'update', 'icon' => 'fa-file'],
                    ['title' => 'delete', 'action' => 'delete', 'icon' => 'fa-trash'],
                    ['title' => 'publish', 'action' => 'publish', 'icon' => 'fa-check'],
                ],
            ],
            [
                'title' => 'category',
                'route' => 'admin.shop.category',
                'permission' => [
                    ['title' => 'view', 'action' => 'view', 'icon' => 'fa-list'],
                    ['title' => 'create', 'action' => 'create', 'icon' => 'fa-plus'],
                    ['title' => 'Update', 'action' => 'update', 'icon' => 'fa-file'],
                    ['title' => 'delete', 'action' => 'delete', 'icon' => 'fa-trash'],
                    ['title' => 'publish', 'action' => 'publish', 'icon' => 'fa-check'],
                ],
            ],
            [
                'title' => 'brand',
                'route' => 'admin.shop.brand',
                'permission' => [
                    ['title' => 'view', 'action' => 'view', 'icon' => 'fa-list'],
                    ['title' => 'create', 'action' => 'create', 'icon' => 'fa-plus'],
                    ['title' => 'Update', 'action' => 'update', 'icon' => 'fa-file'],
                    ['title' => 'delete', 'action' => 'delete', 'icon' => 'fa-trash'],
                    ['title' => 'publish', 'action' => 'publish', 'icon' => 'fa-check'],
                ],
            ],
            [
                'title' => 'store',
                'route' => 'admin.shop.store',
                'permission' => [
                    ['title' => 'view', 'action' => 'view', 'icon' => 'fa-list'],
                    ['title' => 'create', 'action' => 'create', 'icon' => 'fa-plus'],
                    ['title' => 'Update', 'action' => 'update', 'icon' => 'fa-file'],
                    ['title' => 'delete', 'action' => 'delete', 'icon' => 'fa-trash'],
                    ['title' => 'publish', 'action' => 'publish', 'icon' => 'fa-check'],
                ],
            ],
            [
                'title' => 'statistic',
                'route' => 'admin.shop.statistic',
                'permission' => [
                    ['title' => 'view', 'action' => 'view', 'icon' => 'fa-list'],
                ],
            ],
            [
                'title' => 'config',
                'route' => 'admin.shop.config',
                'permission' => [
                    ['title' => 'view', 'action' => 'view', 'icon' => 'fa-list'],
                    ['title' => 'edit', 'action' => 'edit', 'icon' => 'fa-file'],
                ],
            ],
        ],
    ],
//    'contact' => [
//        'title' => 'contact',
//        'route' => 'admin.cms.contact',
//        'icon' => 'fa-users',
//        'permission' => [
//            ['title' => 'view', 'action' => 'view', 'icon' => 'fa-list'],
//            ['title' => 'create', 'action' => 'create', 'icon' => 'fa-plus'],
//            ['title' => 'edit', 'action' => 'edit', 'icon' => 'fa-file'],
//            ['title' => 'delete', 'action' => 'delete', 'icon' => 'fa-trash'],
//            ['title' => 'publish', 'action' => 'publish', 'icon' => 'fa-check'],
//        ],
//    ],
//    'subscribe' => [
//        'title' => 'subscribe',
//        'route' => 'admin.cms.subscribe',
//        'icon' => 'fa-users',
//        'permission' => [
//            ['title' => 'view', 'action' => 'view', 'icon' => 'fa-list'],
//            ['title' => 'create', 'action' => 'create', 'icon' => 'fa-plus'],
//            ['title' => 'edit', 'action' => 'edit', 'icon' => 'fa-file'],
//            ['title' => 'delete', 'action' => 'delete', 'icon' => 'fa-trash'],
//            ['title' => 'publish', 'action' => 'publish', 'icon' => 'fa-check'],
//        ],
//    ],
//    'pages' => [
//        'title' => 'pages',
//        'route' => 'admin.cms.pages',
//        'icon' => 'fa-users',
//        'permission' => [
//            ['title' => 'view', 'action' => 'view', 'icon' => 'fa-list'],
//            ['title' => 'create', 'action' => 'create', 'icon' => 'fa-plus'],
//            ['title' => 'edit', 'action' => 'edit', 'icon' => 'fa-file'],
//            ['title' => 'delete', 'action' => 'delete', 'icon' => 'fa-trash'],
//            ['title' => 'publish', 'action' => 'publish', 'icon' => 'fa-check'],
//        ],
//    ],
//    'banners' => [
//        'title' => 'banners',
//        'route' => 'admin.cms.banners',
//        'icon' => 'fa-users',
//        'permission' => [
//            ['title' => 'view', 'action' => 'view', 'icon' => 'fa-list'],
//            ['title' => 'create', 'action' => 'create', 'icon' => 'fa-plus'],
//            ['title' => 'edit', 'action' => 'edit', 'icon' => 'fa-file'],
//            ['title' => 'delete', 'action' => 'delete', 'icon' => 'fa-trash'],
//            ['title' => 'publish', 'action' => 'publish', 'icon' => 'fa-check'],
//        ],
//    ],


];
