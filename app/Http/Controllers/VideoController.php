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

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'user_id' => 'required|integer',
            'code' => 'required|string',
            'url' => 'required|string',
            'description' => 'required|string',
            'publish' => 'required|integer',
        ]);
        Video::create($data);
        activity()->log('Tambah Video');
        return redirect()->route('video.index');
    }

    public function show($code)
    {
        $video = Video::where('code', $code)->firstOrFail();
        return view('video.show', compact('video'));
    }
}
