<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateAdminCreateActorRequest;
use App\Http\Requests\ValidateAdminCreateDirectorRequest;
use App\Models\Actor;
use App\Models\Director;
use App\Models\Movie;
use App\Models\Movies_Actors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminActorController extends Controller
{
    public function create() {
        return view('admin.actor_create', [
            'movies' => Movie::all()
        ]);
    }

    public function store(ValidateAdminCreateActorRequest $request) {

        $request->validated();

        DB::transaction(function () use($request) {
            $actor = Actor::create([
                    'name' =>  $request->input('actors_name'),
                    'age' => $request->input('actors_age'),
                    'about' => $request->input('actors_about'),
                    'slug' => Str::of($request->input('actors_name'))->slug('-'),
            ]);

            Movies_Actors::create([
                'actor_id' => $actor->id,
                'movie_id' => $request->input('movie_id')
            ]);

        });

        return redirect('/admin/dashboard');

    }

}
