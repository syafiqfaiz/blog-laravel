<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::get();

        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show', compact('post'));
    }

    public function create()
    {
        $post = new Post;

        return view('posts.create', compact('post'));
    }

    public function store(Request $request)
    {
        $post = Post::create([
            'title'=> $request->title,
            'body'=> $request->body
            ]);

        return redirect()->route('post_show', ['id' => $post->id]);
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request)
    {
        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()->route('post_show', ['id' => $post->id]);
    }

    public function destroy(Request $request)
    {
        $post = Post::find($request->id);
        $post->delete();

        return redirect()->route('post_index');
    }
}
