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
    $router->get('users', 'UsersController@index');

    // 廣告橫幅
    $router->resource('banners', BannersController::class);

    // 最新活動
    $router->resource('activitys', ActivitysController::class);
});
