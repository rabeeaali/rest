<div class="card">
    <div class="card-header p-4 flex items-center">
        <p>Menu</p>
    </div>
    <div class="bg-white p-0">
        <ul class="bg-white shadow-sm">
            <li class="flex-grow">
                <a href="#"
                    class="block leading-tight text-sm px-4 py-3 text-gray-600 hover:bg-gray-100 focus:border-transparent">
                    Home
                </a>
            </li>
            <li class="flex-grow">
                <a href="#"
                    class="block leading-tight text-sm px-4 py-3 text-gray-600 hover:bg-gray-100 focus:border-transparent">
                    Orders
                </a>
            </li>
            <li class="flex-grow">
                <a href="{{ route('restaurant.products.index') }}"
                    class="block leading-tight text-sm px-4 py-3 {{ Route::is('restaurant.products.index') ? 'border-l-2 border-black' : '' }} text-gray-600 hover:bg-gray-100 focus:border-transparent">
                    Products
                </a>
            </li>
            <li class="flex-grow">
                <a href="{{ route('restaurant.categories.index') }}"
                    class="block leading-tight text-sm px-4 py-3 {{ Route::is('restaurant.categories.index') ? 'border-l-2 border-black' : '' }} text-gray-600 hover:bg-gray-100 focus:border-transparent">
                    Categories
                </a>
            </li>
            {{-- <li class="flex-grow">
                <a href="{{ route('restaurant.public.challenges.index') }}"
                    class="block leading-tight {{ Route::is('restaurant.public.challenges.*') ? 'border-l-2 border-black' : '' }} text-sm px-4 py-3 text-gray-600 hover:bg-gray-100 focus:border-transparent">
                    Public Challenges
                </a>
            </li> --}}
            <li class="flex-grow">
                <a href="{{ route('restaurant.profile.index') }}"
                    class="block leading-tight text-sm px-4 py-3 {{ Route::is('restaurant.profile.index') ? 'border-l-2 border-black' : '' }} text-gray-600 hover:bg-gray-100 focus:border-transparent">
                    Profile
                </a>
            </li>
            <li class="flex-grow">
                <a href="#" onclick="document.getElementById('logout-restaurant').submit();"
                    class="block leading-tight text-sm px-4 py-3 text-red-600 hover:bg-gray-100 focus:border-transparent">
                    Logout
                </a>
                <form action="{{ route('restaurant.logout') }}" method="post" id="logout-restaurant">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>
