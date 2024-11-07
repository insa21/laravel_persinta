<x-app-layout title="Login">
    <x-slot name="heading">Login</x-slot>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">Email</label><br>
            <input type="email" value="{{ old('email') }}" class="border px-4 py-2 rounded-block mt-1" name="email" id="email">
            @error('email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="password">Password</label><br>
            <input type="password" class="border px-4 py-2 rounded-block mt-1" name="password" id="password">
            @error('password')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <x-button>
            Login
        </x-button>
    </form>
</x-app-layout>
