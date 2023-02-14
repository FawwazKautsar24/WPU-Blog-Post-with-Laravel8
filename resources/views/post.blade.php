@extends('layouts.main')

@section('container')
    <article class='mb-5'>
        <h2>{{ $post->title }}</a></h2>
        <!-- <h5>By: {{ $post->author }}</h5> -->
        <p>By. Fawwaz Kautsar in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        
        {!! $post->body !!}
    </article>

    <a href="/posts">Back to Posts</a>
@endsection
