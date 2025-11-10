<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front');
});

Route::get('/login', function() {return view('login');})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');


Route::get('/levels', function() {return view('levelselect');});

Route::get('/dashboard', function() {return view('dashboard');});

Route::get('/editor', function() {return view('editor');});