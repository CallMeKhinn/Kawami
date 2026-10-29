<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemanController;

Route::get('/', [TemanController::class, 'index']);
Route::get('/tambah', [TemanController::class, 'tambah']);
Route::post('/tambah', [TemanController::class, 'simpan']);
Route::get('/edit/{id}', [TemanController::class, 'edit']);
Route::get('/hapus/{id}', [TemanController::class, 'hapus']);
Route::post('/edit/{id}', [TemanController::class, 'simpanedit']);
