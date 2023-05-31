<?php

use Illuminate\Support\Facades\Route;
//user panel start 
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\RegisterController;
use App\Http\Controllers\User\Dashboard\UserDashboardController;
//user panel end




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//user panel start
Route::get ('/',[HomeController::class,'index'])->name('user.home');
Route::get('/login',[LoginController::class,'index'])->name ('user.login');
Route::post('/login',[LoginController::class,'loginprocess'])->name('user.login.process');
Route::get('/register',[RegisterController::class,'index'])->name('user.register');
Route::post('/search-sponsor',[RegisterController::class,'search_sponsorid'])->name('search.sponsorid');
Route::post('/store',[RegisterController::class,'store'])->name('user.store');



Route::get('/dashboard',[UserDashboardController::class,'index'])->name('user.dashboard');
//user panel end

