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
Route::resource('/updateCourse','AdminController');
Route::resource('/deleteCourse','AdminController');
Route::get('/school','AdminController@schoolView');
Route::post('/schoolAdd','AdminController@schoolAdd');
Route::get('/department','AdminController@departmentView');
Route::post('/departmentAdd', 'AdminController@departmentAdd');
Route::get('/course','AdminController@courseView');
Route::post('/courseAdd', 'AdminController@courseAdd');
Route::post('/editCourse','AdminController@selectCourse');
Route::get('/view-form','AdminController@addmissionForm');
Route::get('/updateView','AdminController@updatesView');
Route::post('/updatesAdd','AdminController@updatesAdd');
Route::resource('/displayAddmissionForm','AdminController');
// paystack payment
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

