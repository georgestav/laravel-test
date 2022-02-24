<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\MovieType;
use App\Models\MoviePerson;

/**
 * Movie
 */
class Movie extends Model
{
    use HasFactory;

    /**
     * Get the movie type
     * featured, filming etc
     */
    protected function movieType(): mixed
    {
        return $this->belongsTo(MovieType::class);
    }

    protected function moviePerson()
    {
        return $this->hasMany(MoviePerson::class);
    }

    /**
     * Returns the rating as a float number with two decimal points
     *
     * @return float
     */
    public function getFormatedRating(): float
    {
        return number_format($this->rating, 2);
    }
}
