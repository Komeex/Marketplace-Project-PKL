<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('resources.home');});
Route::get('/produk', function () {return view('resources.produk');});
Route::get('/login', function () {return view('auth.login');});
Route::get('/register', function () {return view('auth.register');});
