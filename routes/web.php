<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JualanVinoController;

// Route utama


Route::get('/jualan_vino', [JualanVinoController::class, 'tampilkan'])->name('jualan.vino');

// Route kontak
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Route welcome
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// Route login
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function () {
    return back()->with('error', 'Fitur login belum diaktifkan.');
})->name('login.submit');

// Route user dengan parameter
Route::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
})->whereNumber('id')->name('user.profile');

// 🟩 INDEX DILUAR GRUP ADMIN
Route::get('/index', function () {
    return view('index');
})->name('index');

// Grup route admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/users', function () {
        return view('admin.users');
    })->name('users');

    Route::get('/login_view', function () {
        return view('login_view');
    })->middleware('auth')->name('login_view');
});
