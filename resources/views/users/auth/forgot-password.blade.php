<x-app-layout title="Forget Password">
    <div class="w-full sm:max-w-3xl mx-auto mt-5 px-4 sm:px-6">
        <div class="mt-10 flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <h1 class="font-bold text-4xl">Forgot your password</h1>
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden">
                <div class="mb-4 text-sm text-gray-600">
                    {{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>

                <form id="form-data" method="POST" action="{{ route('user.password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                            required />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-button>
                            {{ __('Email Password Reset Link') }}
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
