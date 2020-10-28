<?php

namespace App\Http\Controllers;

use App\Movie;
use App\MoviePerson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MoviePersonController extends Controller
{

    public function index()
    {

        $movie_people = MoviePerson::all();
        return view('movie_people.index', compact('movie_people'));
    }

    public function create()
    {
        return view('movie_people.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4',
            'birth_date' => '',
            'birth_country' => '',
            'birth_place' => '',
            'image' => ''

        ]);

        $image = $request->file('image')->move('movie_people_pictures');


        $movie_person = new MoviePerson();
        $movie_person->name = $request->name;
        $movie_person->birth_date = $request->birth_date;
        $movie_person->birth_country = $request->birth_country;
        $movie_person->birth_place = $request->birth_place;
        $movie_person->image = $image;
        $movie_person->save();

        return redirect("/movie_people/{$movie_person->name}");
    }

    public function show($name)
    {
        $target_person = DB::table('movie_people')->where( 'name', $name )->first();
        return view('movie_people.show', compact('target_person'));
    }


}
