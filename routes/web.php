<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

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
})->middleware('auth');

Route::middleware('only-guest')->group(function(){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticating']);
});

Route::middleware('only-toolman')->group(function(){
    Route::get('dashboard', [DashboardController::class, 'dashboard']);
    Route::get('category', [CategoryController::class, 'index']);
    Route::get('category-add', [CategoryController::class, 'add']);
    Route::post('category-add', [CategoryController::class, 'store']);

    Route::get('barang', [BarangController::class, 'index']);
    Route::get('barang-add', [BarangController::class, 'add']);
    Route::post('barang-add', [BarangController::class, 'store']);
});

Route::middleware('auth')->group(function(){
    Route::get('logout', [AuthController::class, 'logout']);
});