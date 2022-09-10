@if (session('status'))
    <div id="alert"
        {{ $attributes->merge(['class' => 'bg-green-200 border-green-600 text-green-600 border-l-4 p-4']) }}
        role="alert">
        <p class="font-bold">Success</p>
        <p>{{ session('status') }}</p>
    </div>
@endif

{{-- @push('js')
    <script>
        const alert = document.getElementById('alert');
        if (alert) {
            setTimeout(() => {
                alert.remove();
            }, 4000);
        }
    </script>
@endpush --}}
