<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Movie;
use App\Models\Position;

class MoviePerson extends Model
{
    use HasFactory;

    /**
     * Define the table name to 'movie_person'
     * Else eloquent turns it to plural 'movie_people'
     */
    protected $table = 'movie_person';

    protected function movie()
    {
        return $this->belongsToMany(Movie::class);
    }

    protected function position()
    {
        return $this->belongsToMany(Position::class, 'positions');
    }
}
