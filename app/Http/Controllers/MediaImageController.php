<?php

namespace App\Http\Controllers;

use App\Blogger;
use App\MediaImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MediaImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:blogger');
    }

    public function index()
    {
        $images = MediaImage::all();

        return view('media_images.index', compact('images'));
    }

    public function blogger_images()
    {
        /*$request->user();
        $blogger = \request()->user();
        Auth::user();*/
        //$blogger = Blogger::findOrFail($id_b);
        //$images = MediaImage::where('blogger_id', '=', $blogger->id)->get();
        $blogger = \request()->user();
        $images = $blogger->media_images;

        return view('jnk', compact('images'));
    }

    public function create()
    {
        return view('media_images.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image_file' => 'required|mimes:jpeg,jpg,png|max:1024000',
            'description' => 'required',
        ]);

        $path = 'storage/' . $request->file('image_file')->store('uploads/media_images', 'public');

        MediaImage::create([
            'title' => $request->title,
            'path' => $path,
            'description' => $request->description,
            'blogger_id' => $request->user()->id
        ]);

        return redirect()->route('bloggers.profile');
    }
}
