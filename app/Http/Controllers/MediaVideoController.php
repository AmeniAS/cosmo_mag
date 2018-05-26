<?php

namespace App\Http\Controllers;

use App\MediaVideo;
use Illuminate\Http\Request;

class MediaVideoController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:blogger');
    }
	public function index()
	{

		$videos= MediaVideo::all();

		return view('media_videos.index', compact('videos'));



	}
    public function create()
    {
        return view('media_videos.create');

    }
    public function store(Request $request)
    {


        $this->validate($request, [
            'title' => 'required',
            'url' => 'required|mimes:flv,mp4,mov,ogg,3gp,avi | max:20000',
        ]);

        $url = 'storage/' . $request->file('url')->store('uploads/media_videos', 'public');

        MediaVideo::create([
            'title' => $request->title,
            'url' => $url,
            'blogger_id' => $request->user()->id
        ]);

        return redirect()->route('bloggers.profile');
    }
}
