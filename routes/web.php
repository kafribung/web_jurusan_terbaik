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

Route::get('/', function () {
    return redirect('/beranda');
});

Route::group(['middleware' => 'admin'], function () {
    Route::get('/beranda/create/login', 'BerandaController@create');
});

Route::resource('/beranda', 'BerandaController');


Route::get('/about', 'BerandaController@about');

Auth::routes();