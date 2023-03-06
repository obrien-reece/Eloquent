<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateAdminCreateRequest;
use App\Http\Requests\ValidateAdminEditRequest;
use App\Models\Director;
use App\Models\Movie;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminMovieController extends Controller
{
    public function index() {
        $movies = Movie::orderByDesc('id')->paginate(20);
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

        $worldwide_box_office = $request->input('movie_domestic_box_office') + $request->input('movie_international_box_office');

        //Start a DB transaction
        DB::transaction(function () use($movie, $request, $worldwide_box_office) {
            $movie->name = $request->input('movie_name');
            $movie->studio = $request->input('movie_studio');
            $movie->description = $request->input('movie_description');
            $movie->slug = Str::of($request->input('movie_name'))->slug('-');
            $movie->domestic_box_office = $request->input('movie_domestic_box_office');
            $movie->international_box_office = $request->input('movie_international_box_office');
            $movie->worldwide_box_office = $worldwide_box_office;

            if($request->hasFile('movie_thumbnail')) {

                //Movies Image
                $movie_image_path = $request->file('movie_thumbnail')->storeAs(
                    'public/movie_thumbnails',
                    Str::of($movie->name)->snake() . '.' . $request->movie_thumbnail->extension()
                );

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


            if($request->hasFile('director_image')) {

                //Directors Image
                $director_image_path = $request->file('director_image')->storeAs(
                    'public/director_image_thumbnails',
                    Str::of($movie->director->name)->snake() . '.' . $request->director_image->extension()
                );

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
        return view('admin.create');
    }

    public function store(ValidateAdminCreateRequest $request) {

        $request->validated();

        $worldwide_box_office = $request->input('movie_domestic_box_office') + $request->input('movie_international_box_office');

        //Movies Image
        $movie_image_path = $request->file('movie_thumbnail')->storeAs(
            'movie_thumbnails',
            Str::of($request->input('movie_name'))->snake() . '.' . $request->movie_thumbnail->extension()
        );

        //Directors Image
        $director_image_path = $request->file('director_image')->storeAs(
            'public/director_image_thumbnails',
            Str::of($request->input('director_name'))->snake() . '.' . $request->director_image->extension()
        );


        //Start a DB transaction
        DB::transaction(function () use($request, $worldwide_box_office, $movie_image_path, $director_image_path) {
            $director = Director::create([
                'name' =>  $request->input('director_name'),
                'age' => $request->input('director_age'),
                'about' => $request->input('director_about'),
                'slug' => Str::of($request->input('director_name'))->slug('-'),
                'image' => $director_image_path,
            ]);

            $movie = Movie::create([
                'name' => $request->input('movie_name'),
                'studio' => $request->input('movie_studio'),
                'director_id' => $director->id,
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

    public function destroy($id) {
        $movie = Movie::findOrFail($id);

        $movie->delete();

        return redirect('/admin/dashboard');
    }

}
