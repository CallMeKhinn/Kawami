<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemanController;

Route::get('/', [TemanController::class, 'index']);
Route::get('/tambah', [TemanController::class, 'tambah']);
Route::post('/tambah', [TemanController::class, 'simpan']);
