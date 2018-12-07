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
    return view('admin.dashboard');
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
Route::get('/admin', function() {
	return view('admin.dashboard');
});
Route::get('/admin/question_category', 'CategoryController@index');
Route::post('/admin/add_questioncategory', 'CategoryController@create');
Route::post('/admin/edit_questioncategory', 'CategoryController@edit');
Route::post('/admin/delete_category', 'CategoryController@destroy');
Route::post('/admin/update_questioncategory', 'CategoryController@update');
Route::get('/admin/question_sub_category', 'SubCategoryController@index');
Route::post('/admin/add_question_sub_category', 'SubCategoryController@store');
Route::post('/admin/delete_subcategory', 'SubCategoryController@destroy');
Route::get('/admin/get_subcategory', 'SubCategoryController@getSubCategory');
Route::get('/admin/question', 'QuestionController@index');
Route::get('/admin/new_question', 'QuestionController@create');
Route::post('admin/store_question', 'QuestionController@store');

//assesment test
Route::get('load_categories', 'CategoryController@categoryAjax');
Route::get('load_subcategories', 'SubCategoryController@subcategoryAjax');
Route::post('create_assessment', 'AssessmentController@store');
Route::get('/admin/assessment', 'AssessmentController@index');
Route::get('/admin/add_assessment', 'AssessmentController@create');


