<?php

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

Route::get('/home', function () {
    return view('home', [
        'title' => 'home'
    ]);
});

// Route::get('/kriteria/dataKriteria', function () {
//     return view('kriteria.dataKriteria', [
//         'title' => 'dataKriteria'
//     ]);
// });

Route::get('/kriteria/dataKriteria', [App\Http\Controllers\KriteriaController::class, 'index']);
Route::get('/kriteria/create', [App\Http\Controllers\KriteriaController::class, 'create']);
Route::post('/kriteria/create', [App\Http\Controllers\KriteriaController::class, 'store']);

Route::get('/alternatif/dataAlternatif', function () {
    return view('alternatif.dataAlternatif', [
        'title' => 'dataAlternatif'
    ]);
});
