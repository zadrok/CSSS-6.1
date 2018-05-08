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


Route::get('country', 'CountryAPIController@index');
Route::get('country/show', 'CountryAPIController@show');
Route::post('country/store', 'CountryAPIController@store');
Route::put('country/update', 'CountryAPIController@update');
Route::delete('country/destroy', 'CountryAPIController@destroy');


Route::get('category', 'CategoryAPIController@index');
Route::get('category/show', 'CategoryAPIController@show');
Route::post('category/store', 'CategoryAPIController@store');
Route::put('category/update', 'CategoryAPIController@update');
Route::delete('category/destroy', 'CategoryAPIController@destroy');


Route::get('user', 'UserAPIController@index');
Route::get('user/show', 'UserAPIController@show');
Route::post('user/store', 'UserAPIController@store');
Route::put('user/update', 'UserAPIController@update');
Route::delete('user/destroy', 'UserAPIController@destroy');


Route::get('role', 'RoleAPIController@index');
Route::get('role/show', 'RoleAPIController@show');
Route::post('role/store', 'RoleAPIController@store');
Route::put('role/update', 'RoleAPIController@update');
Route::delete('role/destroy', 'RoleAPIController@destroy');


Route::get('restaurant', 'RestaurantAPIController@index');
Route::get('restaurant/show', 'RestaurantAPIController@show');
Route::post('restaurant/store', 'RestaurantAPIController@store');
Route::put('restaurant/update', 'RestaurantAPIController@update');
Route::delete('restaurant/destroy', 'RestaurantAPIController@destroy');


Route::get('restaurantID', 'RestaurantIDAPIController@index');
Route::get('restaurantID/show', 'RestaurantIDAPIController@show');
Route::post('restaurantID/store', 'RestaurantIDAPIController@store');
Route::put('restaurantID/update', 'RestaurantIDAPIController@update');
Route::delete('restaurantID/destroy', 'RestaurantIDAPIController@destroy');


Route::get('postID', 'PostIDAPIController@index');
Route::get('postID/show', 'PostIDAPIController@show');
Route::post('postID/store', 'PostIDAPIController@store');
Route::put('postID/update', 'PostIDAPIController@update');
Route::delete('postID/destroy', 'PostIDAPIController@destroy');
