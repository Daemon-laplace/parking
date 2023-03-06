<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accueil', 'App\Http\Controllers\AccueilController@index');
Route::get('/sigin', 'App\Http\Controllers\AccueilController@signin');
Route::get('/login', 'App\Http\Controllers\AccueilController@login');