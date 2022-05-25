@extends('layouts.main')

@section('container')
    <h1>Halaman Blog Posts</h1>
    @foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-4">
        <h2><a class="text-decoration-none" href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <p>By. <a class="text-decoration-none" href="/author/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <p>{{ $post->excerpt }}</p>
        <a class="text-decoration-none" href="/posts/{{ $post->slug }}">Read more..</a>
    </article>
    @endforeach
@endsection

{{-- Post::create([
    'title' => 'Judul Ke Tiga',
    'category_id' => '3',
    'slug' => 'judul-ketiga',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
    'body' => '<p>Lorem ipsum ketiga</p> <p> Veritatis ex eveniet quam consequatur ut laudantium id qui sunt, est officiis assumenda? Alias exercitationem assumenda iure. Deserunt laborum sunt odio ducimus earum quae quisquam itaque nulla pariatur non blanditiis rem ipsa, ullam accusamus perspiciatis. Est, cum fuga. Recusandae architecto doloremque cum possimus! Cumque voluptate corporis quibusdam modi error numquam, sunt quas velit ab eligendi rerum eveniet nostrum totam porro a.</p> <p> Labore blanditiis rem, itaque tempora velit, eos animi libero suscipit in, officiis incidunt? Sint suscipit maxime deleniti maiores. Natus quia cupiditate quis adipisci laboriosam earum non nulla aspernatur, at culpa eaque iure fuga veritatis recusandae animi similique odio consectetur. Nesciunt tempora, nihil itaque quae asperiores corrupti ea praesentium optio ipsum magnam animi dolores quia facilis eveniet? Voluptatem, sapiente. Autem.</p>'
]) --}}

{{-- Post::create([
    'name' => 'Personal',
    'slug' => 'personal'
]) --}}