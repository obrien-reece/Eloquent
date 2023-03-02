<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PagesController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($page)
    {
        return view('staticpages.' . $page);
    }
}
