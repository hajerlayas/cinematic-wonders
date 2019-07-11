<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    public function movies()
    {
        return $this->belongsToMany('App\Movie');
    }

    public function times()
    {
        return $this->belongsToMany('App\Time');
    }

}
