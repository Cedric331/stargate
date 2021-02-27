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

Route::middleware('auth:api')->get('personnages', 'PersonnageController@index');
Route::middleware('auth:api')->get('personnages/name/{name}', 'PersonnageController@showName');
Route::middleware('auth:api')->get('personnages/faction/{faction}', 'PersonnageController@showfaction');

Route::middleware('auth:api')->post('personnages', 'PersonnageController@store');

Route::middleware('auth:api')->patch('personnages/{name}', 'PersonnageController@update');
Route::middleware('auth:api')->delete('personnages/{name}', 'PersonnageController@destroy');
