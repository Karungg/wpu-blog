@extends('layouts.main')

@section('container')
    <h1>Post Category : {{ $category }}</h1>
    @foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-4">
        <h3><a class="text-decoration-none" href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h3>
        <p>By. <a class="text-decoration-none" href="">{{ $post->user->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <p>{{ $post->excerpt }}</p>
    </article>
    @endforeach
    <a href="/posts" class="d-block mt-3">Back To Posts</a>
@endsection