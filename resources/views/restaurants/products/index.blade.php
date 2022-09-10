<x-app-restaurant-layout title="Products">
    <div class="md:grid md:grid-cols-5 md:gap-6">
        <div class="md:col-span-1">
            @include('restaurants.layouts.sidebar')
        </div>
        <div class="my-5 md:mt-0 md:col-span-4">
            <x-status-session class="mb-4" />
            <div class="card">
                <div class="card-header p-4 flex justify-between items-center">
                    <p class="mr-2">Products</p>
                    <a href="{{ route('restaurant.products.create') }}" class="bg-black text-white text-sm p-2">
                        Create
                    </a>
                </div>
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200">
                                <table class="table-fixed min-w-full divide-y divide-gray-200">
                                    <x-thead :columns="['Name', 'Price', 'Quantity', 'Created at', 'Actions']" />
                                    <tbody class="bg-white divide-y divide-gray-200 w-full">
                                        @forelse ($products as $product)
                                            <tr class="hover:bg-gray-100">
                                                <td class="p-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0">
                                                            <a href="{{ route('restaurant.products.show', $product->id) }}"
                                                                class="block relative">
                                                                @if ($product->image_path)
                                                                    <img
                                                                        src="{{ $product->image_path }}"class="mx-auto object-cover rounded-full h-10 w-10">
                                                                @else
                                                                    <img class="mx-auto object-cover rounded-full h-10 w-10"
                                                                        src="https://ui-avatars.com/api/?name={{ $product->name }}">
                                                                @endif
                                                            </a>
                                                        </div>
                                                        <div class="ml-3">
                                                            <p class="text-gray-900 whitespace-no-wrap">
                                                                {{ $product->name }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    {{ $product->email }}
                                                </td>
                                                <td class="p-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    {{ $product->phone }}
                                                </td>
                                                <td class="p-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    @if ($product->is_active)
                                                        <span
                                                            class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight"><span
                                                                aria-hidden="true"
                                                                class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                            <span class="relative">active</span>
                                                        </span>
                                                    @else
                                                        <span
                                                            class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight"><span
                                                                aria-hidden="true"
                                                                class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                                            <span class="relative">inactive</span>
                                                        </span>
                                                    @endif
                                                </td>
                                                <td class="p-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    {{ $product->dated_at }}
                                                </td>
                                                <td class="p-4 whitespace-nowrap">
                                                    {{-- <a href="{{ route('admin.products.show', $product) }}" class="text-green-600">
                                                        view
                                                    </a>
                                                    |
                                                    <a href="#" data-target="update-modal-{{ $product->id }}"
                                                        class="--jb-modal text-indigo-600">
                                                        edit
                                                    </a>
                                                    @include('admin.products.update')
                                                    |
                                                    <x-delete-modal target="delete-modal-{{ $product->id }}"
                                                        formUrl="{{ route('admin.products.delete', $product->id) }}"
                                                        modalId="delete-modal-{{ $product->id }}"
                                                        headMsg="Are you sure to delete the product?"
                                                        msg="If the product is deleted, all things related to him will be deleted!" /> --}}
                                                </td>
                                            </tr>
                                        @empty
                                            <x-no-data-tr colspan="10" />
                                        @endforelse
                                    </tbody>
                                </table>
                                <x-paginate :data="$products" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-restaurant-layout>
