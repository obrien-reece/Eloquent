<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateAdminEditRequest;
use App\Models\Director;
use App\Models\Movie;
use Illuminate\Support\Facades\File;
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

        $movie = Movie::findOrFail($id);

        //Movies Image
        $movie_image_path = $request->file('movie_thumbnail')->storeAs(
            'public/movie_thumbnails',
            Str::of($movie->name)->snake() . '.' . $request->movie_thumbnail->extension()
        );

        //Start a DB transaction
        DB::transaction(function () use($movie, $request, $movie_image_path) {
            $movie->name = $request->input('movie_name');
            $movie->studio = $request->input('movie_studio');
            $movie->description = $request->input('movie_description');
            $movie->slug = Str::of($request->input('movie_name'))->slug('-');

            if($request->hasFile('movie_thumbnail')) {
                if(File::exists($movie_image_path)) {
                    File::delete($movie_image_path);
                }

                $movie->image = $movie_image_path;
            }

            $movie->save();

            $director = Director::findOrFail($movie->director->id);
            $director->age = $request->input('director_age');
            $director->about = $request->input('director_about');
            $director->name = $request->input('director_name');
            $director->slug = Str::of($request->input('director_name'))->slug('-');

            //Directors Image
            $director_image_path = $request->file('director_image')->storeAs(
                'public/director_image_thumbnails',
                Str::of($movie->director->name)->snake() . '.' . $request->director_image->extension()
            );

            if($request->hasFile('director_image')) {
                if(File::exists($director_image_path)) {
                    File::delete($director_image_path);
                }

                $director->image = $director_image_path;
            }

            $director->save();

        });

        return redirect('/admin/dashboard');

    }

    public function create() {
        dd("hai");
    }

}
