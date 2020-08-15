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
    'uses'=>'Hotel_Controller@home'
]);

Route::get('/hotels-list/{id}',[
	'as'=>'hotel_list',
	'uses'=>'Hotel_Controller@list_hotel_place'
]);

Route::get('/details/{id}',[
	'as'=>'chitiet',
	'uses'=>'Hotel_Controller@show'
]);
// Route::post('admin/hotel/search',[
//     'as'=>'place-search',
//     'uses'=>'Hotel_Controller@search_place'
// ]);

Route::get('/rooms-list',[
	'as'=>'rlist',
	'uses'=>'Hotel_Controller@s'
]);
// đăng ký
Route::get('/signup',[
    'as'=>'dangky',
    'uses'=>'User_Controller@index'
]);

// đăng ký partner
Route::get('/signup-partner',[
    'as'=>'dangky-partner',
    'uses'=>'User_Controller@partner_index'
]);

// signup partner
Route::post('/signup-partner',[
    'as'=>'dangky-partner-send',
    'uses'=>'User_Controller@partner'
]);

// xữ lý dk
Route::post('/signup',[
    'as'=>'dangky-send',
    'uses'=>'User_Controller@signup'
]);
// logout
Route::get('/logout',[
    'as'=>'dangxuat',
    'uses'=>'User_Controller@logout'
]);
Route::get('/logout',[
    'as'=>'dangxuat',
    'uses'=>'User_Controller@logout_admin'
]);

//signin user
Route::get('/signin',[
	'as'=>'dangnhap',
	'uses'=>'User_Controller@index2'
]);

// xu ly danh nhap
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

Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function() {
   Route::get('/', [
    'as'=>'admin',
    'uses'=>'User_Controller@admin'
]);

   Route::get('/users',[
    'as'=>'user',
    'uses'=>'User_Controller@show'
]);

Route::get('/login', [
    'as'=>'get_login',
    'uses'=>'User_Controller@get_login'
]);

Route::post('/login',[
    'as'=>'signin-admin',
    'uses'=>'User_Controller@signin_admin'
]);

Route::get('/forgot', function(){
    return view('admin.forgot-pass');
});
Route::get('/profile', function(){
    return view('admin.admin-profile');
})->name('ad-profile');

Route::get('/users',[
    'as'=>'user',
    'uses'=>'User_Controller@show'
]);

Route::get('/users/add', function(){
    return view('admin.users.user-add');
})->name('add-user');

Route::get('/users/edit', function(){
    return view('admin.users.user-edit');
})->name('edit-user');

Route::get('/users/view', function(){
    return view('admin.users.user-view');
})->name('view-user');

Route::get('/hotels', function(){
    return view('admin.hotels.hotel-list');
});
Route::get('/hotel',[
    'as'=>'hotel',
    'uses'=>'Hotel_Controller@admin_hotel'
]);
Route::post('/hotel/search',[
    'as'=>'hotel-search',
    'uses'=>'Hotel_Controller@search'
]);
Route::get('/hotels/add',[
    'as'=>'hotel-add',
    'uses'=>'Hotel_Controller@admin_hotel_add'
]);

Route::post('/hotels/add',[
    'as'=>'hotel-add-send',
    'uses'=>'Hotel_Controller@add_hotel'
]);

Route::get('/hotels/edit/{id}',[
    'as'=>'edit_hotel',
    'uses'=>'Hotel_Controller@edit'
]);
Route::get('/hotels/info/{id}',[
    'as'=>'info_hotel',
    'uses'=>'Hotel_Controller@info'
]);
Route::post('/hotels/edit/{id}',[
    'as'=>'edit_hotel_send',
    'uses'=>'Hotel_Controller@update'
]);
Route::get('/room-types/list_room/{id}',
[
    'as'=>'list_room',
    'uses'=>'Room_Controller@index'
]);
Route::post('/room-types/list_room',
[
    'as'=>'add_rooms',
    'uses'=>'Room_Controller@add_room'
]);
Route::post('/room-types/add',
[
    'as'=>'roomtypes_add_send',
    'uses'=>'Room_Controller@add_room_type'
]);
Route::get('/room-types/add',
[
    'as'=>'add-roomtype',
    'uses'=>'Room_Controller@create'
]);
// End 
Route::get('/room-types',[
    'as'=>'roomtypes',
    'uses'=>'Room_Controller@list_room_type'
]);
Route::get('/room-types/edit', function(){
    return view('admin.room-types.room-type-edit');
})->name('edit-roomtype');

Route::get('/hotel-booking', function(){
    return view('admin.hotel-booking.hotel-booking-list');
})->name('hotel-booking');

});


















//Begin Admin Hotel






// Route::get('/admin/room-types/add', function(){
//     return view('admin.room-types.room-type-add');
// })->name('add-roomtype');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
