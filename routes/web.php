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
Route::get('/','homeController@index')->name('home');
Route::get('timkiem','homeController@index')->name('timkiem');

/*Auth*/
Route::get('login','authController@login')->name('login');
Route::get('login_check','authController@submitLogin')->name('submit_login');

Route::get('logout','authController@logout')->name('dangxuat');
Route::get('register','authController@get_register')->name('dangky');
Route::post('register_add','authController@submitformregister')->name('dangky_post');
Route::group(['prefix'=>'admin','middleware'=>'auth'], function() {
    Route::get('home_admin','dashboardController@index')->name('dashboard');
});

/*end auth*/
