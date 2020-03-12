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

Route::get('/', function () {
   
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); 

Route::namespace ('Admin')-> prefix ('admin')-> name('admin.')->middleware('can:manage-users') -> group (function(){
Route::resource('/users',  'UsersController', ['except' => ['show', 'create', 'store']]);

    
});

Route::group(['middleware' => ['auth']], function () {




Route::get('/tenant','Admin\TenantController@index');//tenant
Route::get('/registerTenant','Admin\TenantController@create');
Route::post('/addTenant','Admin\TenantController@store');
Route::get('/edittenant/{id}','Admin\TenantController@edit'); 
Route::post('/updatetenant/{id}','Admin\TenantController@update');
Route::delete('delete-tenant/{id}','Admin\TenantController@delete');

// room
Route::get('/roomdisplay/{id}','Admin\RoomController@display');
Route::get('/room','Admin\RoomController@index');
Route::get('/insertRoom','Admin\RoomController@create');
Route::post('/addRoom','Admin\RoomController@store')->name('addRoom');
Route::get('/editroom/{id}','Admin\RoomController@edit'); 
Route::put('/updateroom/{id}','Admin\RoomController@update');
//upload image
Route::get('/uploadfile', 'UploadfileController@index');
Route::post('/uploadfile', 'UploadfileController@upload');


Route::get('/book','Admin\BookController@index');//book
Route::get('/addBooking','Admin\BookController@create');


//dropdown
Route::get('/booking','BookingController@index');
Route::get('/getBookings/{id}','BookingController@getBookings');

//dashboard
Route::get('/dashboard','DashboardController@index');

//room controllerr
// Route::get('/room','RoomController@index');

/// dynamic address

// Route::get('/dynamic_dependent', 'DynamicDependent@address_index');
// Route::post('dynamic_dependent/fetch', 'DynamicDependent@fetch')->name('dynamicdependent.fetch');

Route::get('/user-create', 'UserController@address_index');
Route::post('dynamic_dependent/fetch', 'UserController@fetch')->name('dynamicdependent.fetch');
    
// Route::get('/rooms','RoomsController@index');

//new
//booked a room
Route::get('/room-booked/{id}','RoomsController@booked');
Route::post('/store-booked','RoomsController@store');

//list of booked rooms only active
Route::get('/booked-rooms','RoomsController@booked_rooms');
//inactive booked rooms
Route::get('/booked-rooms-inactive','RoomsController@inactive_booked_rooms');
//details of active booked rooms
Route::get('/booked-room/{id}','RoomsController@booked_room_booking_details');
//mark paid booking billibng
Route::get('/pay-billing/{id}','RoomsController@pay_billing');
Route::get('/assign-room/{tenant_id}','RoomsController@assign_room');
//set booking to inactive
Route::get('/booking-inactive/{id}','RoomsController@set_booking_inactive');

//inactive bookings , billing information
Route::get('/booking-inactive-billings/{booking_id}','RoomsController@inactive_booking_billing_details');
//date range report form
Route::get('/date-range','ReportsController@index');
//date range report result
Route::post('/print','ReportsController@print');


//paid and unpaid status
Route::get('fee-status','ReportsController@fee_form');

Route::post('/submit-status','ReportsController@submit');



//tenant history
Route::get('my-billings','BillingController@index');


//create a user. admin. or tenant
Route::get('/user-create','UserController@create');
Route::post('/user-store','UserController@store');

Route::get('/type-store','UserController@index'); // for tenant and staff
Route::get('/user-store','UserController@createUser');



//print monthly report
Route::get('/print','ReportsController@print');



Route::get('/test','RoomsController@test');

});



Route::get('/sms',function(){

    $nexmo = app('Nexmo\Client');
        // dd($nexmo);
  $nexmo->message()->send([
        'to'   => '+639774572206',
        'from' => 'FROM NEXMO',
        'text' => ' Please be reminded of your due date this month'
    ]);
    dd($nexmo);
});
//dynamic room
// ss


Route::get('/month',function(){


$booking = App\Booking::where('status','=','active')->get();


$date = Carbon\Carbon::now()->isLastOfMonth();

$date2 = Carbon\Carbon::now()->firstOfMonth();

$value = null;

if($date2 == Carbon\Carbon::now()){
        $value = true;
}
$value = false;
    dd($date,$date2 , $value);

    $booking->map(function($book){
            $new = new App\BookingBilling;
            $new->booking_id = $book->id;
            $new->status = 'unpaid';
            $new->price = $book->price;
            $new->month = $date;
            $new->save();

            return $book;

    });


    dd($booking);



});







?>

