<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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
//Route::get('/', [PageController::class, 'index']);





Route::get('/', 'App\Http\Controllers\PageController@index');
Route::get('/apply', 'App\Http\Controllers\PageController@apply');
Route::get('/blog', 'App\Http\Controllers\PageController@blog');
Route::get('/discord', 'App\Http\Controllers\PageController@discord');
Route::get('/wiki', 'App\Http\Controllers\PageController@wiki');


