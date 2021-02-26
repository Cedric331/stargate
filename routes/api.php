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

Route::get('personnages', 'PersonnageController@index');
Route::get('personnages/name/{name}', 'PersonnageController@showName');
Route::get('personnages/faction/{faction}', 'PersonnageController@showfaction');

Route::post('personnages', 'PersonnageController@store');

Route::patch('personnages/{name}', 'PersonnageController@update');
Route::delete('personnages/{name}', 'PersonnageController@destroy');
