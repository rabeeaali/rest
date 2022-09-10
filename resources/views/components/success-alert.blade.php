@if (session('alert'))
<div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)"
    class="absolute inset-0 flex px-4 py-6 pointer-events-none p-6 items-start justify-end">
    <div x-show="show" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="max-w-sm w-full">
        <span>
            <div class="flex max-w-sm w-full mx-auto bg-white shadow-md rounded-lg overflow-hidden">
                <div class="flex justify-center items-center w-12 bg-green-500">
                    <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current text-white">
                        <path
                            d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z">
                        </path>
                    </svg>
                </div>
                <div class="-mx-3 py-4 px-4">
                    <div class="mx-3">
                        <p class="text-gray-600 text-sm">{{ session('alert') }}</p>
                    </div>
                </div>
            </div>
        </span>
    </div>
</div>
@endif