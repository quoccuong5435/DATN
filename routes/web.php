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
// đăng ký
Route::get('singup',[
    'as'=>'dangky',
    'uses'=>'User_Controller@index'
]);
Route::get('/logout',[
    'as'=>'dangxuat',
    'uses'=>'User_Controller@logout'
]);
Route::post('/signup',[
	'as'=>'dangky-send',
	'uses'=>'User_Controller@signup'
]);
//end
Route::get('/signin',[
	'as'=>'dangnhap',
	'uses'=>'User_Controller@index2'
]);
Route::post('/signin',[
    'as'=>'dangnhap-send',
    'uses'=>'User_Controller@signin'
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

Route::get('/admin', function(){
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

Route::get('admin/users',[
    'as'=>'user',
    'uses'=>'User_Controller@show'
]);


Route::get('/admin/users/add', function(){
    return view('admin.users.user-add');
})->name('add-user');

Route::get('/admin/users/edit', function(){
    return view('admin.users.user-edit');
})->name('edit-user');

Route::get('/admin/users/view', function(){
    return view('admin.users.user-view');
})->name('view-user');

//Begin Admin Hotel
Route::get('/admin/hotels', function(){
    return view('admin.hotels.hotel-list');
});
Route::get('admin/hotel',[
    'as'=>'hotel',
    'uses'=>'Hotel_Controller@admin_hotel'
]);
Route::post('admin/hotel/search',[
    'as'=>'hotel-search',
    'uses'=>'Hotel_Controller@search'
]);


Route::get('/admin/hotels/add',[
    'as'=>'hotel-add',
    'uses'=>'Hotel_Controller@admin_hotel_add'
]);

Route::post('/admin/hotels/add',[
    'as'=>'hotel-add-send',
    'uses'=>'Hotel_Controller@add_hotel'
]);

Route::get('/admin/hotels/edit/{id}',[
    'as'=>'edit_hotel',
    'uses'=>'Hotel_Controller@edit'
]);
Route::post('/admin/hotels/edit/{id}',[
    'as'=>'edit_hotel_send',
    'uses'=>'Hotel_Controller@update'
]);
Route::get('/admin/room-types/list_room',
[
    'as'=>'list_room',
    'uses'=>'Room_Controller@index'
]);
Route::post('/admin/room-types/list_room',
[
    'as'=>'add_rooms',
    'uses'=>'Room_Controller@add_room'
]);
Route::post('/admin/room-types/add',
[
    'as'=>'roomtypes_add_send',
    'uses'=>'Room_Controller@add_room_type'
]);
Route::get('/admin/room-types/add',
[
    'as'=>'add-roomtype',
    'uses'=>'Room_Controller@create'
]);
// End 
Route::get('/admin/room-types',[
    'as'=>'roomtypes',
    'uses'=>'Room_Controller@list_room_type'
]);



// Route::get('/admin/room-types/add', function(){
//     return view('admin.room-types.room-type-add');
// })->name('add-roomtype');

Route::get('/admin/room-types/edit', function(){
    return view('admin.room-types.room-type-edit');
})->name('edit-roomtype');

Route::get('/admin/hotel-booking', function(){
    return view('admin.hotel-booking.hotel-booking-list');
})->name('hotel-booking');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
