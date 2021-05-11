<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="/app.css">
    <title>My Blog</title>
</head>

<body>

    @foreach ($posts as $post)
        <article class="mb-4">
            <h1>
                <a href="/posts/{{$post->slug}}">
                    {{$post->title}}
                </a>
            </h1>

            <div>
                {{$post->excerpt}}
            </div>
        </article>
    @endforeach

</body>
</html>
