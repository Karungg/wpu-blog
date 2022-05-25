@extends('layouts.main')

@section('container')
<h1>Post Categories</h1>
    @foreach ($categories as $category)
    <ul>
        <li>
            <h3><a href="/categories/{{ $category->slug }}">{{ $category->slug }}</a></h3>
        </li>
    </ul>
    <a href="/posts" class="d-block mt-3">Back To Posts</a>
    @endforeach
@endsection