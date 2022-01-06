<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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
    return redirect('/login');
});

Auth::routes();


//dashboard
Route::get('/home', 'HomeController@index')->name('home');

//user
Route::get('/user/profile', 'UserController@profile')->name('user.profile');
Route::get('/user/products', 'UserController@products')->name('user.products');


//product
Route::get('/product/detail/{id}', 'ProductController@details')->name('product.detail');

Route::get('/product/create', 'ProductController@create')->name('product.create');
Route::post('/product/create/save', 'ProductController@createSave')->name('product.create.save');

Route::get('/product/delete', 'ProductController@delete')->name('product.delete');
Route::post('/product/delete/save/{id}', 'ProductController@deleteSave')->name('product.delete.save');


Route::post('/user/sell/{id?}', 'ProductController@sell')->name('product.sell');
Route::post('/user/buy/{id?}', 'ProductController@buy')->name('product.buy');

