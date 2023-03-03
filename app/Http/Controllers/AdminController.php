<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $movies = Movie::paginate(20);
        return view('admin.index', compact('movies'));
    }

    public function show(Movie $movie) {
        return view('movies.show', [
            'movie' => $movie->load('actor')
        ]);
    }
}
