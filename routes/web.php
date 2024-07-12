<?php

use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\HomeController;
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

Route::get('/', [LoginController::class, 'index'])->name('login');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');

// Routes for KriteriaController
Route::get('/kriteria/dataKriteria', [KriteriaController::class, 'index']);
Route::get('/kriteria/createKriteria', [KriteriaController::class, 'create']);
Route::post('/kriteria/createKriteria', [KriteriaController::class, 'store']);
Route::get('/{id}/editKriteria', [KriteriaController::class, 'edit']);
Route::put('/{id}/editKriteria', [KriteriaController::class, 'update']);
Route::get('/{id}/deleteKriteria', [KriteriaController::class, 'destroy']);

// Routes for AlternatifController
Route::get('/alternatif/dataAlternatif', [AlternatifController::class, 'index']);
Route::get('/alternatif/createAlternatif', [AlternatifController::class, 'create']);
Route::post('/alternatif/createAlternatif', [AlternatifController::class, 'store']);
Route::get('/{id}/editAlternatif', [AlternatifController::class, 'edit']);
Route::put('/{id}/editAlternatif', [AlternatifController::class, 'update']);
Route::get('/{id}/deleteAlternatif', [AlternatifController::class, 'destroy']);

// Routes for HasilController
Route::get('/hasilHitung/hasil', [HasilController::class, 'hasil']);
