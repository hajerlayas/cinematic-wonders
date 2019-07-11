<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function times()
    {
        return $this->belongsToMany('App\Time');
    }

    
    public function Catagories()
    {
        return $this->belongsToMany('App\Catagories');
    }

    public function dates(){
        return $this->belongsToMany('App\Date');
    }
}
