<?php

use App\Http\Controllers\DashboardController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AlamatUDDController;
use App\Http\Controllers\StokDarahController;
use App\Http\Controllers\JadwalMUController;

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

Route::get('/', [LandingPageController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']); 
Route::post('/login', [LoginController::class, 'actionlogin']);
Route::post('/dashboard/logout', [LoginController::class, 'actionlogout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Alamat UDD View
Route::get('/dashboard/alamatudd', [AlamatUDDController::class, 'index'])->middleware('auth');

// Alamat UDD Create
Route::get('/dashboard/alamatudd/create', [AlamatUDDController::class, 'create']);
Route::post('/dashboard/alamatudd', [AlamatUDDController::class, 'store']);

// Alamat UDD Update
Route::get('/dashboard/alamatudd/edit/{id}', [AlamatUDDController::class, 'edit']);
Route::post('/dashboard/alamatudd/update', [AlamatUDDController::class, 'update']);

// Alamat UDD Delete
Route::get('/dashboard/alamatudd/delete/{id}', [AlamatUDDController::class, 'delete']);

// =======================================================================================================
// Stok Darah View
Route::get('/dashboard/stokdarah', [StokDarahController::class, 'index']);

// Stok Darah Create
Route::get('/dashboard/stokdarah/create', [StokDarahController::class, 'create']);
Route::post('/dashboard/stokdarah', [StokDarahController::class, 'store']);

// =======================================================================================================

Route::get('/dashboard/jadwalmu', [JadwalMUController::class, 'index']);


// Route::get('actionlogout', [LoginController::class, 'actionlogout'])
// ->name('actionlogout') ->middleware('auth');
