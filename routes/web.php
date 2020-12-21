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


//controllers for form with database///////////////





Route::get("/custmers/create", "CustmerController@index");
Route::get("/custmers", "CustmerController@store");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
