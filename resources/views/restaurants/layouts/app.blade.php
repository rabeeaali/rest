<!DOCTYPE html>
<html dir="lte" lang="en">

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
    @stack('css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="min-h-screen bg-gray-200">
        @include('restaurants.layouts.header')
        <main class="mt-5">
            <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>
    <script src="{{ asset('js/my-js.js') }}"></script>
    @stack('js')
</body>
</html>
