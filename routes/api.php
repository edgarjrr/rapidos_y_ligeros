<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

//Route::resource('supermarket', 'SupermarketController');
Route::group([
	'middleware'	=> 'authorizedClient', //PASSPORT CLIENT_GRANT
], function($router){
    Route::resource('times', 'TimeController');
    Route::resource('food-categories', 'FoodCategoryController');
    Route::resource('foods', 'FoodController');
    Route::get('foods','FoodController@index');
    Route::post('foods','FoodController@show');
});

