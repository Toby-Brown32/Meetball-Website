@extends('admin_layout')

@section('title', 'Admin Edit Player')

@section('content')
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    <div class="bg-white/10 rounded-lg p-6">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-bold">Edit Player</h1>
            <a href="{{ route('admin.players.index') }}" class="px-3 py-2 rounded bg-white/10 hover:bg-white/20">
                Back to Players
            </a>
        </div>

        <form method="POST" action="{{ route('admin.players.update', $player) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="forename" class="block text-sm font-medium">Forename</label>
                <input type="text" name="forename" id="forename" value="{{ old('forename', $player->forename) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 bg-white text-gray-900" required>
                @error('forename')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="surname" class="block text-sm font-medium">Surname</label>
                <input type="text" name="surname" id="surname" value="{{ old('surname', $player->surname) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 bg-white text-gray-900" required>
                @error('surname')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="nickname" class="block text-sm font-medium">Nickname</label>
                <input type="text" name="nickname" id="nickname" value="{{ old('nickname', $player->nickname) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 bg-white text-gray-900">
                @error('nickname')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="player_level" class="block text-sm font-medium">Player Level</label>
                <select name="player_level" id="player_level" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 bg-white text-gray-900" required>
                    @for($i = 1; $i <= 8; $i++)
                        <option value="{{ $i }}" {{ old('player_level', (string) $player->player_level) == (string) $i ? 'selected' : '' }}>{{ $i }}</option>
                    @endfor
                </select>
                @error('player_level')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="px-4 py-2 bg-yellow-500 text-black rounded hover:bg-yellow-600">
                Save Changes
            </button>
        </form>

        <div class="mt-4">
            <form method="POST" action="{{ route('admin.players.destroy', $player) }}" onsubmit="return confirm('Delete this player?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 bg-red-600/80 rounded hover:bg-red-600">
                    Delete
                </button>
            </form>
        </div>
    </div>
@endsection

@section('footer')
@endsection
