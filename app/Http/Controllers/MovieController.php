<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\People;
use App\Models\MoviePerson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    /**
     * A list of movies
     * (top 50)
     */
    protected function index(): mixed
    {
        $movies = Movie::query()
            ->orderBy('rating', 'desc')
            ->limit(50)
            ->where('movie_type_id', 1)
            ->where('votes_nr', '>', 5000)
            ->get();
        return view('movies.index', compact('movies'));
    }


    /**
     * Find movie by id
     */
    protected function findByID(int $id): mixed
    {
        $movie_details = Movie::find($id);
        $movie_details->movieType;
        $movie_details->moviePerson;

        dump($movie_details);
        return view('movies.find_by_id', compact('movie_details'));
    }

    protected function create(): mixed
    {
        return view('movies.form');
    }

    protected function store(Request $request)
    {
        dump($request->name);
        return 'ok';
    }
}
//access the movie reviews as:
//$movie->reviews
