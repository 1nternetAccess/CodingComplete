<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ChallengeController extends Controller {
    public function show(Challenge $challenge){
        return view('editor', ['challenge' => $challenge]);
    }
}