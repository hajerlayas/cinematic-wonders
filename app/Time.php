<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    public function movies(){
        return $this->belongsTo('App\Movies');
    }
}
