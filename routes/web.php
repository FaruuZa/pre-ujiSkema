<?php

use App\Http\Controllers\barangController;
use App\Http\Controllers\supplierController;
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

Route::get('/', function(){
    return view('welcome');
});
Route::get('/data-supplier', [supplierController::class, 'index']);
Route::get('/data-barang', [barangController::class, 'index']);

Route::get('/data-barang/tambah', [barangController::class, 'tambah']);
Route::post('/data-barang/tambah', [barangController::class, 'simpan']);

Route::get('/data-barang/edit/{code}', [barangController::class, 'edit']);
Route::post('/data-barang/edit/{code}', [barangController::class, 'update']);

Route::get('/data-barang/destroy/{code}', [barangController::class, 'destroy']);

Route::get('/barang-terkirim/tambah', [barangController::class, 'tambahKirim']);
Route::post('/barang-terkirim/tambah', [barangController::class, 'simpanKirim']);

Route::get('/barang-terkirim/edit/{code}', [barangController::class, 'editKirim']);
Route::post('/barang-terkirim/edit/{code}', [barangController::class, 'updateKirim']);

Route::get('/barang-terkirim/destroy/{id}', [barangController::class, 'destroyKirim']);

Route::get('/barang-terkirim', [barangController::class, 'indexKirim']);

Route::get('/detail/{supplier_id}', [supplierController::class, 'detail']);

