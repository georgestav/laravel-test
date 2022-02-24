<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class MovieController extends Controller
{
    /**
     * Default index page for movies
     */
    protected function index(): mixed
    {
        return view('movies.index');
    }

    /**
     * Search function by name of movie
     */
    protected function search(Request $request): mixed
    {
        $search_term = $request->input('search');
        $movies = Movie::where('name', 'LIKE', '%' . $search_term . '%')->get();

        if ($movies->isEmpty()) {
            session()->flash('error_message', 'No movie was found');
            return redirect()->back();
        }

        session()->flash('success_message', 'The following movies where found');
        return view('movies.search_results', compact('movies'));
    }

    /**
     * A list of movies
     * (top 50)
     */
    protected function topMovies(): mixed
    {
        $movies = Movie::query()
            ->orderBy('rating', 'desc')
            ->limit(50)
            ->where('movie_type_id', 1)
            ->where('votes_nr', '>', 5000)
            ->get();
        return view('movies.topMovies', compact('movies'));
    }

    /**
     * Find movie by id return a view
     */
    protected function show($id): mixed
    {
        $movie = Movie::findOrFail($id);

        return view('movies.find_by_id', compact('movie'));
    }

    /**
     * Form to create a new movie
     */
    protected function create(): mixed
    {
        return view('movies.form');
    }

    /**
     * Save new movie
     */
    protected function store(Request $request): mixed
    {
        $movie = new Movie;
        $movie->name = $request->input('name');
        $movie->year = $request->input('year');
        $movie->save();
        session()->flash('success_message', 'The movie was successfully saved!');
        return redirect()->action([MovieController::class, 'show'], ['id' => $movie->id]);
    }

    /**
     * Delete movie by id
     */
    protected function delete($id): mixed
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        session()->flash('success_message', 'The movie was successfully deleted!');
        return redirect()->action([MovieController::class, 'topMovies']);
    }
}
