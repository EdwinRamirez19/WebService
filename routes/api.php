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

Route::get('webservices', 'WebserviceController@index');
Route::get('webservices/{proceso}', 'WebserviceController@show');
Route::post('webservices', 'WebserviceController@store');
Route::put('webservices/{proceso}', 'WebserviceController@update');
Route::delete('webservices/{proceso}', 'WebserviceController@delete');