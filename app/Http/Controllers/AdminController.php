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

    public function show(Movie $admin) {
        return view('movies.show', [
            'movie' => $admin->load(['actor'])
        ]);
    }

    public function create() {
        dd("hai");
    }

    public function edit(Movie $admin) {

        return view('admin.edit', [
            'movie' => $admin
        ]);
    }
}
