@extends('layouts.main')

@section('content')

    <div class="main-content">

        <H1>Users Archive</H1>
    
    
        @foreach($users as $user)
    
            <div class="user">
    
                <h2>{{$user->name}}</h2>
    
                <h3>{{$user->email}}</h3>
    
                <p>{{$user->info['address']}}</p>
    
                <p>{{$user->info['phone']}}</p>
    
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
    </div>

@endsection