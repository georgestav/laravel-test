<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\MoviePerson;

class Position extends Model
{
    use HasFactory;

    protected function moviePerson()
    {
        return $this->hasMany(MoviePerson::class);
    }
}
