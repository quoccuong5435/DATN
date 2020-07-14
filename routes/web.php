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

Route::get('index', [
    'as'=>'trang-chu',
    'uses'=>'PageController@getIndex'
]);

Route::get('hotels-list',[
	'as'=>'hlist',
	'uses'=>'PageController@getList'
]);

Route::get('details',[
	'as'=>'chitiet',
	'uses'=>'PageController@getChitiet'
]);

Route::get('rooms-list',[
	'as'=>'rlist',
	'uses'=>'PageController@getRList'
]);

Route::get('signup',[
	'as'=>'dangky',
	'uses'=>'PageController@getDangky'
]);

Route::get('signin',[
	'as'=>'dangnhap',
	'uses'=>'PageController@getDangnhap'
]);