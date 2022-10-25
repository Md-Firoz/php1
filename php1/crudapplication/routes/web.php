<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;

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

Route::resource('/contact', ContactController::class);
Route::resource('/post', PostController::class);

Route::get('/view{id}', [ContactController::class,'view']);
Route::get('/view{id}', [PostController::class,'view']);

