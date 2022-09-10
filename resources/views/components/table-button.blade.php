@props([
'name'
])

<button type="button" data-target="create-modal"
    class="--jb-modal w-1/2 text-white bg-black hover:bg-black focus:ring-4 focus:ring-black font-medium inline-flex items-center justify-center text-sm px-3 py-2 text-center sm:w-auto">
    {{ $name }}
    <svg class="mr-1 h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
            clip-rule="evenodd"></path>
    </svg>
</button>
