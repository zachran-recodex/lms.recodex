<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ModuleController;

// Rute untuk halaman login sebagai halaman awal
Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');

// Menggunakan DashboardController untuk dashboard
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/notifikasi', [DashboardController::class, 'notification'])->name('notification');
    Route::get('/support', [DashboardController::class, 'support'])->name('support');
    Route::get('/setting', [DashboardController::class, 'setting'])->name('setting');
});

// Rute untuk profil pengguna
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware('can:see modules')->group(function () {
        Route::get('/modul-pelatihan', [DashboardController::class, 'module'])->name('module');
        Route::get('/modul-pelatihan/{slug}', [DashboardController::class, 'moduleDetail'])->name('module.detail');
    });

    Route::middleware('can:see articles')->group(function () {
        Route::get('/artikel/{slug}', [DashboardController::class, 'articleDetail'])->name('article.detail');
    });

    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::resource('clients', ClientController::class)->parameters([
            'clients' => 'username'
        ])->except(['edit']);

        Route::get('clients/edit/{username}', [ClientController::class, 'edit'])->name('clients.edit');

        Route::resource('modules', ModuleController::class)->parameters([
            'modules' => 'slug'
        ])->except(['edit']);

        Route::get('modules/edit/{slug}', [ModuleController::class, 'edit'])->name('modules.edit');

        Route::resource('articles', ArticleController::class)->parameters([
            'articles' => 'slug'
        ])->except(['edit']);

        Route::get('articles/edit/{slug}', [ArticleController::class, 'edit'])->name('articles.edit');
    });
});

// Menyertakan rute otentikasi default
require __DIR__.'/auth.php';
