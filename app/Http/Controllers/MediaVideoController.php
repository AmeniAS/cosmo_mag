<?php

namespace App\Http\Controllers;

use App\MediaVideo;
use Illuminate\Http\Request;

class MediaVideoController extends Controller
{
    // 
	public function index()
	{

		$videos= MediaVideo::all();

		return view('media_videos.index', compact('videos'));



	}
}
