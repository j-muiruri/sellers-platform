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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('goods', 'GoodsController@index');
Route::get('sellers', 'SellersController@index');
Route::get('categories', 'CategoriesController@index');
Route::group(['prefix' => 'good'], function () {
    Route::post('add', 'GoodsController@add');
    Route::get('edit/{id}', 'GoodsController@view');
    Route::post('update/{id}', 'GoodsController@update');
    Route::delete('delete/{id}', 'GoodsController@delete');
});
