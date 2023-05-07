<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function storeComments(Request $request, Post $post)
    {
        $request->validate(['comment' => 'required']);

        $comment = new Comment(['comment' => $request->comment]);
        $post->comments()->save($comment);

        return redirect()->route('posts.show', $post);
    }
}
