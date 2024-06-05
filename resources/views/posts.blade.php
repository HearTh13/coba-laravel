@extends('layouts.main')

@section('content')
  @foreach ($posts as $post)
    <article class="mb-5">
        <h1 class="text-light"> <a href="/posts/{{$post->slug}}">{{$post->title}}</a> </h1>
        <p class="text-light"> {{$post->excerpt}} </p>
    </article>
  @endforeach
@endsection