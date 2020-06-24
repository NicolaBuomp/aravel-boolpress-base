@extends('layouts.main')

@section('content')

<div class="main-content">
    
    <h1>Create a new Post!</h1>

    @if ($errors->any())
    <div class="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

<form action="{{ route('posts.store') }}" method="POST">

    @csrf
    @method('POST')

    <div class="form-group">

        <label for="title">Title</label>

        <input type="text" class="form-control" value="{{ old('title')}}" name="title" id="title">

    </div>

    <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control"  name="body" id="body">
            {{ old('body')}}
        </textarea>
    </div>

    @foreach($tags as $tag)
    
    <div class="form-check">
        <input type="checkbox" name="tags[]" id="tag-{{ $loop->iteration }}" value="{{ $tag->id }}"
        <label for="tag-{{ $loop->iteration }}">{{ $tag->name }}</label>
    </div>

    @endforeach
    <input class="btn" type="submit" value="Create Post">

</form>

</div>

@endsection