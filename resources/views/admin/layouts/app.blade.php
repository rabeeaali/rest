<!DOCTYPE html>
<html dir="lte" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @isset($title)
            {{ $title }} -
        @endisset {{ config('app.name') }}
    </title>

    <link rel="shortcut icon" type="image/jpg" href="{{ asset('images/favicon.ico') }}" />

    @stack('css')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex h-screen bg-gray-200 inter">
        <div class="flex-1 flex flex-col overflow-hidden">
            <x-success-alert />
            @include('admin.layouts.header')
            <!-- content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto mt-5">
                <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                    @if ($errors->any())
                        <x-auth-validation-errors class="bg-red-500 p-4 shadow-sm rounded mb-4" :errors="$errors" />
                    @endif

                    {{ $slot }}
                </div>
            </main>
            <!-- end content -->
        </div>
    </div>

    <script src="{{ asset('js/my-js.js') }}"></script>
    @stack('js')
</body>

</html>
