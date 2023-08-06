<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield("title")</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset("css/main.css") }}">
        <link rel="stylesheet" href="{{ asset("css/framework.css") }}">
        <link rel="icon shortcut" href="{{ asset("assets/logo-latest-transparent.png") }}">
    </head>
    <body class="flex flex-center flex-column">
        <nav>
            <img class="logo" alt="logo" src="{{ asset("assets/logo-latest-transparent.png") }}" />
            <ul class="flex">
                <a href="/posts"><li>Posts</li></a>
                <a href="/posts/create"><li>New Posts</li></a>
            </ul>
        </nav>
        @yield("contents")
    </body>
</html>

