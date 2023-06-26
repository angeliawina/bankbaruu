<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BanksampahController;
use App\Http\Controllers\SigbsController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\PetaController;
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
    Route::get('/', [BanksampahController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/kelolabs/index', [BanksampahController::class, 'indexBs'])->name('admin.banksampah');
    Route::get('/kelolabs/formtambah', [BanksampahController::class, 'formTambahBS'])->name('admin.banksampah.formtambah');
    Route::get('/kelolabs/formubah/{id}', [BanksampahController::class, 'formUbahBS'])->name('admin.banksampah.formubah');
    Route::post('/kelolabs/tambah', [BanksampahController::class, 'tambahBS'])->name('admin.banksampah.tambah');
    Route::post('/kelolabs/ubah/{id}', [BanksampahController::class, 'ubahBS'])->name('admin.banksampah.ubah');
    Route::get('/kelolabs/detail/{id}', [BanksampahController::class, 'detailBS'])->name('admin.banksampah.detail');
    Route::get('/kelolabs/hapus/{id}', [BanksampahController::class, 'hapusBS'])->name('admin.banksampah.hapus');
    Route::get('/kelolabs/titik', [BanksampahController::class, 'titik'])->name('admin.banksampah.titik');
    Route::get('/kelolabs/popup/{id}', [BanksampahController::class, 'popup'])->name('admin.banksampah.popup');



    //DATA SAMPAH
    Route::get('/kelolasampah/index', [SampahController::class, 'indexSampah'])->name('admin.datasampah');
    Route::get('/kelolasampah/datasampah/{id}', [SampahController::class, 'dataSampah'])->name('admin.kelolasampah.datasampah');
    Route::get('/kelolasampah/formtambah/{id}', [SampahController::class, 'formTambahSampah'])->name('admin.kelolasampah.formtambah');
    Route::post('/kelolasampah/tambah', [SampahController::class, 'tambahSampah'])->name('admin.kelolasampah.tambah');
    // Route::get('/kelolasampah/detail/{id}', [SampahController::class, 'detailSampah'])->name('admin.kelolasampah.detail');
    Route::get('/kelolasampah/formubah/{banksampah_id}/sampah/{id}', [SampahController::class, 'formUbahSampah'])->name('admin.kelolasampah.formubah');
    Route::get('/kelolasampah/detail/{banksampah_id}/sampah/{id}', [SampahController::class, 'detailSampah'])->name('admin.kelolasampah.detail');
    Route::post('/kelolasampah/ubah/{banksampah_id}/sampah/{id}', [SampahController::class, 'ubahSampah'])->name('admin.kelolasampah.ubah');
    // Route::get(user/{id}/{nama})
    Route::get('/kelolasampah/hapus/{id}', [SampahController::class, 'hapusSampah'])->name('admin.kelolasampah.hapus');


    //DATA KECAMATAN
    Route::get('/kelolakecamatan/index', [KecamatanController::class, 'index'])->name('admin.datakecamatan');
    Route::get('/kelolakecamatan/formtambah', [KecamatanController::class, 'formTambahKecamatan'])->name('admin.kelolakecamatan.formtambah');
    Route::post('/kelolakecamatan/tambah', [KecamatanController::class, 'tambahKec'])->name('admin.kelolakecamatan.tambah');
    Route::get('/kelolakecamatan/detail/{id}', [KecamatanController::class, 'detailKec'])->name('admin.kelolakecamatan.detail');
    Route::get('/kelolakecamatan/formubahkecamatan/{id}', [KecamatanController::class, 'formUbahKec'])->name('admin.kelolakecamatan.formubahkecamatan');
    Route::post('/kelolakecamatan/ubah/{id}', [KecamatanController::class, 'ubahKec'])->name('admin.kelolakecamatan.ubah');
    Route::get('/kelolakecamatan/hapus/{id}', [KecamatanController::class, 'hapusKec'])->name('admin.kelolakecamatan.hapus');

    //PETA
    Route::get('/pemetaan/map', [PetaController::class, 'map'])->name('admin.map');
    Route::get('/pemetaan/grid', [PetaController::class, 'grid'])->name('admin.grid');

    //SIGBS
    Route::get('/sigbs/dashboard', [SigbsController::class, 'index'])->name('sigbs.index');
    Route::get('/sigbs/banksampah/{id}/kecamatan/{kecamatan_id}', [SigbsController::class, 'dataBS'])->name('sigbs.dataBS');
    


// });
