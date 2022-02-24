<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

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

    protected function show($id)
    {
        $movie = Movie::findOrFail($id);

        return view('movies.find_by_id', compact('movie'));
    }

    protected function create(): mixed
    {
        return view('movies.form');
    }

    protected function store(Request $request)
    {
        $movie = new Movie;
        $movie->name = $request->input('name');
        $movie->year = $request->input('year');
        $movie->save();
        session()->flash('success_message', 'The movie was successfully saved!');
        return redirect()->action([MovieController::class, 'show'], ['id' => $movie->id]);
    }

    protected function delete($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        session()->flash('success_message', 'The movie was successfully deleted!');
        return redirect()->action([MovieController::class, 'index']);
    }
}
