<?php

namespace App\Http\Controllers;
use App\Movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() 
    {
        $movies = Movie::all();
        // dd($movies[0]);
        return view('index', compact('movies'));
    }
}
