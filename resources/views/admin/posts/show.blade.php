@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="display-3 text-center">Post #{{ $post->id }}</h1>
            {{-- border: 1px solid #ced4da; --}}
            <div class="show-info">
                <h6>Titolo del post</h6>
                <h2 class="info mb-3"> {{ $post->title }} </h2>
                <h6>Contenuto del post</h6>
                <h4 class="info mb-3"> {{ $post->content }} </h4>
                <h6>Chi ha creato e quali categorie ha il post</h6>
                <h5 class="info mb-3"> -{{ $post->user->name }} <br> -{{ $post->category->category }} </h5>
            </div>
    </div>
@endsection