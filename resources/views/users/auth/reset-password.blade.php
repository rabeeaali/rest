<x-app-layout title="Reset Password">
    <div class="w-full sm:max-w-3xl mx-auto mt-5 px-4 sm:px-6">
        <div class="mt-10 flex flex-col sm:justify-center items-center pt-6 sm:pt-0 ">
            <h1 class="font-bold text-4xl">New Password</h1>
            <p class="text-gray-600 mt-4">Please enter your new password.</p>
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden">
                <form id="form-data" method="POST" action="{{ route('user.password.update') }}">
                    @csrf
                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Email Address -->
                    <div>
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email', $request->email)" required />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-button>
                            {{ __('Reset Password') }}
                        </x-button>
                    </div>

                    <x-error-session class="mt-3" />

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
