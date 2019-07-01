<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('food-trucks/{foodTruck}','API\FoodTruckController@update');

Route::post('food-trucks/{foodTruck}/menus','API\MenuController@store');
Route::get('menus/{menu}','API\MenuController@show');
Route::get('menus/{menu}/delete','API\MenuController@destroy');

Route::post('menus/{menu}/items','API\MenuItemController@store');

Route::get('menu-items/{item}/delete','API\MenuItemController@destroy');

Route::resource('food-trucks','API\FoodTruckController');
