<x-guest-admin-layout>
    <div id="page-container" class="flex flex-col mx-auto w-full min-h-screen bg-gray-100">
        <main id="page-content" class="flex flex-auto flex-col max-w-full">
            <div
                class="min-h-screen flex items-center justify-center relative overflow-hidden max-w-10xl mx-auto p-4 lg:p-8 w-full">
                <div class="py-6 lg:py-0 w-full md:w-8/12 lg:w-6/12 xl:w-4/12">
                    <center class="mb-5">
                        <x-logo url="/" />
                    </center>
                    <div class="flex flex-col rounded shadow-sm bg-white overflow-hidden">
                        <div class="p-3 grow w-full">
                            <div class="sm:p-4 lg:px-4 lg:py-4">
                                <x-auth-validation-errors class="bg-red-500 p-4 shadow-sm rounded" :errors="$errors" />
                                <form id="form-data" action="{{ route('admin.login') }}" method="POST"
                                    class="space-y-6">
                                    @csrf
                                    <div class="space-y-1">
                                        <label for="email">Email</label>
                                        <input class="input" type="email" name="email" id="email"
                                            placeholder="Enter your email" required value="admin@gmail.com" />
                                    </div>
                                    <div class="space-y-1">
                                        <label for="password">Password</label>
                                        <input class="input" type="password" name="password" value="123456" required id="password"
                                            placeholder="Enter your password" />
                                    </div>
                                    <div>
                                        <x-button class="w-full" value="Enter" />
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-guest-admin-layout>
