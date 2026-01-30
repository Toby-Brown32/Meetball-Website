@extends('admin_layout')

@section('title', 'Admin Add Players')

@section('content')
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    <div class="bg-white/10 rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4">Add New Player</h1>
        <form method="POST" action="{{ route('admin.add_players.store') }}">
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
            <div class="mb-4">
                <label for="player_level" class="block text-sm font-medium">Player Level</label>
                <select name="player_level" id="player_level" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 bg-white text-gray-900" required>
                    <option value="1" {{ old('player_level') == '1' ? 'selected' : '' }}>1</option>
                    <option value="2" {{ old('player_level') == '2' ? 'selected' : '' }}>2</option>
                    <option value="3" {{ old('player_level') == '3' ? 'selected' : '' }}>3</option>
                    <option value="4" {{ old('player_level') == '4' ? 'selected' : '' }}>4</option>
                    <option value="5" {{ old('player_level') == '5' ? 'selected' : '' }}>5</option>
                    <option value="6" {{ old('player_level') == '6' ? 'selected' : '' }}>6</option>
                    <option value="7" {{ old('player_level') == '7' ? 'selected' : '' }}>7</option>
                    <option value="8" {{ old('player_level') == '8' ? 'selected' : '' }}>8</option>
                </select>
                @error('player_level')
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