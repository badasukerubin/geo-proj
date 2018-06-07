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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'FrontController@index')->name('front');
Route::post('/clear_site/{data}', ['as'=>'clear_site', 'uses'=>'CSiteController@clear']);

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/login', 'Admin\LoginController@showLoginForm');
Route::post('admin/login', 'Admin\LoginController@login');
Route::post('admin/logout', 'Admin\LoginController@logout');

Route::get('/admin', 'Admin\AdminController@index')->name('admin');

Route::get('admin/reg_user', 'Admin\RUserController@index')->name('reg_user');
Route::get('admin/reg_user/destroy/{id}/{name}', 'Admin\RUserController@destroy')->name('user.destroy');
Route::get('admin/reg_user/add', 'Admin\AdduserController@index')->name('users');
Route::post('admin/reg_user/add', 'Admin\AdduserController@add')->name('users.add');

Route::get('admin/reg_admin', 'Admin\RAdminController@index')->name('reg_admin');
Route::get('admin/reg_admin/destroy/{id}/{name}', 'Admin\RAdminController@destroy')->name('admin.destroy');
Route::get('admin/reg_admin/add', 'Admin\AddadminController@index')->name('admins');
Route::post('admin/reg_admin/add', 'Admin\AddadminController@add')->name('admins.add');

Route::get('admin/upload_data', 'Admin\DataController@index')->name('data');
Route::post('admin/upload_data', 'Admin\DataController@store')->name('data.add');

