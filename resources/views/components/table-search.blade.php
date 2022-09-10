@props([
'searchAction',
'placeHolder'
])
<div class="sm:flex relative items-center sm:divide-gray-100 mb-3 sm:mb-0">
    <form class="lg:pl-3" action="{{ $searchAction }}" method="GET">
        <div class="mt-1 lg:w-64">
            <input type="text" name="search" id="search-input" required value="{{ request('search') ?? ""  }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm focus:ring-black focus:border-black block w-full p-2.5"
                placeholder="{{ $placeHolder }}">
        </div>
    </form>
    @if (request('search'))
    <a href="{{ $searchAction }}" class="absolute right-0 top-0 mt-3 ml-3 sm:mr-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="text-purple-lighter text-gray-600 h-6 w-6" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    </a>
    @endif
</div>
