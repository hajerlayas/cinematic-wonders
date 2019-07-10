<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Movie;
use \App\Time;

class movieController extends Controller
{
    public function index()
    {
        return view('movies.index')->with('movies', \App\Movie::all());
    }
    public function create(){
        return view('movies.create');

    }

    public function store(){


        $new_movie = new Movie;

        $image_path = request()->file('image')->store('images', 'public');
        
        $new_movie->status      = request()->status;
        $new_movie->name        = request()->name;
        $new_movie->img         = $image_path;;
        $new_movie->description =request()->description;     
        $new_movie->save();

        return redirect('/movies');
     }
}
