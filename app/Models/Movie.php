<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\MovieType;
use App\Models\MovieStatus;

/**
 * Movie
 */
class Movie extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * Get the Movie type
     */
    public function movieType()
    {
        return $this->hasOne(MovieType::class, 'id', 'movie_type_id');
    }

    /**
     * Get the Movie status
     */
    public function movieStatus()
    {
        return $this->hasOne(MovieStatus::class, 'id', 'movie_status_id');
    }

    /**
     * Get the Movie certification
     */
    public function certification()
    {
        return $this->hasOne(Certification::class, 'id', 'certification_id');
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
