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


Route::get('testpage', function() {
	return view('admin.app');
});

Route::get('/login', function() {
	return view('admin.login');
});

Route::get('/register', function() {
	return view('admin.register');
});

Route::post('/create_admin', 'Auth\RegisterController@create');
Route::post('/admin_login', 'Auth\LoginController@loginAdmin');
Route::get('/admin/dashboard', function() {
	return view('admin.dashboard');
});