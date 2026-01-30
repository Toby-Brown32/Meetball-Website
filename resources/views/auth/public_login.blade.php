@extends('layout')

@section('title', 'Login')

@section('content')
<div class="flex flex-col items-center min-h-screen">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded shadow text-gray-900">
        <h2 class="text-2xl font-bold text-center">Login</h2>
        <form method="POST" action="{{ route('public.login.store') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-900">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="w-full px-3 py-2 border rounded">
                @error('email')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
                <input id="password" type="password" name="password" required class="w-full px-3 py-2 border rounded">
                @error('password')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="w-full py-2 px-4 bg-yellow-500 text-black rounded hover:bg-yellow-600">Login</button>
        </form>
    </div>
</div>
@endsection
