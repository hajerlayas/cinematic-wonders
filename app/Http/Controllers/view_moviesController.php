<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\movie;
use \App\Time;
use \App\Date;
use \App\Message;

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
        // $dates = Date::where('movie_id',$id);
        return view('book_tickets')->with('times', $times);  

    }

    public function store(){


        $new_customr = new customer;
        
        $new_customr->name      = request()->name;
        $new_customr->phone     = request()->phone;
        $new_customr->seates    = request()->seates;
        $new_customr->date      = request()->date;  
        $new_customr->time       = request()->time;   
        $new_customr->save();

        return redirect('/admin');

}

    public function contactus(){
        $new_message = new message;
        
        $new_message->name      = request()->name;
        $new_message->email     = request()->email;
        $new_message->message    = request()->message;
        $new_message->save();

        return redirect('/contactus');

    }
}
