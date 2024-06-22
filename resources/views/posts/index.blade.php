<!DOCTYPE html>
<x-app-layout>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>NearestPoint</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head>
        <body>
            <h1>ニアレストポイント</h1>
            <div class='posts'>
                <div class='post'>
                    @foreach ($allPosts as $post)
                    <h2 class='title'><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
                    <p class='body'>{{ $post->body }}</p>
                    <p class='body'>{{ $post->like_count }}</p>
                    @endforeach
                    <h1>新着</h1>
                    <h2 class='title'>{{ $latestPost->title }}</h2>
                    <p class='body'>{{ $latestPost->body }}</p>
                    <p class='body'>{{ $latestPost->like_count }}</p>
                    <h1>人気</h1>
                    <h2 class='title'>{{ $likePost->title }}</h2>
                    <p class='body'>{{ $likePost->body }}</p>
                    <p class='body'>{{ $likePost->like_count }}</p>
                </div>
            </div>
            <div class='paginate'>
            {{ $allPosts->links()}}
            </div>
        </body>
    </html>     
</x-app-layout>  