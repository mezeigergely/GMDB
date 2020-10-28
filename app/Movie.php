<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function movie_people()
    {
        return $this->hasMany(MoviePerson::class);
    }
}
