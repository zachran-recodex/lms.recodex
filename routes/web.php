<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DashboardController;

// Rute untuk halaman login sebagai halaman awal
Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');

// Menggunakan DashboardController untuk dashboard
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/modul-pelatihan', [DashboardController::class, 'module'])->name('module');
    Route::get('/progres-belajar', [DashboardController::class, 'progress'])->name('progress');
    Route::get('/notifikasi', [DashboardController::class, 'notification'])->name('notification');
    Route::get('/support', [DashboardController::class, 'support'])->name('support');
    Route::get('/setting', [DashboardController::class, 'setting'])->name('setting');
});

// Rute untuk profil pengguna
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Menyertakan rute otentikasi default
require __DIR__.'/auth.php';
