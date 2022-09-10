<x-app-layout title="Home">
    <div class="w-full sm:max-w-3xl mx-auto mt-5 px-4 sm:px-6">

        <div class="my-8 flex flex-col sm:justify-center items-center">
            <p>Join competitions and get hired by promising companies 🚀</p>
        </div>
        <div>
            @foreach ($challenges as $challenge)
                <div class="w-full sm:max-w-lg mx-auto bg-white p-5 shadow-sm mb-5">
                    <div class="flex flex-col items-center justify-center">
                        <a href="{{ route('user.challenges.index', $challenge->slug) }}" class="text-center">
                            <h3 class="text-4xl">{{ $challenge->title }}</h3>
                            <p class="text-gray-600 text-sm">{{ $challenge->short_desc }}</p>
                        </a>
                        <p class="text-gray-600 text-sm my-5">--- Job Opportunities ---</p>
                        <div class="w-[100px] h-[100px]">
                            {{-- <a href="{{ route('user.company.index', $challenge->company->slug) }}"> --}}
                            <img src="{{ $challenge->company->image_path }}" class="rounded-md shadow-sm"
                                onerror="{{ asset('images/default-user.jpg') }}">
                            {{-- </a> --}}
                        </div>
                        <div class="flex justify-between items-center space-x-20 mt-10">
                            <a class="bg-black py-2 px-4 text-center text-white"
                                href="{{ route('user.challenges.index', $challenge->slug) }}">Show</a>
                            @if ($challenge->daysLeft())
                                <span class="text-green-600">{{ $challenge->daysLeft() }}</span>
                            @else
                                <span class="text-red-600">Closed</span>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @guest
            <div class="text-center my-6">
                <p class="text-gray-600 text-sm">
                    Not ready for a challenge?
                </p>
                <a href="{{ route('user.register') }}" class="text-blue-500">Create a Talent Profile</a>
            </div>
        @endguest
    </div>
</x-app-layout>
