<?php

namespace App\Http\Controllers;

class LandingController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return view('pages.landing');
    }
}
