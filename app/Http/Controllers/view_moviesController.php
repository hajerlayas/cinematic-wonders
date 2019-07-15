<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\movie;
use \App\Time;
use \App\Message;
use \App\Customer;
use \App\Review;

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

    public function store(){


        $new_customr = new customer;
        
        $new_customr->name      = request()->name;
        $new_customr->number     = request()->number;
        $new_customr->seates    = request()->seates;
        $new_customr->day      = request()->day;  
        $new_customr->start       = request()->start;   
        $new_customr->save();

        return redirect('index');

}

    public function contactus(){
        $new_message = new message;
        
        $new_message->name      = request()->name;
        $new_message->email     = request()->email;
        $new_message->message    = request()->message;
        $new_message->save();
        return redirect('contactus');

    }
    public function message(){
        return view('contactus');

    }
    public function index1(){
        //coming soon 
        $movies = movie::all();
        // showing this week 
        $week_movies = movie::whereHas('times', function($q) {
            $today = today();
            $after_one_week = today()->addWeek(1);
            $q->whereBetween('date', [$today->toDateString(), $after_one_week->toDateString()]);
        })->get();
         //this day
        $todays =movie::whereHas('times', function($q) {
            $today = today();
            $q->where('date', [$today->toDateString()]);
        })->get();

         //dd($todays);


        return view('index')->with('week_movies', $week_movies)->with('todays',$todays)->with('movies', $movies);
    }

    public function rate(){
        
    }

    public function type ($type){
        $movies = Movie::find($type);
        return view('type_page')->with('movies', $movies);
    }
    
}
