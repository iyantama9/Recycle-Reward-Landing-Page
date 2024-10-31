<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengajuanController;

Route::get('/', function () {
    return view('landing_page.landing_page');
});
Route::get('/pengajuan', [PengajuanController::class, 'create'])->name('pengajuan.create');
Route::post('/pengajuan', [PengajuanController::class, 'store'])->name('pengajuan.store');
