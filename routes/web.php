<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PDFController;

Route::redirect('/', '/guru');

// Route PDF harus di atas route resource guru
Route::get('guru/pdf', [PDFController::class, 'generate'])
    ->name('guru.pdf');

// Route CRUD Guru
Route::resource('guru', GuruController::class)->only([
    'index',
    'create',
    'store',
    'show',
    'edit',
    'update',
]);

// Route Hapus Guru
Route::delete('guru/{id}', [GuruController::class, 'destroy'])
    ->name('guru.destroy');
