@extends('admin_layout')

@section('title', 'Admin Match Played')

@section('content')
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    <div class="bg-white/10 rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4">Add New Match</h1>
        <form method="POST" action="{{ route('admin.match_played.store') }}">
            @csrf
            <div class="mb-4">
                <label for="season_id" class="block text-sm font-medium">Season</label>
                <select name="season_id" id="season_id" class="mt-1 block w-full px-3 py-2 border border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 bg-gray-800 text-white" required>
                    <option value="">Select Season</option>
                    @foreach($seasons as $season)
                        <option value="{{ $season->id }}" {{ old('season_id') == $season->id ? 'selected' : '' }}>{{ $season->name }}</option>
                    @endforeach
                </select>
                @error('season_id')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <!-- Game Type field removed -->
            </div>
            <div class="mb-4">
                <label for="match_date" class="block text-sm font-medium">Match Date</label>
                <input type="date" name="match_date" id="match_date" value="{{ old('match_date') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 bg-white text-gray-900" required>
                @error('match_date')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="salmon_goals" class="block text-sm font-medium">Salmon Goals</label>
                <input type="number" name="salmon_goals" id="salmon_goals" value="{{ old('salmon_goals') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 bg-white text-gray-900" min="0">
                @error('salmon_goals')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="bleu_goals" class="block text-sm font-medium">Bleu Goals</label>
                <input type="number" name="bleu_goals" id="bleu_goals" value="{{ old('bleu_goals') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 bg-white text-gray-900" min="0">
                @error('bleu_goals')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="lemon_goals" class="block text-sm font-medium">Lemon Goals</label>
                <input type="number" name="lemon_goals" id="lemon_goals" value="{{ old('lemon_goals') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 bg-white text-gray-900" min="0">
                @error('lemon_goals')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="green_goals" class="block text-sm font-medium">Green Goals</label>
                <input type="number" name="green_goals" id="green_goals" value="{{ old('green_goals') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 bg-white text-gray-900" min="0">
                @error('green_goals')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="player_of_match_id" class="block text-sm font-medium">Player of the Match</label>
                <select name="player_of_match_id" id="player_of_match_id" class="mt-1 block w-full px-3 py-2 border border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 bg-gray-800 text-white">
                    <option value="">Select Player</option>
                    @foreach($players as $player)
                        <option value="{{ $player->id }}" {{ old('player_of_match_id') == $player->id ? 'selected' : '' }}>{{ $player->forename }} {{ $player->surname }} {{ $player->nickname ? '(' . $player->nickname . ')' : '' }}</option>
                    @endforeach
                </select>
                @error('player_of_match_id')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="px-4 py-2 bg-yellow-500 text-black rounded hover:bg-yellow-600">
                Add Match
            </button>
        </form>
    </div>
@endsection

@section('footer')
@endsection