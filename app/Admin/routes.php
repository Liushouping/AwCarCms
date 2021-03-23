<?php

use Illuminate\Routing\Router;


Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    // 會員相關
    // $router->get('users', 'UsersController@index');

    // 廣告橫幅
    $router->resource('banners', BannersController::class);

    // 超跑車款
    $router->resource('products', ProductsController::class);

    // 最新優惠
    $router->resource('activitys', ActivitysController::class);

    // 超跑車款
    $router->resource('cars', CarsController::class);

    // 性能車款
    $router->resource('powers', PowersController::class);

    // 租車流程
    $router->resource('sops', SopsController::class);

    // 租車須知
    $router->resource('notices', NoticesController::class);
});
