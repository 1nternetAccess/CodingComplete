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

/*
Route::get('/editor/{challenge}', function($challenge) {
    $person = new stdClass();

    // Dynamically add properties
    $person->name = "Alice";
    $person->age = 30;
    $person->city = "New York";

    return view('editor', ['person' => $person]);

    return view('editor', ['challenge'=>$challenge]);
});
*/

Route::get('/editor', function() {return view('editor', ['challenge' => 'freeplay']);});

Route::get('/editor/{challenge}', function($challenge) {
    //return 'Challenge is ' . $challenge;
    //$challenge = $request->input('challenge');
    $challenges = array('sum', 'palindrome', 'vowelcount', 'listzip');
    if (in_array($challenge, $challenges)){
        return view('editor', ['challenge' => $challenge]);
    } else {
        return view('editor', ['challenge' => 'freeplay']);
    }
});

//Route::get('editor/{challenge}', [ChallengeController::class, 'show'])->name('challenge.show');