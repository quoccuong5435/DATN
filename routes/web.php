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

Route::get('/dashboard', function(){
    return view('dashboard.main');
});

Route::get('/dashboard/hotel-booking', function(){
    return view('dashboard.hotel-booking');
});

Route::get('/dashboard/my-profile', function(){
    return view('dashboard.profile');
});

Route::get('/dashboard/my-profile/edit', function(){
    return view('dashboard.edit-profile');
});

Route::get('/dashboard/payment-list', function(){
    return view('dashboard.payment-list');
});

Route::get('/dashboard/make-payment', function(){
    return view('dashboard.payment');
});

Route::get('/dashboard/refund', function(){
    return view('dashboard.refund');
});