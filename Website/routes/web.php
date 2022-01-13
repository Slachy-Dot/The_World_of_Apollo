<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Laravel\Sanctum\Sanctum;

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



//* Returns Home page making use of the HomeController.php
//Route::get('/', [HomeController::class, 'welcome'])->name('welcome');

Route::get('/', function () {
    return view('welcome');
});


//* Used to link to different pages, making use of the PageController.php
Route::get('/home', [PageController::class, 'Home'])->name('index');

Route::get('/discord', [PageController::class, 'Discord']);
Route::get('/apply', [PageController::class, 'McForum']);
Route::get('/test', [PageController::class, 'test'])->name('test');

Route::get('/wiki', [PageController::class, 'wiki'])->name('index');

Route::get('/blog', [BlogController::class, 'blog'])->name('blog');

//* If User is auth then show dashboard
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');})->name('dashboard');


//* everything placed here is behind auth
Route::group(['middleware' => 'auth'], function () {
    Route::resource('tasks', \App\Http\Controllers\TasksController::class);

    Route::resource('users', \App\Http\Controllers\UsersController::class);
});


