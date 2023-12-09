<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/rayfatech/register', [RegistController::class, 'create'])->name('register');
Route::post('/rayfatech/register', [RegistController::class, 'store']);

Route::get('/rayfatech/login', [LoginController::class, 'index'])->name('login');
Route::post('/rayfatech/login', [LoginController::class, 'auth']);
Route::get('/rayfatech/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/rayfatech', [DashboardController::class, 'home'])->name('home');
Route::get('/rayfatech/home', [DashboardController::class, 'home'])->name('home');

// ganti jadi auth nanti
Route::middleware('guest')->group(function () {
    Route::get('/rayfatech/catalog', [DashboardController::class, 'catalog'])->name('catalog');
    Route::get('/rayfatech/cart', [DashboardController::class, 'cart'])->name('cart');
    Route::get('/rayfatech/shop', [DashboardController::class, 'shop'])->name('shop');
});
