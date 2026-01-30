@extends('admin_layout')

@section('title', 'Admin New Season')

@section('content')
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    <div class="bg-white/10 rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4">Create New Season</h1>
        <form method="POST" action="{{ route('admin.new_season.create') }}">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium">Season Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 bg-white text-gray-900" required>
                @error('name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="start_date" class="block text-sm font-medium">Start Date</label>
                <input type="date" name="start_date" id="start_date" value="{{ old('start_date') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 bg-white text-gray-900" required>
                @error('start_date')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="end_date" class="block text-sm font-medium">End Date</label>
                <input type="date" name="end_date" id="end_date" value="{{ old('end_date') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 bg-white text-gray-900" required>
                @error('end_date')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="px-4 py-2 bg-yellow-500 text-black rounded hover:bg-yellow-600">
                Create Season
            </button>
        </form>
    </div>
@endsection

@section('footer')
@endsection