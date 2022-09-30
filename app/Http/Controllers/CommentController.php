<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function commentvideostore(Request $request)
    {
        $video = Video::where('code', $request->video)->firstOrFail();
        $data = [
            'user_id' => Auth::user()->id,
            'text' => $request->text
        ];
        $video->comments()->create($data);

        return redirect()->route('video.show', $video->code);
    }
}
