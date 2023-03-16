@extends('dashboard.layouts.main')

@section('container')
<div class="container">
        <div class="row my-4">
            <div class="col-lg-8">
                <article>
                    <h2 class="mb-3">{{ $post->title }}</a></h2>
            
                    <a href="/dashboard/posts" class="btn btn-info"><span data-feather="eye"></span> Back to all my posts</a>
                    <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
                    </form>

                    <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">
                    
                    <article class="my-3 fs-5">
                        {!! $post->body !!}
                    </article>
                
                </article>
            </div>
        </div>
    </div>
@endsection
