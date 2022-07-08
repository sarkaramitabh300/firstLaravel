<!Document html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>My Blog</title>
        <link rel="stylesheet" href="/app.css">
    </head>

    <body>
        <h1>Laravel Tutorials</h1>
        <ul>
            @foreach ($posts as $post)
                <article>

                    <a href="/post/{{ $post->id }}">
                        <h1> {{ $post->title }}</h1>
                    </a>

                    <div>
                        <p> {{ $post->excerpt }}</p>

                </article>
            @endforeach
        </ul>
    </body>

    </html>
