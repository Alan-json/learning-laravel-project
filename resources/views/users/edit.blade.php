<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit User
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-xl mx-auto bg-white p-6 shadow rounded">
            <form method="POST" action="{{ route('users.update', $user->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block mb-1">Name</label>
                    <input type="text" name="name" value="{{ $user->name }}"
                           class="w-full border rounded px-3 py-2">
                </div>

                <div class="mb-4">
                    <label class="block mb-1">Email</label>
                    <input type="email" name="email" value="{{ $user->email }}"
                           class="w-full border rounded px-3 py-2">
                </div>

                <button class="bg-blue-600 text-white px-4 py-2 rounded" style="color: #000; border: solid 1px;">
                    Update User
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
