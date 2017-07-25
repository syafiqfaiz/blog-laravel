<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post;
use Auth;
use App\User;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Auth::user()->posts()->get();

        return view('admin.posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Auth::user()->posts()->find($id);

        return view('admin.posts.show', compact('post'));
    }

    public function create()
    {
        $post = new Post;

        return view('admin.posts.create', compact('post'));
    }

    public function store(Request $request)
    {
        $post = Auth::user()->posts()->create([
            'title'=> $request->title,
            'body'=> $request->body
            ]);

        return redirect()->route('admin_post_show', ['id' => $post->id]);
    }

    public function edit($id)
    {
        $post = Auth::user()->posts()->find($id);

        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request)
    {
        $post = Auth::user()->posts()->find($request->id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()->route('admin_post_show', ['id' => $post->id]);
    }

    public function destroy(Request $request)
    {
        $post = Post::find($request->id);
        $post->delete();

        return redirect()->route('admin_post_index');
    }
}
