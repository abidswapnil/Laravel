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

Route::get('/', 'pagesController@index')->name('index');
Route::get('/about', 'pagesController@about')->name('about');
Route::get('/contact', 'pagesController@contact')->name('contact');
Route::get('/home','pagesController@home')->name('home');


Route::get('/products','pagesController@products')->name('products');


//Route::get('/', 'pagesController@home');
