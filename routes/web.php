<?php

use Illuminate\Support\Facades\Route;

// 頁面相關
Route::get('/', 'PagesController@index')->name('home');

Route::get('cars', 'PagesController@car')->name('car');

Route::get('sop', 'PagesController@sop')->name('sop');

Route::get('notice', 'PagesController@notice')->name('notice');

Route::get('powers', 'PagesController@power')->name('power');

Route::resource('contact', ContactsController::class)->only([
    'index', 'store'
]);

Route::get('activity', 'PagesController@activity')->name('activity.indexActivity');
Route::get('activity/{id}', 'PagesController@ShowActivity')->name('activity.showactivity');

// 用戶相關
// Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);

// 用户身份驗證相關的路由
// Auth::routes();
