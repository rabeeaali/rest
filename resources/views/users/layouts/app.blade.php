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

    @stack('css')
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="min-h-screen bg-gray-100">
        @include('users.layouts.navbar')
        @auth
            @if (!user()->phone || !user()->city)
                <p
                    class="bg-red-600 h-10 flex capitalize items-center justify-center text-sm font-medium text-white px-4 sm:px-6 lg:px-8">
                    please complete your page
                </p>
            @endif
        @endauth
        <x-sweetalert />
        <main>
            {{ $slot }}
        </main>
        @include('users.layouts.footer')
    </div>
    @stack('js')
</body>

</html>
