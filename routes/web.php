<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/docs', 'HomeController@docs')->name('docs');

Route::middleware(['auth'])->group(function () {
   
   Route::get('/account', 'AccountController@index')->name('account-index');
   Route::delete('/account/delete', 'AccountController@delete')->name('account-delete');

});

Auth::routes();


