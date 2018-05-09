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


// Route::resource('restaurants', 'RestaurantsController');
// Route::resource('categories', 'CategoriesController');
// Route::resource('comments', 'CommentsController');
// Route::resource('countries', 'CountriesController');
// Route::resource('posts', 'PostsController');
// Route::resource('roles', 'RolesController');
// Route::resource('rolesUser', 'RoleUserController');
// Route::resource('users', 'UsersController');


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


Route::get('post', 'PostAPIController@index');
Route::get('post/show', 'PostAPIController@show');
Route::post('post/store', 'PostAPIController@store');
Route::put('post/update', 'PostAPIController@update');
Route::delete('post/destroy', 'PostAPIController@destroy');


Route::get('comment', 'CommentAPIController@index');
Route::get('comment/show', 'CommentAPIController@show');
Route::post('comment/store', 'CommentAPIController@store');
Route::put('comment/update', 'CommentAPIController@update');
Route::delete('comment/destroy', 'CommentAPIController@destroy');




// Route::get('orderwithdetails/{id}','OrderController@orderwithdetails');
// Route::resource('orders', 'OrderController');
// Route::resource('orderdetails', 'OrderDetailController');
//
// Route::get('orders/createorderdetailswithorderid/{id}', 'OrderController@orderwithdetailswithcreate');
// Route::post('orders/createorderdetailswithorderid', 'OrderController@createorderdetailswithorderid');


Route::get('/', function () {
    return view('welcome');
});

//Route::get('/showRestaurant', 'RestaurantController@data');

// Route::get('/showRestaurant', function () {
//   $data = [ ['Restaurant', 'Location', 'Cusinie Type'],
//             ['Waya', 'Glen Waverley', 'Japanese'],
//             ['Uncle Jack', 'Wheelers Hill', 'Chinese'],
//             ['Bon Chicker and Beer', 'Glen Waverley', 'Korean'] ];
//     return view( 'showRestaurant', compact('data') );
// });
//
// Route::get('/createorder/{regno}/{regstate}/{custname}/{custphone}/{vehbrand}/{vehmodel}/{vehyear}/{serialno}', 'OrderController@createOrder');
//
// Route::get('/showallorders', 'OrderController@showAllOrders');
//
//
//
//
// Route::get('/restShowAll', 'RestaurantController@showallRestaurants');
// Route::get('/restNew/{restid}/{restname}/{restphone}/{restaddress1}/{restaddress2}/{suburb}/{state}/{numberofseats}', 'RestaurantController@insertRestaurant');
// Route::get('/restUpdate/{restid}/{restname}/{restphone}/{restaddress1}/{restaddress2}/{suburb}/{state}/{numberofseats}', 'RestaurantController@updateRestaurant');
// Route::get('/restDelete/{restid}', 'RestaurantController@deleteRestaurant');
