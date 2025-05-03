<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JualanVinoController;
use App\Http\Controllers\ProductController;

Route::get('/list_product', [ProductController::class, 'index']);
Route::get('/list', function () {
    return view('layout.list');
});


// Route home
Route::get('/', [JualanVinoController::class, 'tampilkan'])->name('home');
Route::get('/', function () {
    return view('pages.home');
});


// Route kontak
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Tampilkan form login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Proses login
Route::post('/login', function (Request $request) {
    if ($request->email == 'admin@example.com' && $request->password == 'password') {
        session(['user' => $request->email]);
        return redirect()->route('home');
    }
    

    return back()->with('error', 'Email atau Password salah.');
})->name('login.submit');

// Logout
Route::get('/logout', function () {
    $message = 'Anda sudah logout.';

    session()->flush(); // bersihkan semua session
    session()->flash('success', $message); // buat pesan baru setelah flush

    return redirect()->route('login');
})->name('logout');
use Illuminate\Support\Facades\Session;

Route::get('/logout', function () {
    // Simpan pesan success ke session dulu
    Session::flash('success', 'Anda sudah logout.');

    // Setelah itu, flush session kalau mau, atau cukup hapus user saja
    session()->forget('user'); // contoh kalau mau selective hapus

    // Redirect ke halaman login
    return redirect()->route('login');
})->name('logout');


// Halaman lain
Route::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
})->whereNumber('id')->name('user.profile');

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/vino', function () {
    return view('vino');
})->name('vino');

// Admin route group
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
