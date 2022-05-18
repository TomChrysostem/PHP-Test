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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('products', 'ProductController@index');
Route::get('products/{id}', 'ProductController@show');
Route::post('products', 'ProductController@store');
Route::put('products/{id}', 'ProductController@update');
Route::delete('products/{id}', 'ProductController@delete');

Route::get('categories', 'CategoryController@index');
Route::get('categories/{id}', 'CategoryController@show');
Route::post('categories', 'CategoryController@store');
Route::put('categories/{id}', 'CategoryController@update');
Route::delete('categories/{id}', 'CategoryController@delete');

Route::get('carts', 'CartItemController@index');
Route::get('carts/{id}', 'CartItemController@show');
Route::post('carts', 'CartItemController@store');
Route::put('carts/{id}', 'CartItemController@update');
Route::delete('carts/{id}', 'CartItemController@delete');