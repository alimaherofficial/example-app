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

    <article>
        <h1>{{ $post->title }}</h1>
        <P>{{ $post->body }}</P>
        <p>
            Written by <a href="/authers/{{ $post->auther->username }}">{{ $post->auther->name }} </a> in <a
                href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>
        <a href="/">Go Back</a>
    </article>





</body>

</html>
