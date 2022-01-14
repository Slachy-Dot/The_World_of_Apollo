<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
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


Route::get('/form', function () {
    return view('Pages.Form.index');
});

//* Used to link to different pages, making use of the PageController.php
Route::get('/home', [PageController::class, 'Home'])->name('index');


//* Direct url redirect //*
Route::get('/discord', [PageController::class, 'Discord']);
Route::get('/apply', [PageController::class, 'McForum']);
//* End of Direct url redirect //*

Route::get('/wiki', [PageController::class, 'Wiki'])->name('index');
Route::get('/blog', [PageController::class, 'Blog'])->name('index');





Route::get('/form', [FormController::class, 'Edit'])->middleware(['auth'])->name('Pages.Form.Edit');

Route::get('/form', [FormController::class, 'Update'])->middleware(['auth'])->name('Pages.Form.Update');



//* If User is auth then show dashboard //*
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');})->name('dashboard');


//* everything placed here is behind auth
Route::group(['middleware' => 'auth'], function () {
    Route::resource('tasks', \App\Http\Controllers\TasksController::class);

    Route::resource('users', \App\Http\Controllers\UsersController::class);
});


