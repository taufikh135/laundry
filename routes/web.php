<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'title' => 'dasboard-Golaundry'
    ]);
});
Route::get('/login', function () {
    return view('login', [
        'title' => 'login-Golaundry'
    ] );
});
Route::get('/pegawai', function () {
    return view('pegawai', [
        'title' => 'pegawai-Golaundry'
    ] );
});
Route::get('/pelanggan', function () {
    return view('pelanggan' , [
        'title' => 'pelanggan-Golaundry'
    ]);
});
Route::get('/pesanan', function () {
    return view('pesanan', [
        'title' => 'pesanan-Golaundry'
    ] );
});
Route::get('/laporan-keuangan', function () {
    return view('laporan-keuangan', [
        'title' => 'laporan-keuangan-Golaundry'
    ] );
});
Route::get('/stok-barang', function () {
    return view('stok-barang', [
        'title' => 'stok-barang-Golaundry'
    ] );
});
Route::get('/kategori', function () {
    return view('kategori', [
        'title' => 'kategori-Golaundry'
    ]);
});
Route::get('/add-kategori', function () {
    return view('add-kategori', [
        'title' => 'add-kategori-Golaundry'
    ] );
});
Route::get('/add-pegawai', function () {
    return view('add-pegawai', [
        'title' => 'add-pegawai-Golaundry'
    ] );
});
Route::get('/add-pesanan', function () {
    return view('add-pesanan', [
        'title' => 'add-pesanan-Golaundry'
    ]);
});
Route::get('/add-pelanggan', function () {
    return view('add-pelanggan', [
        'title' => 'add-pelanggan-Golaundry'
    ] );
});
Route::get('/add-stok-barang', function () {
    return view('add-stok-barang', [
        'title' => 'add-stok-barang-Golaundry'
    ] );
});
Route::get('/add-pengeluaran', function () {
    return view('add-pengeluaran', [
        'title' => 'add-pengeluaran-Golaundry'
    ] );
});
Route::get('/edit-kategori', function () {
    return view('edit-kategori', [
        'title' => 'edit-kategori-Golaundry'
    ] );
});
Route::get('/edit-pegawai', function () {
    return view('edit-pegawai', [
        'title' => 'edit-pegawai-Golaundry'
    ] );
});
Route::get('/edit-pelanggan', function(){
    return view('edit-pelanggan', [
        'title' => 'edit-pelanggan-Golaundry'
    ]  );
});
Route::get('/edit-pesanan', function(){
    return view('edit-pesanan', [
        'title' => 'edit-pesanan-Golaundry'
    ]   );
});

Route::get('/edit-stok-barang', function(){
    return view('edit-stok-barang', [
        'title' => 'edit-stok-barang-Golaundry'
    ]  );
});

Route::get('/forget password', function(){
    return view('forget-password' , [
        'title' => 'forget-password-Golaundry'
    ] );
});

