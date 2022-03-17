@extends('layouts.app')

@php
    use Carbon\Carbon ;
    $hrMax = 12;
    dd($post->updated_at->diffForHumans(Carbon::now()));
@endphp

@section('content')
    <div class="container">
        <h1 class="display-3 text-center">Post #{{ $post->id }}</h1>
            {{-- border: 1px solid #ced4da; --}}
            <div class="show-info">
                <h6>Titolo del post</h6>
                <h2 class="info mb-3"> {{ $post->title }} </h2>
                <h6>Contenuto del post</h6>
                <h4 class="info mb-3"> {{ $post->content }} </h4>
                <h6>Chi ha creato e quali categorie e tags ha il post</h6>
                <h5 class="info mb-3"> -{{ $post->user->name }} <br> -{{ $post->category->category }} <br>@foreach($post->tags as $tag) - {{ $tag->name }} @endforeach
                </h5>
                <h5 class="info mb-3">Data e ora creazione del Post:     {{ $post->created_at->format('  d/m/Y H:i') }}


                <br> Ultima Modifica:  {{ $post->updated_at->diffForHumans(Carbon::now()) }} 

                    {{-- DA FARE: se l'ultima modifca supera le 12 ore cambiarla nella data --}}
                </h5>
            </div>
            @include('partials.delete-btn', [
                'classBtn' => 'btn btn-danger'
            ])
    </div>
@endsection