<?php

namespace App\Http\Controllers;

use App\Models\Director;
use App\Models\Movie;
use Illuminate\Http\Request;

class DirectorsController extends Controller
{
    public function show(Director $director)
    {
        $idn = $director->id;
        $dd = Director::where('id', $idn)->with('movies')->directed(['search'])->first();
        return view('directors.show-director', [
            'author' => $dd
        ]);
    }
}
