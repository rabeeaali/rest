@props(['value', 'url'])

<div {{ $attributes->merge(['class' => 'bg-black font-medium p-2 w-[150px] text-center']) }}>
    <a href="{{ $url }}">
        <h1 class="text-lg text-white">{{ config('app.name') }}.</h1>
    </a>
</div>
