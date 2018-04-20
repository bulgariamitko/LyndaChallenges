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

Route::get('/', 'ContentsController@home')->name('home');

Route::middleware('auth')->group(function() {
	Route::get('/clients', 'ClientController@index')->name('clients');
	Route::get('/clients/new', 'ClientController@newClient')->name('new_client');
	Route::post('/clients/new', 'ClientController@newClient')->name('create_client');
	Route::get('/clients/{client_id}', 'ClientController@show')->name('show_client');
	Route::post('/clients/{client_id}', 'ClientController@modify')->name('update_client');
	Route::get('export', 'ClientController@export');

	Route::get('/reservations/{client_id}', 'RoomsController@checkAvailableRooms')->name('check_room');
	Route::post('/reservations/{client_id}', 'RoomsController@checkAvailableRooms')->name('check_room_post');

	Route::get('/book/room/{client_id}/{room_id}/{date_in}/{date_out}', 'ReservationsController@bookRoom')->name('book_room');
	
	Route::get('/upload', 'ContentsController@upload')->name('upload');
	Route::post('/upload', 'ContentsController@upload')->name('upload');
});

Auth::routes();
Route::get('/generate/password', function() {
	return bcrypt('123456789');
});


// Route::get('/home', 'HomeController@index')->name('home');
// demo
Route::get('/facades/db', function () {
    return DB::select('SELECT * FROM table');
});

Route::get('/facades/encrypt', function () {
    return Crypt::encrypt('123456789');
});

Route::get('facades/decript', function() {
	return Crypt::decrypt('eyJpdiI6InZ0R0RSUFNBc0FnS09lYmZqWStzckE9PSIsInZhbHVlIjoiRXlXQVJuNUs0Vk5pMzdzZ0I4bVVPVlN0czllSE4xeFltQVlMSXBadFZYRT0iLCJtYWMiOiIyMjRkMGUyYzA2OGZiNjZiYWFiNTM2Y2RjY2I2ZGNlN2E0NDg2NmZlZmRhMDQ0ZjhmZWZhYmNkNGM2OGIwNTAxIn0=');
});
