<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Movie;
use \App\Time;
use DB;

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
        $new_movie->type      = request()->type;   
        $new_movie->save();

        return redirect('/admin');
     }

    function search(Request $request){
        if($request->get('query')){
            $query = $request->get('query');
            $data = DB::table('movies')->where('name', 'LIKE', '%'.$query.'%')->get();
            
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
                
                foreach ($data as $row){
                    $tmp = route('showMovie',['id' => $row->id]);
                    $s = Movie::where('id', $row->id)->get();
                    $output .= '<li><a href='.$tmp.'>'.$row->name.'</a></li>'; 
                }
            
            $output .= '</ul>';
            echo $output;
        }
    }
}
