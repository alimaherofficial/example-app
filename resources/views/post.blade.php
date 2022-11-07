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
    </article>

    <a href="/">Go Back</a>



</body>

</html>
