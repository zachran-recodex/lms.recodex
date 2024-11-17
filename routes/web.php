<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ModuleController;

// Rute untuk halaman login sebagai halaman awal
Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');

// Menggunakan DashboardController untuk dashboard
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
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

    Route::middleware('can:watch modules')->group(function () {
        Route::get('/modul-pelatihan', [DashboardController::class, 'module'])->name('module');
        Route::get('/modul-pelatihan/{slug}', [DashboardController::class, 'moduleDetail'])->name('module.detail');
    });

    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        // Define standard resource routes except for 'edit'
        Route::resource('modules', ModuleController::class)->parameters([
            'modules' => 'slug'
        ])->except(['edit']);

        // Custom route for editing a module using the desired pattern
        Route::get('modules/edit/{slug}', [ModuleController::class, 'edit'])->name('modules.edit');
    });
});

// Menyertakan rute otentikasi default
require __DIR__.'/auth.php';
