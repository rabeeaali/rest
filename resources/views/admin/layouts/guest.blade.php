<!DOCTYPE html>
<html dir="lte" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" type="image/jpg" href="{{ asset('images/favicon.ico') }}" />

    <title>{{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="text-gray-900 font-ga">
        {{ $slot }}
    </div>
    @stack('js')
</body>

</html>
