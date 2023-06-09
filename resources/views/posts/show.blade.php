<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Post: {{$post->title}}</title>
    </head>
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <p class="lead">{{ $post->description }}</p>

        <h2 class="mt-5">Comments</h2>
            @foreach ($post->comments as $comment)
            <div class="card mb-3">
            <div class="card-body">
                <p class="card-text">{{ $comment->comment }}</p>
                <p class="text-muted mb-0">Posted on {{ $comment->created_at->format('F d, Y') }}</p>
            </div>
        </div>
        @endforeach

        <h2 class="mt-5">Add a Comment</h2>
        <form method="POST" action="{{ route('posts.storeComment', $post->id) }}">
            @csrf
            <div class="form-group">
                <label for="commentContent">Comment</label>
                <textarea name="comment" id="commentContent" class="form-control" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="mt-5">
            <a href="{{ route('posts.index') }}">Back to Posts</a>
        </div>
    </div>
</html>
@endsection
