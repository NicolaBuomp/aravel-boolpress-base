@extends('layouts.main')

@section('content')

<div class="main-content">
    @foreach($posts as $post)

        <article>
            <h2>{{ $post->title }}</h2>
            <h4> {{$post->user->name}} </h4>
            <h5>Created: {{$post->created_at}}, Last Modified: {{$post->updated_at}}</h5>
            <p>{{ $post->body }}</p>
            <a href="{{ route('posts.show' , $post->slug) }}">Read more.</a>

            {{-- <input type="text" placeholder="Commenta il post!" name="comment" id="comment">

            <h2>Comments :</h2> --}}
        </article>

    @endforeach


    <div class="navigation">
        {{ $posts->links() }}

    </div>

</div>

@endsection