<x-app-layout title="Register">
    <div class="w-full sm:max-w-3xl mx-auto mt-5 px-4 sm:px-6">
        <div class="mt-10 flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <h1 class="font-bold text-4xl">A Talent Profile</h1>
            <p class="text-gray-600 mt-4">For Developers and Designers</p>
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden">
                <form id="form-data" method="POST" action="{{ route('user.register') }}">
                    @csrf
                    <!-- username -->
                    <div class="mt-4">
                        <x-label for="username" :value="__('Username')" />

                        <x-input id="username" class="block mt-1 w-full" onchange="isUserNameValid(this)"
                            type="text" name="username" :value="old('username')" required />
                        <p id="username-validation" class="text-red-600 text-xs pt-1 hidden"></p>
                    </div>

                    <!-- Name -->
                    <div class="mt-4">
                        <x-label for="name" :value="__('Full Name')" />

                        <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" required />
                    </div>

                    <!-- headline -->
                    <div class="mt-4">
                        <x-label for="headline" :value="__('Headline')" />

                        <x-input id="headline" class="block mt-1 text-sm w-full" type="text" name="headline"
                            :value="old('headline')" required placeholder="ui & ux designer" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                            autocomplete="new-password" required />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                            href="{{ route('user.login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-button class="ml-4">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                    <x-error-session class="mt-3" />
                </form>
            </div>
        </div>
    </div>
    @push('js')
        <script>
            function isUserNameValid(username) {
                var regex = /^[a-zA-Z0-9]{5,15}$/;
                if (regex.test(username.value)) {
                    if (document.getElementById('username-validation')) {
                        document.getElementById('username-validation').classList.add('hidden');
                    }
                    username.classList.add('border-green-500');
                } else {
                    document.getElementById('username-validation').classList.remove('hidden');
                    document.getElementById('username-validation').innerHTML =
                        'Username must contain only letters, numbers, min 5 characters';
                }
            }
        </script>
    @endpush
</x-app-layout>
