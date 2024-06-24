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
            <form action="/posts" method="POST">
                @csrf
                <div class="title">
                    <h2>Title</h2>
                    <input type="text" name="post[title]" placeholder="タイトル"/>
                </div>
                <div class="body">
                    <h2>Body</h2>
                    <textarea name="post[body]" placeholder="本文"></textarea>
                </div>
                @foreach($tags as $tag)
                <label>
                    <input type="checkbox" value="{{ $tag->id }}" name="tags[]">
                    {{ $tag->name }}
                    </input>
                </label>
                @endforeach
                <input type="submit" value="投稿"/>
            </form>
            <div class="footer">
            <a href="/posts">戻る</a>
            </div>
        </body>
    </html>     
</x-app-layout>  