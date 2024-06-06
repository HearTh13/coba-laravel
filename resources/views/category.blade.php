@extends('layouts.main')

@section('content')

    <h1 class = "mb-5">Post Category : {{ $category }} </h1>

  @foreach ($posts as $post)
    <article class="mb-5 text-dark">
        <h1> <a href="/posts/{{$post->slug}}">{{$post->title}}</a> </h1>
        <p> {{$post->excerpt}} </p>
    </article>
  @endforeach
@endsection