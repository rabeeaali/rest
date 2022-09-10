<x-app-layout title="Login">
    <div class="w-full sm:max-w-3xl mx-auto mt-5 px-4 sm:px-6">
        <div class="mt-10 flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <h1 class="font-bold text-4xl">Log in</h1>
            <p class="text-gray-600 mt-4">Please login or create a new profile</p>
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden">
                <form id="form-data" method="POST" action="{{ route('user.login') }}">
                    @csrf
                    <!-- Email Address -->
                    <div>
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                            required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />
                    </div>

                    <!-- Remember Me -->
                    <x-remember-me />

                    <div class="flex items-center justify-end mt-4">
                        {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900"
                            href="{{ route('user.password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a> --}}

                        <x-button class="ml-3">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                    <x-error-session class="mt-3" />

                    <x-error class="mt-3" />

                    <x-status-session class="mt-3" />
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
