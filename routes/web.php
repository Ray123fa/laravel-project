<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistController;
use App\Http\Controllers\DashboardController;
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
    return view('welcome');
});

Route::get('/gdrivedownload', function () {
    return view('gdrivedownload.index');
});

Route::get('/rayfatech', function () {
    return view('rayfatech.index');
});

Route::get('/rayfatech/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/rayfatech/login', [LoginController::class, 'auth']);
Route::get('/rayfatech/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/rayfatech/register', [RegistController::class, 'create']);
Route::post('/rayfatech/register', [RegistController::class, 'store']);
