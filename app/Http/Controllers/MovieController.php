<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function movies() {

        $movies = Movie::all();

        return view('movies', compact('movies'));
    }
}
