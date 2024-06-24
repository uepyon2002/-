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
            <h1 class='title'>
                {{ $post->title }}
            </h1>
            <div class='content'>
                <div class='content'>
                <h3>本文</h3>
                <p>{{ $post->body }}</p> 
                </div>
                @foreach($post->tags as $tag)
                <span>{{ $tag->name }}</span>
                @endforeach
            </div>
            <div class="footer">
            <a href="/posts">戻る</a>
            </div>
        </body>
    </html>     
</x-app-layout>  