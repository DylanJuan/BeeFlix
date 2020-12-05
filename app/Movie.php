<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    public function episode(){
        return $this->hasMany(Episode::class);
    }
    public function genre(){
        return $this->belongsToMany(Genre::class);
    }
}
