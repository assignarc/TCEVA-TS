<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/action/definition/edit' => [[['_route' => 'app_ActionDefinitionEdit', '_controller' => 'App\\Controller\\ActionDefinitionEditController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/action/edit' => [[['_route' => 'app_ActionEdit', '_controller' => 'App\\Controller\\ActionEditController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/edit' => [[['_route' => 'app_AdminEdit', '_controller' => 'App\\Controller\\AdminEditController::editAdmin'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_Home', '_controller' => 'App\\Controller\\HomeController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login/page' => [[['_route' => 'app_loginPage', '_controller' => 'App\\Controller\\LoginController::loginPage'], null, ['GET' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logoutPage', '_controller' => 'App\\Controller\\LoginController::logoutPage'], null, ['GET' => 0], null, false, false, null]],
        '/report/selector' => [[['_route' => 'app_ReportPage', '_controller' => 'App\\Controller\\ReportController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/report/show' => [[['_route' => 'app_ReportDisplay', '_controller' => 'App\\Controller\\ReportController::show'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/time/edit' => [[['_route' => 'app_TimeEdit', '_controller' => 'App\\Controller\\TimeEditController::timeEdit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/pages/([^/\\.]++)\\.html(*:30)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [
            [['_route' => 'app_PageRender', '_controller' => 'App\\Controller\\PageController::index'], ['page'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
