<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

// Route untuk tempat_ibadah langsung return view tanpa controller
Route::get('/tempat_ibadah', function () {
    return view('tempat_ibadah'); // Pastikan file resources/views/tempat_ibadah.blade.php ada
});

// Route daftar produk, menampilkan halaman produk langsung ( tanpa controller )
Route::get('/list_product', function () {
    // Jika Anda ingin menampilkan produk statis, misal
    // Atau Anda bisa kembangkan logika lebih lanjut di sini
    return view('list_product');
});

// Route menampilkan view layout.list
Route::get('/list', function () {
    return view('layout.list');
});

// Route home, tampilkan halaman utama
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Route kontak, tampilkan halaman kontak
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Tampilkan form login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Proses login sederhana tanpa controller
Route::post('/login', function (Request $request) {
    if ($request->email === 'admin@example.com' && $request->password === 'password') {
        session(['user' => $request->email]);
        return redirect()->route('home');
    }
    return back()->with('error', 'Email atau Password salah.');
})->name('login.submit');

// Logout, hapus session user dan redirect ke login dengan flash message
Route::get('/logout', function () {
    session()->forget('user');
    Session::flash('success', 'Anda sudah logout.');
    return redirect()->route('login');
})->name('logout');

// Halaman user dengan parameter ID angka
Route::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
})->whereNumber('id')->name('user.profile');

// Route menampilkan view index
Route::get('/index', function () {
    return view('index');
})->name('index');

// Route menampilkan view vino
Route::get('/vino', function () {
    return view('vino');
})->name('vino');

// Group route admin dengan prefix /admin dan nama prefix admin.
Route::prefix('admin')->name('admin.')->group(function () {
    // Dashboard admin
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Halaman users admin
    Route::get('/users', function () {
        return view('admin.users');
    })->name('users');

    // Halaman login_view dengan middleware auth
    Route::get('/login_view', function () {
        return view('login_view');
    })->middleware('auth')->name('login_view');
});
