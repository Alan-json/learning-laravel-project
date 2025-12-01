<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add New User
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow rounded">

                <form action="{{ route('users.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label class="block font-medium">Name</label>
                        <input type="text" name="name" 
                               class="w-full border px-3 py-2 rounded" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium">Email</label>
                        <input type="email" name="email" 
                               class="w-full border px-3 py-2 rounded" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium">Password</label>
                        <input type="password" name="password" 
                               class="w-full border px-3 py-2 rounded" required>
                    </div>

                    <button type="submit"
                            class="bg-blue-600 text-white px-4 py-2 rounded" style="color: #000; border: solid 1px;">
                        Save User
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
