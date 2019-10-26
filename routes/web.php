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
Route::get('/', ['as' => 'index' , 'uses' => 'HomeController@index'] );

Route::get('all-blog', ['as' => 'all-blog' , 'uses' => 'HomeController@all_blog'] );
