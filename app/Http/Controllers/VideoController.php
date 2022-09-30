<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::where('publish', 1)->latest()->get();
        return view('video.index', compact('videos'));
    }

    public function show($code)
    {
        $video = Video::where('code', $code)->firstOrFail();
        return view('video.show', compact('video'));
    }
}
