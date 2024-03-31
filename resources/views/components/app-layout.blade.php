<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
{{--        {{ $title ? $title . ' / Laravel 11' : "Laravel 11"}}--}}
        @isset($title)
            {{ $title }} / Laravel 11
        @else
            Laravel 11
        @endisset
    </title>
</head>
<body>
    <ul>
        <li><a href="/">home</a></li>
        <li><a href="/about">about</a></li>
        <li><a href="/contact">contact</a></li>
        <li><a href="/gallery">gallery</a></li>
    </ul>

    {{ $slot }}
</body>
</html>
