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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/home','HomeController@index');

Route::post('/emailupdate','HomeController@emailupdate')->name("emailupdate");

Route::post('/home/home','HomeController@searchedcourse')->name("searchedcourse");

Route::post('/homebody/appointment','HomeController@appointment')->name("appointment");




Route::get('/adminhome','AdminController@index');

Route::get('/admin/appointment','AdminHomeController@bookedappointment')->name('admin.appointment');

Route::get('/admin/home/searchedcourse','AdminHomeController@searchedcourse')->name('admin.searchedcourse');

Route::get('/admin/home/popularcourse','AdminHomeController@popularcourse')->name('admin.popularcourse');

Route::post('/admin/home/popularcourse','AdminHomeController@addpopularcourse')->name('admin.add.popularcourse');




