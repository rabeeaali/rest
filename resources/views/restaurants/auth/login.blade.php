<x-guest-restaurant-layout title="Login">
    <div class="flex flex-wrap w-full">
        <div class="flex flex-col w-full md:w-1/2">
            <div class="flex justify-center pt-12 md:justify-start md:pl-12 md:-mb-24">
                <a href="/" class="p-4 text-xl font-bold text-white bg-black">
                    {{ config('app.name') }}.
                </a>
            </div>
            <div class="flex flex-col justify-center px-8 pt-8 my-auto md:justify-start md:pt-0 md:px-24 lg:px-32">
                <p class="text-3xl text-center">
                    Welcome 👋
                </p>
                <p class="text-base text-gray-500 mt-2 text-center">
                    We will help you to find the best minds.
                </p>
                <form id="form-data" action="{{ route('restaurant.login') }}" id="data-form" method="post"
                    class="flex flex-col pt-3 md:pt-5">
                    @csrf
                    <div class="flex flex-col pt-4">
                        <div class="flex relative">
                            <span
                                class="inline-flex items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                </svg>
                            </span>
                            <input type="email" id="design-login-email" name="email" value="rest@gmail.com"
                                class="flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent"
                                placeholder="Email" required />

                        </div>
                    </div>
                    <div class="flex flex-col pt-4 mb-5">
                        <div class="flex relative ">
                            <span
                                class=" inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                <svg width="15" height="15" fill="currentColor" viewBox="0 0 1792 1792"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1376 768q40 0 68 28t28 68v576q0 40-28 68t-68 28h-960q-40 0-68-28t-28-68v-576q0-40 28-68t68-28h32v-320q0-185 131.5-316.5t316.5-131.5 316.5 131.5 131.5 316.5q0 26-19 45t-45 19h-64q-26 0-45-19t-19-45q0-106-75-181t-181-75-181 75-75 181v320h736z">
                                    </path>
                                </svg>
                            </span>
                            <input type="password" id="design-login-password" name="password"
                                class=" flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent"
                                placeholder="Password" value="12345678" />
                        </div>

                        <!-- Remember Me -->
                        {{-- <div class="flex justify-between items-center">
                            <x-remember-me />
                            <div class="mt-3">
                                <a href="{{ route('restaurant.password.email') }}"
                                    class="text-sm text-gray-500 hover:text-gray-700 ">
                                    Forgot Password?
                                </a>
                            </div>
                        </div> --}}
                    </div>

                    <x-button class="w-full" />
                </form>

                <x-error-session class="mt-3" />

                <x-error class="mt-3" />

                <x-status-session class="mt-3" />

                <div class="pt-10 text-center">
                    <p>
                        Don&#x27;t have an account?
                        <a href="{{ route('restaurant.register') }}" class="font-semibold underline">
                            Register here.
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="w-1/2 shadow-2xl">
            <img class="hidden object-cover w-full h-screen md:block" loading="lazy"
                src="{{ asset('images/company_bg.jpg') }}" />
        </div>
    </div>

</x-guest-restaurant-layout>
