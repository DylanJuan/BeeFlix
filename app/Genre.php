<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //
    public function movie(){
        return $this->belongsToMany(Movie::class);
    }
}
