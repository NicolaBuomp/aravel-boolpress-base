@extends('layouts.main')

@section('content')

<div class="main-content">

<h1>{{ $post->title }}</h1>

<p>{{ $post->body }}</p>

</div>

@endsection