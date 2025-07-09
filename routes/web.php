<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('resources.home');});
Route::get('/produk', function () {return view('resources.produk');});
Route::get('/login', function () {return view('auth.login');});
Route::get('/register', function () {return view('auth.register');});
Route::get('/profile', function () {return view('resources.profile');});

Route::get('/detail', function () {return view('resources.detailproduk.detail');});
Route::get('/detail1', function () {return view('resources.detailproduk.detail1');});
Route::get('/detail2', function () {return view('resources.detailproduk.detail2');});
Route::get('/detail3', function () {return view('resources.detailproduk.detail3');});
Route::get('/detail4', function () {return view('resources.detailproduk.detail4');});
Route::get('/detail5', function () {return view('resources.detailproduk.detail5');});
Route::get('/detail6', function () {return view('resources.detailproduk.detail6');});
Route::get('/detail7', function () {return view('resources.detailproduk.detail7');});
Route::get('/detail8', function () {return view('resources.detailproduk.detail8');});
Route::get('/detail9', function () {return view('resources.detailproduk.detail9');});
Route::get('/detail10', function () {return view('resources.detailproduk.detail10');});
