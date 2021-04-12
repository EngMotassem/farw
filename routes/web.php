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

Route::get('/test',function(){

    return('test page');
});


Route::get('/landing','LandingController@index');

Route::get('ts','TeacherStatusController@getStatus');
Route::get('addts','TeacherStatusController@saveStatus');
Route::post('savets','TeacherStatusController@storeStatus')->name('Teacher.storeStatus');

Route::post('basicData','HomeController@saveBasic')->name('Home.savebasic');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
