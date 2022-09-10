@props(['title'])
<div class="card">
    <div class="card-header p-4 flex justify-between items-center">
        <p>{{ $title }}</p>
    </div>
    <div class="card-body">
        {{ $slot }}
    </div>
</div>
