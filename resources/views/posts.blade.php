@extends('components.layout')

@section('content')
@foreach ($posts as $post)
<article>
    <h1><a href="posts/{{ $post->slug }}"> {{ $post->title }}</a></h1>
    <p>
        Written by <a href="/authers/{{ $post->auther->username }}">{{ $post->auther->name }} </a> in <a
            href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
    </p>
    <div>{{ $post->expert }}</div>
    <p> {{ $post->body }}</p>

</article>
@endforeach


@endsection
