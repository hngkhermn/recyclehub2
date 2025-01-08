<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home.home');
})->name('home');

Route::get('/tentang', function () {
    return view('tentang.tentang');
})->name('tentang');

Route::get('/produk', function () {
    return view('produk.produk');
})->name('produk');

Route::get('/kontak', function () {
    return view('kontak.kontak');
})->name('kontak');