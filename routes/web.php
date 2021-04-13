<?php

use Illuminate\Support\Facades\Route;

// 首頁
Route::get('/', 'PagesController@index')->name('home');
// 超跑車款
Route::get('cars', 'PagesController@car')->name('car');
// 租車流程
Route::get('sop', 'PagesController@sop')->name('sop');
// 租車須知
Route::get('notice', 'PagesController@notice')->name('notice');
// 性能車款
Route::get('powers', 'PagesController@power')->name('power');
// 隱私政策
Route::get('/privacy-policy', 'PagesController@policy')->name('policy');
// 聯絡我們
Route::resource('contact', ContactsController::class)->only([
    'index', 'store'
]);
// 超跑預約
Route::resource('reservation', ReservationsController::class)->only([
    'store'
]);
// 最新優惠
Route::get('activity', 'PagesController@activity')->name('activity.indexActivity');
Route::get('activity/{id}', 'PagesController@ShowActivity')->name('activity.showactivity');

// 用戶相關
// Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);

// 用户身份驗證相關的路由
// Auth::routes();
