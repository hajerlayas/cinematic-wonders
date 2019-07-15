<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Message;

class MessagesController extends Controller
{
    public function show(){

        $message  = Message::all();

        return view('admin.message')->with('message', $message);
    }
}
