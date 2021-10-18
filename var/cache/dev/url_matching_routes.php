<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/article' => [[['_route' => 'article_index', '_controller' => 'App\\Controller\\ArticleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/article/new' => [[['_route' => 'article_new', '_controller' => 'App\\Controller\\ArticleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/admin/contact' => [[['_route' => 'contact_message_index', '_controller' => 'App\\Controller\\ContactMessageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\SearchController::searchBar'], null, null, null, false, false, null]],
        '/handleSearch' => [[['_route' => 'handleSearch', '_controller' => 'App\\Controller\\SearchController::handleSearch'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/tag' => [[['_route' => 'tag_index', '_controller' => 'App\\Controller\\TagController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/tag/new' => [[['_route' => 'tag_new', '_controller' => 'App\\Controller\\TagController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/type' => [[['_route' => 'type_index', '_controller' => 'App\\Controller\\TypeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/type/new' => [[['_route' => 'type_new', '_controller' => 'App\\Controller\\TypeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/users' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/users/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/video' => [[['_route' => 'video_index', '_controller' => 'App\\Controller\\VideoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/video/new' => [[['_route' => 'video_new', '_controller' => 'App\\Controller\\VideoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\WowFrontController::home'], null, null, null, false, false, null]],
        '/legal' => [[['_route' => 'legal', '_controller' => 'App\\Controller\\WowFrontController::legal'], null, null, null, false, false, null]],
        '/articles' => [[['_route' => 'articles', '_controller' => 'App\\Controller\\WowFrontController::article'], null, null, null, false, false, null]],
        '/articles/news' => [[['_route' => 'articles_news', '_controller' => 'App\\Controller\\WowFrontController::news'], null, null, null, false, false, null]],
        '/articles/guides' => [[['_route' => 'articles_guides', '_controller' => 'App\\Controller\\WowFrontController::guides'], null, null, null, false, false, null]],
        '/articles/histoire' => [[['_route' => 'articles_histoire', '_controller' => 'App\\Controller\\WowFrontController::histoire'], null, null, null, false, false, null]],
        '/videos' => [[['_route' => 'videos', '_controller' => 'App\\Controller\\WowFrontController::video'], null, null, null, false, false, null]],
        '/videos/tutoriels' => [[['_route' => 'videos_tutoriels', '_controller' => 'App\\Controller\\WowFrontController::tutoriels'], null, null, null, false, false, null]],
        '/videos/funnystuff' => [[['_route' => 'videos_funnystuff', '_controller' => 'App\\Controller\\WowFrontController::funnystuff'], null, null, null, false, false, null]],
        '/videos/worldrecord' => [[['_route' => 'videos_worldrecord', '_controller' => 'App\\Controller\\WowFrontController::worldrecord'], null, null, null, false, false, null]],
        '/searchtag' => [[['_route' => 'search_tag', '_controller' => 'App\\Controller\\WowFrontController::tag'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|article/([^/]++)(?'
                            .'|(*:200)'
                            .'|/edit(*:213)'
                            .'|(*:221)'
                        .')'
                        .'|contact/([^/]++)(?'
                            .'|(*:249)'
                        .')'
                        .'|t(?'
                            .'|ag/([^/]++)(?'
                                .'|(*:276)'
                                .'|/edit(*:289)'
                                .'|(*:297)'
                            .')'
                            .'|ype/([^/]++)(?'
                                .'|(*:321)'
                                .'|/edit(*:334)'
                                .'|(*:342)'
                            .')'
                        .')'
                        .'|users/([^/]++)(?'
                            .'|(*:369)'
                            .'|/edit(*:382)'
                            .'|(*:390)'
                        .')'
                        .'|video/([^/]++)(?'
                            .'|(*:416)'
                            .'|/edit(*:429)'
                            .'|(*:437)'
                        .')'
                    .')'
                    .'|rticle/([^/]++)(*:462)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:507)'
                .'|/video/([^/]++)(*:530)'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:592)'
                    .'|([A-z0-9_-]*)/(.+)(*:618)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        200 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        213 => [[['_route' => 'article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        221 => [[['_route' => 'article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        249 => [
            [['_route' => 'contact_message_show', '_controller' => 'App\\Controller\\ContactMessageController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'contact_message_delete', '_controller' => 'App\\Controller\\ContactMessageController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        276 => [[['_route' => 'tag_show', '_controller' => 'App\\Controller\\TagController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        289 => [[['_route' => 'tag_edit', '_controller' => 'App\\Controller\\TagController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        297 => [[['_route' => 'tag_delete', '_controller' => 'App\\Controller\\TagController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        321 => [[['_route' => 'type_show', '_controller' => 'App\\Controller\\TypeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        334 => [[['_route' => 'type_edit', '_controller' => 'App\\Controller\\TypeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        342 => [[['_route' => 'type_delete', '_controller' => 'App\\Controller\\TypeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        369 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        382 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        390 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        416 => [[['_route' => 'video_show', '_controller' => 'App\\Controller\\VideoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        429 => [[['_route' => 'video_edit', '_controller' => 'App\\Controller\\VideoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        437 => [[['_route' => 'video_delete', '_controller' => 'App\\Controller\\VideoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        462 => [[['_route' => 'show_article', '_controller' => 'App\\Controller\\WowFrontController::showArticle'], ['id'], null, null, false, true, null]],
        507 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        530 => [[['_route' => 'show_video', '_controller' => 'App\\Controller\\WowFrontController::showVideo'], ['id'], null, null, false, true, null]],
        592 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        618 => [
            [['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
