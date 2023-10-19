<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\loginController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('signin');
});
Route::get('/dashboard',[dashboardController::class,'dashboard'])->name('dashboard');
Route::get('/login',[loginController::class,'index'])->name('login');
Route::post('/login_proses',[loginController::class,'login_proses'])->name('login_proses');

