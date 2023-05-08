@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Posts</h1>
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">{{ $post->title }}</h5>
                    <div class="card-body">
                        <p class="card-text">{{ Str::limit($post->description, 100)  }}</p>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Read More</a>
                    </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-end">{{ $posts->links('vendor.pagination.bootstrap-4') }}</div>
</div>
@endsection
