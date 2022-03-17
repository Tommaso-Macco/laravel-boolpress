@extends('layouts.app')

@section('content')
    <div class="container index">
      <h1 class="display-3 text-center">Posts!</h1>
        <a class="btn btn-dark mb-5" href="{{ route('admin.posts.create') }}">CREATE ONE!</a>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">Show</th>
                <th scope="col">Post Title</th>
                <th scope="col">Creator Name</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr class="content-index">
                    <th scope="row"><a class="btn btn-secondary" href="{{ route('admin.posts.show', $post->id) }}">Show</a></th>
                    <td class="index-style">{{ $post->title }}</td>
                    <td class="index-style">{{ $post->user->name }}</td>
                    <td><a class="btn btn-secondary" href="{{ route('admin.posts.edit', $post->id) }}">Edit</a></td>
                    <td>@include('partials.delete-btn', ['classBtn' => 'btn btn-danger'])</td>
                </tr>
                @endforeach
            </tbody>
    </div>
@endsection