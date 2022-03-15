@extends('layouts.app')

@section('content')
    <div class="container">
        <h2> {{ $post->title }} </h2>
        <h3> {{ $post->content }} </h3>
        <h5>Creato Da: {{ $post->user->name }} </h5>
        <h6>Categoria: {{ $post->category->category }} </h6>
    </div>
@endsection