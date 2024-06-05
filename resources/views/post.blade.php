@extends('layouts.main')

@section('content')
    <article class="mb-5 mt-5 text-dark">
        <h1 class="text-dark"> {{$post->title}} </h1>
        {!! $post->body !!}
    </article>
    <a href="/posts">Back</a>
@endsection