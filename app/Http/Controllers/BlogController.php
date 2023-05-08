<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('posts.index', ['posts' => $posts]);
    }

    public function show($id)
    {
        $post = Post::with('comments')->findOrFail($id);
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function storePost(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required'
        ]);

        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }

    public function storeComments(Request $request, Post $post)
    {
        $request->validate(['comment' => 'required']);
        $comment = new Comment(['comment' => $request->comment]);
        $post->comments()->save($comment);

        return redirect()->route('posts.show', $post);
    }
}
