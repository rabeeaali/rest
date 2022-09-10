<x-app-admin-layout title="Profile">
    <div class="w-full md:w-1/2 mx-auto">
        <form action="{{ route('admin.profile.update') }}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <p class="card-header-title">Update your personal information</p>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="label">name</label>
                        <input type="text" name="name" value="{{ admin()->name }}" required class="input">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="label">E-mail</label>
                        <input type="email" name="email" value="{{ admin()->email }}" required class="input">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="label">Password</label>
                        <input type="password" name="password" class="input">
                        <span class="text-gray-400 text-xs">Leave it blank if you don't want to change a word</span>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="button black">Update</button>
                </div>
            </div>
        </form>
    </div>
</x-app-admin-layout>
