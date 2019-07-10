<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\movies;

class view_moviesController extends Controller
{
    public function view(){

        $movies = movies::all();
        return view('admin.view-movies')->with('movies', $movies);
    }


    public function get_info($id){
        return view('admin.view_info')->with('movies', movies::find($id));
    }
    public function update($id)
    {
 
        $movies = movies::find($id);
        $movies->name = request()->name;
       
        $movies->status = request()->status;
        $movies->description = request()->description;
        
        $movies->img = request()->image->store('image' , 'public');



        $movies->save();
        return redirect('admin');

    }
    public function index ($id){
        $movies = movies::all();
        return view('movies_page')->with('movies', movies::find($id));  
    }

    public function movies (){
        $movies = movies::all();
        return view('movies')->with('movies', $movies);  
    }

    public function book_tickets ($id){
        $movies = movies::all();
        return view('book_tickets')->with('movies', movies::find($id));  
    }

}
