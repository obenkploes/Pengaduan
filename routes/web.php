<?php

use App\Http\Controllers\PetugasController;
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
    Route::middleware('auth:petugas')->group(function(){
        Route::get('/',[PetugasController::class,'index']);
    });
    
    Route::get('login',[PetugasController::class,'login'])->name('adminlogin');
    Route::post('login',[PetugasController::class,'postlogin']);
    Route::get('logout',[PetugasController::class,'logout']);
});

// Route masyarakat
Route::get('/', function () {
    return view('Masyarakat.Index');
});