@extends('admin_layout')

@section('title', 'Admin Add Player')

@section('content')
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white/10 rounded-lg p-6">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-bold">Add New Player</h1>
            <a href="{{ route('admin.players.index') }}" class="px-3 py-2 rounded bg-white/10 hover:bg-white/20">
                Back to Players
            </a>
        </div>

        <form method="POST" action="{{ route('admin.players.store') }}">
            @csrf

            <div class="mb-4">
                <label for="forename" class="block text-sm font-medium">Forename</label>
                <input type="text" name="forename" id="forename" value="{{ old('forename') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 bg-white text-gray-900" required>
                @error('forename')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="surname" class="block text-sm font-medium">Surname</label>
                <input type="text" name="surname" id="surname" value="{{ old('surname') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 bg-white text-gray-900" required>
                @error('surname')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="nickname" class="block text-sm font-medium">Nickname</label>
                <input type="text" name="nickname" id="nickname" value="{{ old('nickname') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 bg-white text-gray-900">
                @error('nickname')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="player_level" class="block text-sm font-medium">Player Level</label>
                <select name="player_level" id="player_level" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 bg-white text-gray-900" required>
                    @for($i = 1; $i <= 8; $i++)
                        <option value="{{ $i }}" {{ old('player_level', '1') == (string) $i ? 'selected' : '' }}>{{ $i }}</option>
                    @endfor
                </select>
                @error('player_level')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="missed_games" class="block text-sm font-medium">Missed Games</label>
                <input type="number" name="missed_games" id="missed_games" min="0" value="{{ old('missed_games', 0) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 bg-white text-gray-900">
                @error('missed_games')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="px-4 py-2 bg-yellow-500 text-black rounded hover:bg-yellow-600">
                Add Player
            </button>
        </form>
    </div>
@endsection

@section('footer')
@endsection
