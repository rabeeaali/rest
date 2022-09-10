<div class="relative bg-white shadow-sm" x-data="{ open: false, focus: false }" @keydown.escape="onEscape"
    @close-popover-group.window="onClosePopoverGroup">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center border-b-2 border-gray-100 py-3 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <x-logo url="/" />
            </div>
            <div class="-mr-2 -my-2 md:hidden">
                <button type="button"
                    class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-black"
                    @click="open = true" aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <svg class="h-6 w-6" x-description="Heroicon name: outline/menu" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                @guest
                    <a href="{{ route('user.login') }}"
                        class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                        Login
                    </a>
                    <a href="{{ route('user.register') }}"
                        class="whitespace-nowrap text-base ml-8 font-medium text-gray-500 hover:text-gray-900">
                        Register
                    </a>
                @endguest
                @auth
                    <a href="{{ route('user.profile', user()->username) }}"
                        class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                        Profile
                    </a>
                    <a href="#" onclick="document.getElementById('logout-user').submit();"
                        class="whitespace-nowrap text-base ml-8 font-medium text-gray-500 hover:text-gray-900">
                        Logout
                    </a>
                    <form action="{{ route('user.logout') }}" method="post" class="hidden" id="logout-user">
                        @csrf
                    </form>
                @endauth
            </div>
        </div>
    </div>


    <div x-show="open" x-transition:enter="duration-200 ease-out" x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in"
        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
        x-description="Mobile menu, show/hide based on mobile menu state."
        class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden" x-ref="panel"
        @click.away="open = false" style="display: none;">
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
            {{-- <div class="flex items-end">
                 <button type="button"
                class="bg-white rounded-md p-2 inline-flex items-end justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-black"
                @click="open = false">
                <span class="sr-only">Close menu</span>
                <svg class="h-6 w-6" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
             </div> --}}
            <div class="py-6 px-5 space-y-6">
                @guest
                    <a href="{{ route('user.login') }}"
                        class="flex items-center whitespace-nowrap sm:pb-4 text-base font-medium text-gray-500 hover:text-gray-900">
                        Login
                    </a>
                    <a href="{{ route('user.register') }}"
                        class="flex items-center whitespace-nowrap sm:ml-5 text-base font-medium text-gray-500 hover:text-gray-900">
                        Register
                    </a>
                @endguest
                @auth
                    <a href="{{ route('user.profile', user()->username) }}"
                        class="flex items-center whitespace-nowrap sm:pb-4 text-base font-medium text-gray-500 hover:text-gray-900">
                        Profile
                    </a>
                    <a href="#" onclick="document.getElementById('logout-user').submit();"
                        class="flex items-center whitespace-nowrap sm:ml-5 text-base font-medium text-gray-500 hover:text-gray-900">
                        Logout
                    </a>
                    <form action="{{ route('user.logout') }}" class="hidden" method="post" id="logout-user">
                        @csrf
                    </form>
                @endauth
            </div>
        </div>
    </div>

</div>
