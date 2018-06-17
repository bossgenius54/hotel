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


Auth::routes();

Route::group(['prefix' => '/'],function (){
   Route::get('/','HomeController@index');
   Route::get('/home','HomeController@home')->name('for-redirect');
   Route::get('/about','HomeController@aboutUs');
   Route::get('/offers','HomeController@offers');
   Route::get('/contact','HomeController@contact');
   Route::get('/single_listing','HomeController@singleListing');
   Route::post('/sendRequest','AdminController@sendRequest')->name('booking');
});

Route::group(['prefix' => '/adminPanel'], function (){
    Route::get('/tab1', 'AdminController@bookingPage');
});
