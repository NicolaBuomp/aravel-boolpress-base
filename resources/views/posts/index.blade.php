@extends('layouts.main')

@section('content')

    @foreach($posts as $post)

        <article>
            <h2>{{ $post->title }}</h2>
            <h4> {{$post->user->name}} </h4>
            <h5>Created: {{$post->created_at}}, Last Modified: {{$post->updated_at}}</h5>
            <p>{{ $post->body }}</p>
        </article>

    @endforeach


    <h3>Navigation</h3>
    {{ $posts->links() }}

@endsection