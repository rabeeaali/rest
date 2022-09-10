<x-app-restaurant-layout title="Categories">
    <div class="md:grid md:grid-cols-5 md:gap-6">
        <div class="md:col-span-1">
            @include('restaurants.layouts.sidebar')
        </div>
        <div class="my-5 md:mt-0 md:col-span-4">
            <x-status-session class="mb-4" />
            <div class="card">
                <div class="card-header p-4 flex justify-between items-center">
                    <p class="mr-2">Categories</p>
                    <a href="{{ route('restaurant.categories.create') }}" class="bg-black text-white text-sm p-2">
                        Create
                    </a>
                </div>
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <table class="table-fixed min-w-full divide-y divide-gray-200">
                                <tbody class="bg-white divide-y divide-gray-200 w-full">
                                    @forelse ($categories as $category)
                                        <tr class="hover:bg-gray-100">
                                            <td class="p-4 whitespace-nowrap text-gray-900">
                                                <p class="text-sm capitalize">
                                                    {{ $category->name }}
                                                </p>
                                            </td>
                                            <td class="p-4 whitespace-nowrap text-gray-900">
                                                <div>
                                                    <img src="{{ $category->image_path }}" class="w-[100px] border"
                                                        alt="">
                                                </div>
                                            </td>
                                            <td class="p-4 whitespace-nowrap text-gray-900">
                                                <p class="text-sm capitalize">
                                                    products:
                                                    <span class="text-green-600">
                                                        {{ $category->products_count }}
                                                    </span>
                                                </p>
                                            </td>
                                            <td class="p-4 whitespace-nowrap">
                                                <div class="ml-auto flex justify-center items-center text-gray-600">
                                                    <a href="{{ route('restaurant.categories.edit', $category->id) }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                            stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                        </svg>
                                                    </a>
                                                    <span class="mx-2 h-6 w-px bg-slate-400/20"></span>
                                                    <x-delete-modal target="delete-modal-{{ $category->id }}"
                                                        formUrl="{{ route('restaurant.categories.destroy', $category->id) }}"
                                                        modalId="delete-modal-{{ $category->id }}"
                                                        headMsg="Are you sure to delete the category?"
                                                        msg="If the category is deleted, all things related to it will be deleted!" />
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <x-no-data-tr colspan="10" value="no categories categorys right now." />
                                    @endforelse
                                </tbody>
                            </table>
                            <x-paginate :data="$categories" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-restaurant-layout>
