<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Customer;

class customerController extends Controller
{
    public function show(){

        $userData = Customer::all();

        return view('user.index')->with('customer', $userData);
        
    }
}
