<x-layout>

        @include('_posts-header')

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

            @if ($posts->count())
                <x-post-featured-card :post="$posts[0]"/>

                @if ($posts->count() >1)
                    <x-post-grid :posts="$posts" />
                @endif

            @else
                <p class="text-center">No posts yet</p>
            @endif

        </main>

        <!-- @foreach ($posts as $post)
            <article class="mb-4">
                <h1>
                    <a href="/posts/{{$post->slug}}">
                        {{$post->title}}
                    </a>
                </h1>

                <p>
                   By <a href="/authors/{{ $post->author->id}}">{{$post->author->name}}</a> in <a href="/categories/{{ $post -> category->slug}}">{{$post->category->name}}</a>
                </p>

                <div>
                    <p>{{$post->excerpt}}</p>
                </div>
            </article>
        @endforeach -->

</x-layout>
