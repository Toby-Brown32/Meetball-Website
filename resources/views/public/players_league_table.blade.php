@extends('layout')

@section('title', 'Players League Table')
@section('content')
<x-animated-section :delay="200">
    <div class="w-full bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 text-white rounded-2xl shadow-xl p-6 mb-6 border border-gray-700">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-4">
            <h3 class="text-2xl font-bold capitalize tracking-wide flex items-center gap-2 mb-0">
                <span class="inline-block w-2 h-8 rounded bg-blue-500"></span>
                Players League Table
            </h3>
            <form method="GET" action="" class="flex flex-wrap gap-2 items-center">
                <label for="type" class="font-semibold mr-1">Table:</label>
                <select name="type" id="type" onchange="this.form.submit()" class="bg-gray-800 text-white border border-gray-700 rounded-lg px-3 py-2 focus:ring-blue-500 focus:border-blue-500 transition-all">
                    <option value="teams" {{ (request('type', $type ?? 'players') == 'teams') ? 'selected' : '' }}>Teams</option>
                    <option value="players" {{ (request('type', $type ?? 'players') == 'players') ? 'selected' : '' }}>Players</option>
                </select>
                <label for="season_id" class="font-semibold ml-4 mr-1">Season:</label>
                <select name="season_id" id="season_id" onchange="this.form.submit()" class="bg-gray-800 text-white border border-gray-700 rounded-lg px-3 py-2 focus:ring-blue-500 focus:border-blue-500 transition-all">
                    <option value="all" {{ $season == 'all' ? 'selected' : '' }}>All Seasons</option>
                    @foreach($seasons as $s)
                        <option value="{{ $s->id }}" {{ $s->id == $season ? 'selected' : '' }}>{{ $s->name }}</option>
                    @endforeach
                </select>
            </form>
        </div>
        <x-data-table :rows="$table" :columns="$columns" highlight-first="true" />
    </div>
</x-animated-section>
@endsection
