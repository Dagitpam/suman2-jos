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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/addmission_slip','StudentsController@addmission_slip');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PagesController@index');
Route::resource('/student','StudentsController');
Route::get('/application-form','StudentsController@create');
Route::resource('/admin-index','AdminController');
Route::get('/view-form','AdminController@addmissionForm');
Route::resource('/displayAddmissionForm','AdminController');
// paystack payment
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

