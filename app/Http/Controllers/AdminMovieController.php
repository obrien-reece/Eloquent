<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateAdminCreateDirectorRequest;
use App\Http\Requests\ValidateAdminCreateMovieRequest;
use App\Models\Director;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminMovieController extends Controller
{
    public function create() {
        $directors = Director::all();
        return view('admin.movie_create', compact('directors'));
    }

    public function store(ValidateAdminCreateMovieRequest $request) {

        $request->validated();

        $worldwide_box_office = $request->input('movie_domestic_box_office') + $request->input('movie_international_box_office');

          //Movies Image
          $movie_image_path = $request->file('movie_thumbnail')->storeAs(
              'movie_thumbnails',
              Str::of($request->input('movie_name'))->snake() . '.' . $request->movie_thumbnail->extension()
          );


        //Start a DB transaction
        DB::transaction(function () use($request,$worldwide_box_office, $movie_image_path) {

            $movie = Movie::create([
                'name' => $request->input('movie_name'),
                'studio' => $request->input('movie_studio'),
                'director_id' => $request->input('director_id'),
                'description' => $request->input('movie_description'),
                'slug' => Str::of($request->input('movie_name'))->slug('-'),
                'domestic_box_office' => $request->input('movie_domestic_box_office'),
                'international_box_office' => $request->input('movie_international_box_office'),
                'worldwide_box_office' => $worldwide_box_office,
                'image' => $movie_image_path,
            ]);

        });

        return redirect('/admin/dashboard');

    }

}
