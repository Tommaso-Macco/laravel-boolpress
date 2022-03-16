@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="display-3 text-center">Create new Post!</h1>
        <form action="{{ route('admin.posts.store') }}" method="post">
            @csrf


            {{-- TITLE SECTION  --}}
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Post Title</label>

              <input type="text" value="{{ old('title') }}" name="title" class="form-control" >
              @error('title')
                  Hai sbagliato
              @enderror

              <div id="emailHelp" class="form-text">Metti il titolo del tuo nuovo Post!</div>

            </div>


            {{-- CONTENT SECTION (TEXTAREA)  --}}
            <div class="mb-3">
                <label class="form-label">Post Content</label>
                <textarea name="content" class="form-control" cols="30" rows="10">{{ old('content') }}</textarea>
                @error('content')
                    Hai sbagliato
                @enderror
            </div>


            {{-- CATEGORY SECTION (SELECT)  --}}
            <label for="exampleInputEmail1" class="form-label">Post Category</label>

            <select class="form-select mb-3" name="category_id" aria-label="Default select example">
                @foreach ($categories as $category)

                <option value="{{ $category->id }}">
                    {{ $category->category }}</option>

                @endforeach  

            </select>

            {{-- TAGS SECTION (CHECKBOX)  --}}
            <label class="form-label">Post Tags</label>
            <div class="mb-3 border-form">
                @foreach ($tags as $tag)
                <div class="form-check form-check-inline">
                    <input class="form-check-input"
                        type="checkbox"
                        value="{{$tag->id}}"
                        id="{{ $tag->id }}"
                        name="tags[]">
                    <label class="form-check-label"
                     for="{{ $tag->id }}"
                     >
                     {{ $tag->name }}
                    </label>
                  </div>
                @endforeach
            </div>


            {{-- SUBMIT BUTTON TO STORE --}}
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection