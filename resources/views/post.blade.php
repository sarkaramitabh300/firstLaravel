<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/app.css">
    <title>Posts</title>
</head>

<body>
    <article>
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        {{ $post->created_at }}
        {{ $post->updated_at }}
    </article>
    <a href="/">Back</a>
</body>

</html>
