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

Route::get('/', [
    'as'=>'trang-chu',
    'uses'=>'PageController@getIndex'
]);

Route::get('/hotels-list',[
	'as'=>'hlist',
	'uses'=>'Hotel_Controller@index'
]);

Route::get('/details/{id}',[
	'as'=>'chitiet',
	'uses'=>'Hotel_Controller@show'
]);

Route::get('/rooms-list',[
	'as'=>'rlist',
	'uses'=>'Hotel_Controller@s'
]);

Route::get('/signup',[
	'as'=>'dangky',
	'uses'=>'PageController@getDangky'
]);

Route::get('/signin',[
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

Route::get('/admin/index', function(){
    return view('admin.index');
});

Route::get('/admin/login', function(){
    return view('admin.login');
});

Route::get('/admin/forgot', function(){
    return view('admin.forgot-pass');
});

Route::get('/admin/profile', function(){
    return view('admin.admin-profile');
});

Route::get('/admin/users', function(){
    return view('admin.users.user-list');
});

Route::get('/admin/users/add', function(){
    return view('admin.users.user-add');
});

Route::get('/admin/users/edit', function(){
    return view('admin.users.user-edit');
});

Route::get('/admin/users/view', function(){
    return view('admin.users.user-view');
});

Route::get('/admin/hotels', function(){
    return view('admin.hotels.hotel-list');
});

Route::get('/admin/hotels/add', function(){
    return view('admin.hotels.hotel-add');
});

Route::get('/admin/hotels/edit', function(){
    return view('admin.hotels.hotel-edit');
});

Route::get('/admin/room-types', function(){
    return view('admin.room-types.room-type-list');
});

Route::get('/admin/room-types/add', function(){
    return view('admin.room-types.room-type-add');
});

Route::get('/admin/room-types/edit', function(){
    return view('admin.room-types.room-type-edit');
});

Route::get('/admin/hotel-booking', function(){
    return view('admin.hotel-booking.hotel-booking-list');
});