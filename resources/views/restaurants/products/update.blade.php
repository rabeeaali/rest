<x-app-restaurant-layout title="Update">
    <div class="md:grid md:grid-cols-5 md:gap-6">
        <div class="md:col-span-1">
            @include('restaurants.layouts.sidebar')
        </div>
        <div class="my-5 md:mt-0 md:col-span-4">
            <x-error-session class="mb-4" />

            <form id="form-data" action="{{ route('restaurant.categories.update', $category->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="card">
                    <div class="card-header p-4 flex justify-between items-center">
                        <p>Update ({{ $category->name }})</p>
                        <a href="{{ route('restaurant.categories.index') }}" class="text-blue-500">Back</a>
                    </div>
                    <div class="card-body">
                        <!-- name -->
                        <div>
                            <x-label for="name" :value="__('Name')" />

                            <x-input id="name" class="block mt-1 w-full text-sm" type="text" name="name"
                                :value="old('name', $category->name)" required />
                        </div>
                        <!-- file -->
                        <div class="mt-4">
                            <x-label for="type" :value="__('image')" />
                            <x-input id="image" class="block mt-1 w-full text-sm" type="file" name="image" />
                        </div>
                        <div class="mt-5">
                            <img src="{{ $category->image_path }}" class="w-[150px]">
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <x-button class="w-full text-center" value="Update Challenge" />
                </div>
            </form>
        </div>
    </div>
</x-app-restaurant-layout>
