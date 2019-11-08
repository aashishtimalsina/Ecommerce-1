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
require 'admin.php';
Route::get('/', function () {
	return view('welcome');
});
Auth::routes();
Route::group(['middleware'=> 'auth'],function()
{
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout','Auth\LoginController@logout')->name('logout');
Route::get('/viewcustomer/fullupdate/{id}','UserController@update')->name('update-cus-info-form');
Route::POST('/viewcustomer/fullupdate/{id}','UserController@store')->name('update_user_info');
});