<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ali Blog</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
</head>

<body>
    @foreach ($posts as $post)
        <article>
            <h1><a href="posts/{{ $post->slug }}"> {{ $post->title }}</a></h1>
            <p>
                Written by <a href="/users/{{ $post->user_id }}">{{ $post->user->name }} </a> in <a
                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>
            <div>{{ $post->expert }}</div>
            <p> {{ $post->body }}</p>

        </article>
    @endforeach
</body>

</html>
