<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProgramUnggulanController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\FasilitasController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/profil/madrasah', [ProfilController::class, 'madrasah'])->name('profil.madrasah');
Route::get('/profil/guru', [ProfilController::class, 'guru'])->name('profil.guru');
Route::get('/profil/isma', [ProfilController::class, 'isma'])->name('profil.isma');

Route::get('/program-unggulan', [ProgramUnggulanController::class, 'index'])->name('program-unggulan.index');

Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan.index');
Route::get('/kegiatan/{slug}', [KegiatanController::class, 'show'])->name('kegiatan.show');

Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.index');