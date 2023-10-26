<?php

use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PetugasController;
use App\Http\Middleware\ValidasiPetugas;
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



Route::prefix('admin')->group(function () {
    Route::get('login', [PetugasController::class, 'login']);
    Route::post('login', [PetugasController::class, 'postlogin']);
    Route::get('logout', [PetugasController::class, 'logout']);

    Route::middleware(ValidasiPetugas::class)->group(function () {
        Route::get('/', [PetugasController::class, 'index']);
        // Route petugas
        Route::prefix('petugas')->group(function () {
            Route::get('', [PetugasController::class, 'list']);
            Route::get('tambah', [PetugasController::class, 'add']);
            Route::post('tambah', [PetugasController::class, 'create']);
            Route::get('edit/{id}', [PetugasController::class,'show']);
            Route::post('edit/{id}', [PetugasController::class,'update']);
            Route::get('hapus/{id}', [PetugasController::class,'delete']);
            Route::get('hapus/confirm/{id}', [PetugasController::class,'destroy']);
        });

        // Route aduan
        Route::prefix('aduan')->group(function () {
            Route::get('',[PengaduanController::class,'index']);
        });
    });
});

// Route masyarakat
Route::get('/', [MasyarakatController::class,'index']);
Route::post('/', [MasyarakatController::class,'laporkan']);

// Route::get('laporkan', [PetugasController::class,