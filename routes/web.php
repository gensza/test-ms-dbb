<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KomoditasController;
use App\Http\Controllers\ReportProduksiController;

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

Route::resource('/', KomoditasController::class);

Route::resource('komoditas', KomoditasController::class);
Route::resource('reports', ReportProduksiController::class);
