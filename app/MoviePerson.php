<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MoviePerson extends Model
{
    protected $fillable = [
        'name',
        'birth_date',
        'birth_country',
        'birth_place',
        'image'
    ];

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }

    /*
    public function getRouteKeyName()
    {
        return 'name';
    }
    */
}
