<?php

use Illuminate\Support\Facades\Route;

// 頁面相關
Route::get('/', 'PagesController@index');
Route::get('activity/{id}', 'PagesController@ShowActivity')->name('activity.showactivity');
Route::get('info/{id}', 'PagesController@ShowInfo')->name('info.showInfo');

// 用戶相關
Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);

// 用户身份驗證相關的路由
Auth::routes();
