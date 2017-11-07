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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('products', 'ProductController');

Route::get('/admin/products', 'ProductsController@index')->name('index');
Route::get('/admin/products/new', 'ProductsController@new')->name('new');
Route::get('/admin/products/newcategory', 'ProductsController@newcategory')->name('newcategory');
Route::post('/admin/products/create', 'ProductsController@create')->name('create');
Route::post('/admin/products/createcategory', 'ProductsController@createcategory')->name('createcategory');
Route::get('/admin/products/show', 'ProductsController@show')->name('show');

Route::get('/admin/products/edit', 'ProductsController@edit')->name('edit');
Route::post('/admin/products/editconfirm', 'ProductsController@editconfirm')->name('editconfirm');

Route::get('/admin/products/delete', 'ProductsController@delete')->name('delete');
Route::post('/admin/products/deleteconfirm', 'ProductsController@deleteconfirm')->name('deleteconfirm');

//Route::post('/admin/products/getname', 'ProductsReturner@getname')->name('getname');
//Route::post('/admin/products/getvalue', 'ProductsReturner@getvalue')->name('getvalue');


Route::resource('categories', 'ProductsController');