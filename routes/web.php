<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware("guest");
Route::post('/login', [LoginController::class, 'auth'])->name('login')->middleware("guest");
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware("guest");
Route::post('/register', [RegisterController::class, 'store'])->name('register')->middleware("guest");

// route for index page
Route::get('/home', function () {
    return view('index');
})->middleware('auth');

// route for logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
