<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateAdminEditRequest;
use App\Models\Movie;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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

    public function edit(Movie $admin) {

        return view('admin.edit', [
            'movie' => $admin
        ]);
    }

    public function update(ValidateAdminEditRequest $request, $id) {

        $request->validated();

        $path = $request->file('movie_thumbnail')->store('movie_thumbnails');

        return $path;

//        $movie = Movie::findOrFail($id);

        /*$movie_thumbnail =
                          Str::of($movie->name)->snake() .
                          '-' .
                          time() .
                          $request->file('movie_thumbnail')->store('movie_thumbnails');*/

        /*DB::transaction(function () use($movie, $request, $movie_thumbnail) {
            $movie->name = $request->input('movie_name');
            $movie->studio = $request->input('movie_studio');
            $movie->description = $request->input('movie_description');
            $movie->slug = Str::of($request->input('movie_name'))->slug('-');

            if($request->hasFile('movie_thumbnail')) {
                if(File::exists($request->file('movie_thumbnail')->store('public/movie_thumbnails'))) {
                    File::delete($request->file('movie_thumbnail')->store('public/movie_thumbnails'));
                }

                $movie->image = $movie_thumbnail;
            }

            $movie->save();

        });*/

    }

    public function create() {
        dd("hai");
    }

}
