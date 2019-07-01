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

Route::get('home', 'HomeController@index')->name('home');

Route::get('admin/routes', 'HomeController@admin')->middleware('admin');

Route::group(['prefix'=>'food-trucks'], function(){
	Route::get('{slug}','FoodTruckController@show');
	Route::get('{slug}/edit','FoodTruckController@edit');
	Route::post('{slug}/update','FoodTruckController@update');
	
	Route::group(['prefix'=>'{slug}'], function(){
		Route::get('menus/create','MenuController@create');
		Route::resource('menus','MenuController');
	});

	Route::resource('/','FoodTruckController');
});

