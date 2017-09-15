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
    return view('index');
});

Route::get('index', function () {
    return view('index');
});

Route::get('update-customer', function () {
    return view('update-customer');
});

Route::get('message-settings', function () {
    return view('message-settings');
});

Route::get('history', 'HistoryController@index');

Route::get('dashboard', 'DashboardController@index');

Route::get('my-profile', 'ProfileController@index');

//Route::get('dashboard/edit/{id}',function (){
//    return view('update-customer');
// });

// Route::get('new-customer', function () {
//     return view('new-customer');
// });

Route::get('new-customer','jobing@index');

Route::post('store','jobing@store');

Route::get('dashboard/{id}/edit','jobing@show');

Route::post('dashboard/update/{id}','jobing@update');

//Route::get('dashboard/sms/{id}','jobing@sms');


// To Save the status

Route::post('dashboard/save/{id}','jobing@save');


// SMS Routes

//Route::get('message-settings','SmsController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
