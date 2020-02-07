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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('work/create','Admin\WorkController@add');
    Route::post('work/create', 'Admin\WorkController@create');
    Route::get('work','Admin\WorkController@index');
    Route::get('work/edit','Admin\WorkController@edit');
    Route::post('work/edit', 'Admin\WorkController@update');
    Route::get('work/delete','Admin\WorkController@delete');
});
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'WorkController@index');
Route::get('work/{id}', 'WorkController@show');

Route::get('contact', 'ContactsController@index');
Route::post('contact/confirm', 'ContactsController@confirm');
Route::post('contact/complete', 'ContactsController@complete');


