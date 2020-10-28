<?php

namespace App\Http\Controllers;

use App\Movie;
use App\MoviePerson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        $movie_people = MoviePerson::all();

        return view('movies.index', compact('movies', 'movie_people'));
    }
}
