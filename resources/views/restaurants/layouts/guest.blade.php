<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel='apple-touch-icon' type='image/png' href='{{ asset('images/fiv.png') }}'>
    <link rel='apple-touch-icon' type='image/png' sizes='72x72' href='{{ asset('images/fiv.png') }}'>
    <link rel='apple-touch-icon' type='image/png' sizes='114x114' href='{{ asset('images/fiv.png') }}'>
    <link rel='icon' type='image/png' href='{{ asset('images/fiv.png') }}'>
    <title>
        @isset($title)
            {{ $title }} -
        @endisset {{ config('app.name') }}
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    {{ $slot }}
    @stack('js')
</body>

</html>
