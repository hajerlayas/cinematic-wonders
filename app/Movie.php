<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function times()
    {
        return $this->hasMany('App\Time');
    }

    public function categories()
    {
        return $this->hasMany('App\Categories');
    }

}
