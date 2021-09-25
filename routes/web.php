<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');

Route::middleware('auth')->group(function () {
    // お知らせ(編集)
    Route::resource('info', InfoController::class)->except(['index', 'show']);
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
});
// お知らせ(閲覧)
Route::resource('info', InfoController::class)->only(['index', 'show']);
// CoderDojoとは？
Route::get('whats', 'WhatsController@index')->name('whats.index');
