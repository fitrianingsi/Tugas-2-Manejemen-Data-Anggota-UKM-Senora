<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\ProkerController;

Route::get('/', [AnggotaController::class, 'index']);

Route::resource('anggotas', AnggotaController::class);

Route::get('/bidangs',[BidangController::class,'index'])->name('bidangs.index');
Route::get('/divisis',[DivisiController::class,'index'])->name('divisis.index');
Route::get('/prokers',[ProkerController::class,'index'])->name('prokers.index');