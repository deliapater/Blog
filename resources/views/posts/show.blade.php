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
        <p>{{ $post->description }}</p>

        <h2>Comments</h2>
        <ul>
            @foreach ($post->comments as $comment)
                <li>{{ $comment->comment }}</li>
            @endforeach
        </ul>
        <a href="{{ route('posts.index') }}">Back to Posts</a>
    </div>
</html>
@endsection
