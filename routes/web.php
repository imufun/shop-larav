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
//Route::get('/admin-login','AdminController@index');
//Route::post('/admin-dashboard', 'AdminController@dashboard');
//Route::get('/logout', 'SuperAdminController@logout');

Route::match(['get', 'post'], '/admin-login', 'AdminController@login');

Route::get('/logout', 'AdminController@logout');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/dashboard', 'AdminController@admin_dashboard');
    Route::get('/admin/settings', 'AdminController@settings');
    Route::get('/admin/check-password', 'AdminController@checkPassword');
    Route::match(['get', 'post'], '/admin/update-password', 'AdminController@updatePassword');

    //Category
    Route::match(['get', 'post'], '/admin/add-category', 'CategoryController@addCategory');
    Route::match(['get', 'post'], '/admin/edit-category/{id}', 'CategoryController@categoryEdit');
    Route::match(['get', 'post'], '/admin/delete-category/{id}', 'CategoryController@categoryIdDelete');
    Route::get('/admin/manage-category', 'CategoryController@manageCategory');


    //Brand
    Route::match(['get', 'post'], '/admin/add-brand', 'BrandController@addBrand');


    //product
    Route::match(['get', 'post'], '/admin/add-product', 'ProductController@addProduct');
    Route::match(['get', 'post'], '/admin/edit-product/{id}', 'ProductController@editProduct');
    Route::get('/admin/manage-product', 'ProductController@manageProduct');


});


/*--- Categories-----*/
//Route::get('/add-category', 'CategoryController@index');


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
