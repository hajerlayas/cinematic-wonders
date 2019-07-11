<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class customerController extends Controller
{
    public function show(){

        $userData = Customer::all();

        return view('user.index')->with('user', $userData);
        
    }
}
