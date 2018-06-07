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



/*
|--------------------------------------------------------------------------
| Web Admin BACKENDS
|--------------------------------------------------------------------------
|
*/
Route::get('/admin-login','AdminController@index');
Route::get('/dashboard', 'AdminController@admin_dashboard');
Route::post('/admin-dashboard', 'AdminController@dashboard');
Route::get('/logout', 'SuperAdminController@logout');

Route::get(['get', 'post'], 'admin','AdminController@index');








/*--- Category-----*/
Route::get('/add-category', 'CategoryController@index');













/*
|--------------------------------------------------------------------------
| Web FrontEND
|--------------------------------------------------------------------------
|
*/



Route::get('/', function () {
    return view('web.layouts.default');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');