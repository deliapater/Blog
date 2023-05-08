@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Post</h2>

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input name="title" type="text" class="form-control" id="title" required/>
            </div>

            <div class="form-group">
                <label for="description">Content</label>
                <textarea class="form-control" id="description" name="description" rows="3" required> </textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
