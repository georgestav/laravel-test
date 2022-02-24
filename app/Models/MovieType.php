<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieType extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function movie()
    {
        return $this->belongsToMany(Movie::class);
    }
}
