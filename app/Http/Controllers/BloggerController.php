<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BloggerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Spécifier le "gaurd" pour la restriction
        $this->middleware('auth:blogger');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blogger');
    }

    public function profile()
    {
        return view('front_views.bloggers.profile');
    }

    public function images()
    {
        return view('front_views.bloggers.images');
    }
}
