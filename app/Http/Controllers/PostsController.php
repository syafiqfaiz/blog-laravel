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
        $post = Post::where('id', $id)
                ->first();

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
}
