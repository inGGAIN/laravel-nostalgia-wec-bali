<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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
Route::get('/',[PageController::class,'home'])->name('home');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::get('/about',[PageController::class,'about'])->name('about');

Route::get('/nostalgia/user/login', [UserController::class,'loginForm'])->name('login');
Route::post('/login', [UserController::class,'loginAction'])->name('login.action');
Route::get('/logout', [UserController::class,'logout'])->name('logout');