<?php

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

Auth::routes();

Route::get('/', ['as' => 'welcome', 'uses' => 'HomeController@welcome']);
Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/config/user', ['as' => 'configUser', 'uses' => 'UserController@configUser']);
