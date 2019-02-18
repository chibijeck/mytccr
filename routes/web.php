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

Route::get('/welcome', function () {
    return view('welcome');
});

// Main pages
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/require', function () {
    return view('pages.require');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/scheduleApt', function () {
    return view('pages.scheduleApt');
});
// ------------------------------------


// Admin pages
Route::get('/login', function () {
    return view('pages.login');
});

Route::post('/login', 'AdminController@adminLogin');

Route::get('/admin', function () {
    return view('pages.admin.dashboard');
});

Route::get('/appointments', 'AdminController@index');

Route::get('/release', 'AdminController@updateAppointmentStatus');
Route::post('/release', 'AdminController@search');

Route::get('/manageuser', 'AdminController@user');
Route::post('/manageuser', 'AdminController@actionUser');
// ------------------------------------


// User Pages
Route::get('/terms', 'AppointmentController@setService');

Route::get('/datetime', function () {
    return view('pages.user.datetime');
});
Route::post('/datetime', 'AppointmentController@getAppointmentDate');

Route::get('/form', 'AppointmentController@getServiceForm');
Route::post('/form', 'AppointmentController@createAppointment');

Route::get('/requirements', 'AppointmentController@getRequirements');

Route::get('/appointment', 'AppointmentController@getAppointmentDetails');

// ------------------------------------