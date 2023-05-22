<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BanksampahController;
use App\Http\Controllers\SampahController;

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

// Route::get('/', function () {
//     return view('welcome');


    //DATA BANK SAMPAH
    Route::get('/', [BanksampahController::class, 'indexBs'])->name('admin.banksampah');
    Route::get('/kelolabs/formtambah', [BanksampahController::class, 'formTambahBS'])->name('admin.banksampah.formtambah');
    Route::get('/kelolabs/formubah/{id}', [BanksampahController::class, 'formUbahBS'])->name('admin.banksampah.formubah');
    Route::post('/kelolabs/tambah', [BanksampahController::class, 'tambahBS'])->name('admin.banksampah.tambah');
    Route::post('/kelolabs/ubah/{id}', [BanksampahController::class, 'ubahBS'])->name('admin.banksampah.ubah');
    Route::get('/kelolabs/detail/{id}', [BanksampahController::class, 'detailBS'])->name('admin.banksampah.detail');


    //DATA SAMPAH
    Route::get('/kelolasampah/index', [SampahController::class, 'indexSampah'])->name('admin.datasampah');
    Route::get('/kelolasampah/datasampah/{id}', [SampahController::class, 'dataSampah'])->name('admin.kelolasampah.datasampah');
    Route::get('/kelolasampah/formtambah/{id}', [SampahController::class, 'formTambahSampah'])->name('admin.kelolasampah.formtambah');
    Route::post('/kelolasampah/tambah', [SampahController::class, 'tambahSampah'])->name('admin.kelolasampah.tambah');
    // Route::get('/kelolasampah/detail/{id}', [SampahController::class, 'detailSampah'])->name('admin.kelolasampah.detail');
    
    Route::get('/kelolasampah/detail/{banksampah_id}/sampah{sampah_id}', [SampahController::class, 'detailSampah'])->name('admin.kelolasampah.detail');
    // Route::get(user/{id}/{nama})
    
// });
