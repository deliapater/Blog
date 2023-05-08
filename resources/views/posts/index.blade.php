@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Posts</h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <h2><a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }}</a></h2>
                <p>{{ $post->description }}</p>

                <h3>Comments</h3>
                <ul>
                    @foreach ($post->comments as $comment)
                        <li>{{ $comment->comment }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
    <div class="d-flex justify-content-end">{{ $posts->links('vendor.pagination.bootstrap-4') }}</div>
</div>
@endsection
