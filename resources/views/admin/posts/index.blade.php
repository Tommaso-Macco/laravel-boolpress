@extends('layouts.app')

@section('content')
    <div class="container">
      <h1 class="display-3 text-center">Posts!</h1>
        <a class="btn btn-dark mb-5" href="{{ route('admin.posts.create') }}">CREATE ONE!</a>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">Show</th>
                <th scope="col">Post Title</th>
                <th scope="col">Creator Name</th>
                <th scope="col">Edit</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <th scope="row"><a href="{{ route('admin.posts.show', $post->id) }}">Show</a></th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td><a href="{{ route('admin.posts.edit', $post->id) }}">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
    </div>
@endsection