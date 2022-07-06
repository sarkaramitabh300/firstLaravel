<!Document html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Posts</title>
    </head>

    <body>
        <h1>Posts</h1>
        <ul>
            @foreach ($posts as $post)
                <article>
                    <li>
                        <a href="/posts/{{ $post->id }}">
                            {{ $post->title }}
                        </a>
                    </li>

                </article>
            @endforeach
        </ul>
    </body>

    </html>
