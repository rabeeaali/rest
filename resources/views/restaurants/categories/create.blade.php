<x-app-restaurant-layout title="Create">
    <div class="md:grid md:grid-cols-5 md:gap-6">
        <div class="md:col-span-1">
            @include('restaurants.layouts.sidebar')
        </div>
        <div class="my-5 md:mt-0 md:col-span-4">
            <x-error-session class="mb-4" />

            <form id="form-data" action="{{ route('restaurant.categories.store') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header p-4 flex justify-between items-center">
                        <p>Create a new Category</p>
                        <a href="{{ route('restaurant.categories.index') }}" class="text-blue-500">Back</a>
                    </div>
                    <div class="card-body">
                        <!-- title -->
                        <div>
                            <x-label for="name" :value="__('Name')" />

                            <x-input id="name" class="block mt-1 w-full text-sm" type="text" name="name"
                                :value="old('name')" required />
                        </div>
                        <!-- file -->
                        <div class="mt-4">
                            <x-label for="type" :value="__('image')" />
                            <x-input id="image" class="block mt-1 w-full text-sm" type="file" name="image" />
                        </div>
                    </div>
                </div>
                <div class="my-6">
                    <x-button class="w-full text-center" value="Create Category" />
                </div>
            </form>
        </div>
    </div>
</x-app-restaurant-layout>
