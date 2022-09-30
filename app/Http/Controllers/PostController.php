<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $create = [
            'name' => 'Create',
            'route' => route('post.store')
        ];
        return view('posts.form', $create);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "title" => "string|required",
            "description" => "nullable"
        ]);
        $data['user_id'] = Auth::user()->id;
        $data['publish'] = 1;
        $post = Post::create($data);
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $post->addMediaFromRequest('image')->toMediaCollection('image');
        }
        activity()->log('Create Post '.$post->title);
        return redirect()->route('post.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $edit = [
            'name' => 'Edit',
            'route' => route('post.update', $post->id)
        ];
        return view('posts.form', $edit, compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update($request->validate([
            "title" => "string|required",
            "description" => "nullable"
        ]));
        if ($request->hasFile('image')) {
            $post->clearMediaCollection('image');
            $post->addMediaFromRequest('image')->toMediaCollection('image');
        }
        activity()->performedOn($post)->log('Update Post '.$post->title);
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        activity()->log('Delete '.$post->title);
        $post->delete();
        if ($post->hasFile('image')) {
            $post->clearMediaCollection('image');
        }
        return redirect()->route('post.index');
    }
}
