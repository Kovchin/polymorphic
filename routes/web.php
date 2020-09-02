<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/staffCreatePhoto/{staff_id}/{photo_path}', 'MyApp@staffCreatePhoto');
Route::get('/productCreatePhoto/{product_id}/{photo_path}', 'MyApp@productCreatePhoto');
Route::get('/showStaffPhotos/{staff_id}', 'MyApp@showStaffPhotos');
Route::get('/showProductPhoto/{product_id}', 'MyApp@showProductPhoto');
Route::get('/updateProductPhoto/{product_id}/{photo_id}/{newPhotoPath}', 'MyApp@updateProductPhoto');
Route::get('/deleteProductPhoto/{product_id}', 'MyApp@deleteProductPhoto');
