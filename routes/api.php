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

Route::middleware('auth:api')->get('personnages', 'PersonnageController@index')->name('api-index');
Route::middleware('auth:api')->get('personnages/name/{name}', 'PersonnageController@showName')->name('api-showName');
Route::middleware('auth:api')->get('personnages/faction/{faction}', 'PersonnageController@showfaction')->name('api-showfaction');

Route::middleware('auth:api')->post('admin/personnages', 'PersonnageController@store')->name('admin-store');

Route::middleware('auth:api')->patch('admin/personnages/{name}', 'PersonnageController@update')->name('admin-update');
Route::middleware('auth:api')->delete('admin/personnages/{name}', 'PersonnageController@destroy')->name('admin-destroy');
