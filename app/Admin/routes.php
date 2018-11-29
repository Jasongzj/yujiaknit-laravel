<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    $router->resource('users', UserController::class);

    $router->resource('subscriptions', SubscriptionController::class);
    $router->resource('products', ProductController::class);
    $router->resource('categories', CategoryController::class);
    $router->resource('news', NewsController::class);
    $router->resource('colors', ColorController::class);
    $router->resource('inquiries', InquiryController::class);
});
