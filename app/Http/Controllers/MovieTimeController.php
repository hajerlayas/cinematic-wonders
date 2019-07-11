<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieTimeController extends Controller
{
    public function create($movie_id)
    {
        $movie = \App\Movie::find($movie_id);

        return view('movies.times.create')->with('movie', $movie);
    }

    public function store($movie_id)
    {
        $new_time = new \App\Time;
        $new_time->date = request()->date;
        $new_time->start = request()->start;
        $new_time->end = request()->end;
        $new_time->movie_id = $movie_id;
        
        $new_time->save();

        return redirect('/admin');
    }
}
