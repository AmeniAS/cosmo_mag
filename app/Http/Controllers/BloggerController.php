<?php

namespace App\Http\Controllers;

use App\Blogger;
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
        $this->middleware('auth:blogger')->except(['show', 'listing']);
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

    public function show($id)
    {
        $blogger = Blogger::findOrFail($id);

        $articles = $blogger->articles()->latest()->get();

        $blogger_images = $blogger->media_images()->latest()->get();
        $blogger_videos = $blogger->media_videos()->latest()->get();

        return view('front_views.bloggers.show', compact('blogger','articles', 'blogger_images', 'blogger_videos'));

    }

    public function listing()
    {
        $bloggers = Blogger::paginate(15);

        return view('front_views.bloggers.index', compact('bloggers'));
    }
}
