<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\movie;
use \App\Time;

class view_moviesController extends Controller
{
    public function view(){

        $movie = movie::all();
        return view('admin.view-movies')->with('movie', $movie);
    }


    public function get_info($id){
        return view('admin.view_info')->with('movie', movie::find($id));
    }
    public function update($id)
    {
 
        $movie = movie::find($id);
        $movie->name = request()->name;
       
        $movie->status = request()->status;
        $movie->description = request()->description;
        
        $movie->img = request()->image->store('image' , 'public');



        $movie->save();
        return redirect('admin');

    }
    public function index ($id){
        $movie = movie::all();
        $times = Movie::find($id)->times;
        return view('movies_page')->with('movie', movie::find($id))->with('times', $times);  
    }

    public function movies (){
        $movie = movie::all();
        return view('show_movies')->with('movie', $movie);  
    }

    public function book_tickets ($id){
        $times = Time::where('movie_id',$id)->get();
        return view('book_tickets')->with('times', $times);  
    }

    public function book($movie_id)
    {
        
    }

}
