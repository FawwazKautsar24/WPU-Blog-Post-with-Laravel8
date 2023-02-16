@extends('layouts.main')

@section('container')
    <article class='mb-5'>
        <h2>{{ $post->title }}</a></h2>

        <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        
        {!! $post->body !!}
    </article>

    <a href="/posts">Back to Posts</a>
@endsection
