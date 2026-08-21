<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProgramUnggulanController;
use App\Http\Controllers\Admin\AdminProgramUnggulanController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\Admin\AdminKegiatanController;
use App\Http\Controllers\GuruController;
use App\Http\controllers\Admin\AdminGuruController;
use App\Http\Controllers\IsmaController;
use App\Http\Controllers\Admin\AdminIsmaController;


// ========================================
// ROUTE PUBLIC (Tanpa Login)
// ========================================
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profil/madrasah', [ProfilController::class, 'madrasah'])->name('profil.madrasah');
Route::get('/profil/guru', [GuruController::class, 'index'])->name('profil.guru');
Route::get('/profil/isma', [IsmaController::class, 'index'])->name('profil.isma');
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.index');
// Program Unggulan (Public)
Route::get('/program-unggulan', [ProgramUnggulanController::class, 'index'])->name('program-unggulan.index');
Route::get('/program-unggulan/{slug}', [ProgramUnggulanController::class, 'show'])->name('program-unggulan.show');
// Kegiatan (Public)
Route::prefix('kegiatan')->name('kegiatan.')->group(function () {
    Route::get('/', [KegiatanController::class, 'index'])->name('index');
    Route::get('/{slug}', [KegiatanController::class, 'show'])->name('show');
});

// ========================================
// ROUTE AUTH
// ========================================
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// ========================================
// ROUTE ADMIN KEGIATAN
// ========================================
Route::prefix('admin')
    ->name('admin.')
    ->middleware(['role:admin'])
    ->group(function () {
        // Dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // CRUD Kegiatan
        Route::prefix('kegiatan')->name('kegiatan.')->group(function () {
            Route::get('/', [AdminKegiatanController::class, 'index'])->name('index');
            Route::get('/create', [AdminKegiatanController::class, 'create'])->name('create');
            Route::post('/', [AdminKegiatanController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [AdminKegiatanController::class, 'edit'])->name('edit');
            Route::put('/{id}', [AdminKegiatanController::class, 'update'])->name('update');
            Route::delete('/{id}', [AdminKegiatanController::class, 'destroy'])->name('destroy');
            Route::patch('/{id}/toggle-status', [AdminKegiatanController::class, 'toggleStatus'])->name('toggle-status');
        });
    });

// ========================================
// ROUTE ADMIN GURU
// ========================================

Route::prefix('admin')->name('admin.')->middleware(['role:admin'])->group(function () {
    // ... route admin lainnya

    // CRUD Guru
    Route::prefix('guru')->name('guru.')->group(function () {
        Route::get('/', [AdminGuruController::class, 'index'])->name('index');
        Route::get('/create', [AdminGuruController::class, 'create'])->name('create');
        Route::post('/', [AdminGuruController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [AdminGuruController::class, 'edit'])->name('edit');
        Route::put('/{id}', [AdminGuruController::class, 'update'])->name('update');
        Route::delete('/{id}', [AdminGuruController::class, 'destroy'])->name('destroy');
        Route::patch('/{id}/toggle-status', [AdminGuruController::class, 'toggleStatus'])->name('toggle-status');
    });
});

// ========================================
// ROUTE ADMIN ISMA
// ========================================
Route::prefix('admin')->name('admin.')->middleware(['role:admin'])->group(function () {
    Route::prefix('isma')->name('isma.')->group(function () {
        Route::get('/', [AdminIsmaController::class, 'index'])->name('index');
        Route::get('/create', [AdminIsmaController::class, 'create'])->name('create');
        Route::post('/', [AdminIsmaController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [AdminIsmaController::class, 'edit'])->name('edit');
        Route::put('/{id}', [AdminIsmaController::class, 'update'])->name('update');
        Route::delete('/{id}', [AdminIsmaController::class, 'destroy'])->name('destroy');
        Route::patch('/{id}/toggle-status', [AdminIsmaController::class, 'toggleStatus'])->name('toggle-status');
    });
});

// ========================================
// ROUTE ADMIN PROGRAM UNGGULAN
// ========================================
Route::prefix('admin')->name('admin.')->middleware(['role:admin'])->group(function () {
    // ... route admin lainnya

    // CRUD Program Unggulan
    Route::prefix('program')->name('program.')->group(function () {
        Route::get('/', [AdminProgramUnggulanController::class, 'index'])->name('index');
        Route::get('/create', [AdminProgramUnggulanController::class, 'create'])->name('create');
        Route::post('/', [AdminProgramUnggulanController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [AdminProgramUnggulanController::class, 'edit'])->name('edit');
        Route::put('/{id}', [AdminProgramUnggulanController::class, 'update'])->name('update');
        Route::delete('/{id}', [AdminProgramUnggulanController::class, 'destroy'])->name('destroy');
        Route::patch('/{id}/toggle-status', [AdminProgramUnggulanController::class, 'toggleStatus'])->name('toggle-status');
    });
});