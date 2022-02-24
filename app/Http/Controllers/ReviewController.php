<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Review;

class ReviewController extends Controller
{
    protected function store()
    {
        $review = new Review;
        $review->text = $_POST['text'];
        $review->movie_id = $_POST['movie_id'];
        $review->user_id = $_POST['user_id'];
        $review->save();

        return redirect()->back();
    }
}
