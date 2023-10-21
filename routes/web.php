<?php

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



Route::prefix('admin')->group(function(){
    Route::get('login', [PetugasController::class,'login']);
    Route::post('login', [PetugasController::class,'postlogin']);
    Route::get('logout', [PetugasController::class,'logout']);
    
    Route::middleware(ValidasiPetugas::class)->group(function(){
        Route::get('/', [PetugasController::class,'index']);
    });
});

// Route masyarakat
Route::get('/', function () {
    return view('Masyarakat.Index');
});