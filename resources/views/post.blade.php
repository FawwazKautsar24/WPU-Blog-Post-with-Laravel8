@extends('layouts.main')

@section('container')
    <article class='mb-5'>
        <h2>{{ $post->title }}</a></h2>
        <!-- <h5>By: {{ $post->author }}</h5> -->
        {!! $post->body !!}
    </article>

    <a href="/posts">Back to Posts</a>
@endsection
