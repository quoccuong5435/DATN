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
})->name('dashboard');

Route::get('/dashboard/hotel-booking', function(){
    return view('dashboard.hotel-booking');
})->name('db-hotelbooking');

Route::get('/dashboard/hotel-booking/details', function(){
    return view('dashboard.hotel-booking-details');
})->name('db-hoteldetails');

Route::get('/dashboard/my-profile', function(){
    return view('dashboard.profile');
})->name('db-profile');

Route::get('/dashboard/my-profile/edit', function(){
    return view('dashboard.edit-profile');
})->name('db-editprofile');

Route::get('/dashboard/payment-list', function(){
    return view('dashboard.payment-list');
})->name('db-payment');

Route::get('/dashboard/make-payment', function(){
    return view('dashboard.payment');
})-> name('db-makepayment');

Route::get('/dashboard/refund', function(){
    return view('dashboard.refund');
})->name('db-refund');

Route::get('/admin/index', function(){
    return view('admin.index');
})->name('index');

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
})->name('user');

Route::get('/admin/users/add', function(){
    return view('admin.users.user-add');
})->name('add-user');

Route::get('/admin/users/edit', function(){
    return view('admin.users.user-edit');
})->name('edit-user');

Route::get('/admin/users/view', function(){
    return view('admin.users.user-view');
})->name('view-user');

Route::get('/admin/hotels', function(){
    return view('admin.hotels.hotel-list');
});
Route::get('admin/hotel',[
    'as'=>'hotel',
    'uses'=>'Hotel_Controller@admin_hotel'
]);

Route::get('/admin/hotels/add',[
    'as'=>'hotel-add',
    'uses'=>'Hotel_Controller@admin_hotel_add'
]);
Route::get('/admin/hotels/add',[
    'as'=>'hotel-add',
    'uses'=>'Hotel_Controller@admin_hotel_add'
]);
Route::post('/admin/hotels/add',[
    'as'=>'hotel-add-send',
    'uses'=>'Hotel_Controller@add_hotel'
]);

Route::get('/admin/hotels/edit', function(){    
    return view('admin.hotels.hotel-edit');
})->name('edit-hotel');

Route::get('/admin/room-types', function(){
    return view('admin.room-types.room-type-list');
})->name('roomtypes');

Route::get('/admin/room-types/add', function(){
    return view('admin.room-types.room-type-add');
})->name('add-roomtype');

Route::get('/admin/room-types/edit', function(){
    return view('admin.room-types.room-type-edit');
})->name('edit-roomtype');

Route::get('/admin/hotel-booking', function(){
    return view('admin.hotel-booking.hotel-booking-list');
})->name('hotel-booking');