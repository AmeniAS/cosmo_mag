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
        $articles = auth()->guard('blogger')->user()->articles()->latest()->take(3)->get();

        $blogger_images = auth()->guard('blogger')->user()->media_images()->latest()->take(10)->get();
        $blogger_videos = auth()->guard('blogger')->user()->media_videos()->latest()->take(3)->get();

        return view('front_views.bloggers.profile', compact('articles', 'blogger_images', 'blogger_videos'));
    }

    public function images()
    {
        return view('front_views.bloggers.images');
    }

    public function favoriteProducts()
    {
        $favorite_products = auth()->guard('blogger')->user()->product_favorites()->latest()->get();

        return view('front_views.bloggers.product_favorites', compact('favorite_products'));
    }
}
