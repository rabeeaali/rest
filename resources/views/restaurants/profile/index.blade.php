<x-app-restaurant-layout title="Profile">
    <div class="md:grid md:grid-cols-5 md:gap-6">
        <div class="md:col-span-1">
            @include('restaurants.layouts.sidebar')
        </div>
        <div class="mt-5 md:mt-0 md:col-span-4">
            <x-status-session class="mb-4" />
            <x-error-session class="mb-4" />
            <form method="POST" id="form-data" action="{{ route('restaurant.profile.update') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header p-4 flex items-center">
                        <p>Profile</p>
                    </div>
                    <div class="card-body">
                        <div class="w-[100px] h-[100px] m-auto relative">
                            <label for="file-input">
                                <img id="profilePicture" src="{{ restaurant()->image_path }}" loading="lazy"
                                    onerror="this.src='{{ asset('images/default-user.jpg') }}'"
                                    class="rounded-full shadow-md w-full h-full object-cover"
                                    alt="{{ restaurant()->name }}">
                                <div
                                    class="edit-profile-picture-circle icon-circle bg-gray-300 text-white border-white border-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="#506690" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera">
                                        <path
                                            d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z">
                                        </path>
                                        <circle cx="12" cy="13" r="4"></circle>
                                    </svg>
                                </div>
                            </label>
                            <input id="file-input" accept="image/*" type="file" class="hidden" name="image"
                                onchange="previewFile()">
                        </div>
                        <div class="py-3 w-full">

                            <!-- Name -->
                            <div class="mt-4">
                                <x-label for="name" :value="__('Name')" />

                                <x-input id="name" class="mt-1 w-full" type="text" name="name"
                                    :value="old('name', restaurant()->name)" />
                            </div>

                            <!-- email -->
                            <div class="mt-4">
                                <x-label for="email" :value="__('Email')" />

                                <x-input id="email" class="mt-1 w-full" type="text" name="email"
                                    :value="old('email', restaurant()->email)" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-label for="password" :value="__('Password')" />

                                <x-input id="password" class="block mt-1 w-full" type="password" name="password" />
                                <p class="text-xs text-gray-500 pt-1">Leave it empty if you do not want to change the
                                    password.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header p-4 flex items-center">
                        <p>
                            Restaurant Times
                        </p>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
                <div class="py-4">
                    <x-button class="w-full" value="Save" />
                </div>
            </form>
        </div>
    </div>
    @push('js')
        <script>
            function previewFile() {
                profilePicture.src = URL.createObjectURL(event.target.files[0]);
            }
        </script>
    @endpush
</x-app-restaurant-layout>
