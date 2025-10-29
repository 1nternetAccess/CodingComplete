<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front');
});

Route::get('/login', function() {return view('login');});

Route::get('/levels', function() {return view('levelselect');});

Route::get('/dashboard', function() {return view('dashboard');});