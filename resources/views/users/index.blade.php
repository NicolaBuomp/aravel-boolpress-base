@extends('layouts.main')

@section('content')

    <H1>Blog Archive</H1>

    @foreach($users as $user)

        <div class="user">

            <h2>{{$user->name}}</h2>

            <h3>{{$user->email}}</h3>

            <img src="{{$user->info['avatar']}}" alt="">

            <div class="">{{$user->info['address']}}</div>

            <div class="">{{$user->info['phone']}}</div>

            <h3>Posts</h3>

            <ul>
                @foreach ($user->posts as $post)
                    <li>
                        <h4>{{$post->title}}</h4>
                        <span>{{$post->body}}</span>
                    </li>
                @endforeach
            </ul>

        </div>
    @endforeach

@endsection