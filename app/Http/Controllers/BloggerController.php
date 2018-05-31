<?php

namespace App\Http\Controllers;

use App\Blogger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        $images = auth()->guard('blogger')->user()->media_images()->paginate(10);
        return view('front_views.bloggers.images', compact('images'));
    }

    public function delete_image($id)
    {
        $image = auth()->guard('blogger')->user()->media_images()->findOrFail($id);

        $image->delete();

        Session::flash('alert-danger', 'Image supprimée!');

        return redirect()->back();
    }

    public function articles()
    {
        $articles = auth()->guard('blogger')->user()->articles()->paginate(10);
        return view('front_views.bloggers.articles', compact('articles'));
    }

    public function delete_article($id)
    {
        $article = auth()->guard('blogger')->user()->articles()->findOrFail($id);

        $article->delete();

        Session::flash('alert-danger', 'Article supprimée!');

        return redirect()->back();
    }

    /*
     *
     */

    public function videos()
    {
        $videos = auth()->guard('blogger')->user()->media_videos()->paginate(10);
        return view('front_views.bloggers.videos', compact('videos'));
    }

    public function delete_video($id)
    {
        $video = auth()->guard('blogger')->user()->media_videos()->findOrFail($id);

        $video->delete();

        Session::flash('alert-danger', 'Video supprimée!');

        return redirect()->back();
    }

    /*
     *
     */

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
