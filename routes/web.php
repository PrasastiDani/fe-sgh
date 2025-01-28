<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard');

Route::get('/reservasi', function () {
    return view('reservasi.reservasi');
})->name('reservasi');

Route::get('/tambah-reservasi', function () {
    return view('tambah-reservasi.tambah-reservasi');
})->name('tambah-reservasi');

Route::get('/individual', function () {
    return view('individual.individual');
})->name('individual');

Route::get('/detail-individu', function () {
    return view('detail-individu.detail-individu');
})->name('detail-individu');

Route::get('/company', function () {
    return view('company.company');
})->name('company');

Route::get('/detail-company', function () {
    return view('detail-company.detail-company');
})->name('detail-company');
