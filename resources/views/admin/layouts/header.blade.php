<!-- navbar -->
<nav x-data="{ open: false }" class="bg-white">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" @click="open = !open" aria-expanded="false"
                    x-bind:aria-expanded="open.toString()">
                    <span class="sr-only">Open main menu</span>
                    <svg x-description="Icon when menu is closed.

Heroicon name: outline/menu" x-state:on="Menu open"
                        x-state:off="Menu closed" class="h-6 w-6 block" :class="{ 'hidden': open, 'block': !(open) }"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg x-description="Icon when menu is open.

Heroicon name: outline/x" x-state:on="Menu open"
                        x-state:off="Menu closed" class="h-6 w-6 hidden" :class="{ 'block': open, 'hidden': !(open) }"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div>
                    <x-logo class="block lg:hidden" url="/admin" />
                    <x-logo class="hidden lg:block" url="/admin" />
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-2 mt-1">
                        <a href="/admin" class="px-3 py-2 font-medium" aria-current="page">Home</a>
                        <a href="#" class="px-3 py-2 font-medium" aria-current="page">Users</a>
                        <a href="#" class="px-3 py-2 font-medium" aria-current="page">Restaurants</a>
                        <a href="#" class="px-3 py-2 font-medium" aria-current="page">Orders</a>
                        <a href="#" class="px-3 py-2 font-medium" aria-current="page">Categoires</a>
                        <a href="{{ route('admin.profile.index') }}" class="px-3 py-2 font-medium"
                            aria-current="page">Profile</a>
                        <a href="#" onclick="document.getElementById('logout-admin').submit();"
                            class="px-3 py-2  text-red-600 font-medium" aria-current="page">Logout</a>
                        <form action="{{ route('admin.logout') }}" method="post" id="logout-admin">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div x-description="Mobile menu, show/hide based on menu state." class="sm:hidden" id="mobile-menu" x-show="open"
        style="display: none;">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="/admin" class="px-3 py-2 block text-base font-medium" aria-current="page">Home</a>
            <a href="{{ route('admin.users.index') }}" class="px-3 py-2 block text-base font-medium"
                aria-current="page">Users</a>
            <a href="{{ route('admin.companies.index') }}" class="px-3 py-2 block text-base font-medium"
                aria-current="page">Companies</a>
            <a href="{{ route('admin.profile.index') }}" class="px-3 py-2 block text-base font-medium"
                aria-current="page">Profile</a>
            <a href="#" onclick="document.getElementById('logout-admin').submit();"
                class="px-3 py-2 block text-base text-red-600 font-medium" aria-current="page">Logout</a>
            <form action="{{ route('admin.logout') }}" method="post" id="logout-admin">
                @csrf
            </form>
        </div>
    </div>
</nav>
<!-- end nav -->
