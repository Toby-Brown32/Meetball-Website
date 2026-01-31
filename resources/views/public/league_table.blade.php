@extends('layout')

@section('title', 'League Table')
@section('content')
<x-animated-section :delay="200">
    <div class="w-full bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 text-white rounded-2xl shadow-xl p-6 mb-6 border border-gray-700">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-4">
            <h3 class="text-2xl font-bold capitalize tracking-wide flex items-center gap-2 mb-0">
                <span class="inline-block w-2 h-8 rounded bg-blue-500"></span>
                @if(request('type', $type ?? 'teams') == 'players')
                    Players League Table
                @else
                    League Table
                @endif
            </h3>
            <form method="GET" action="" class="flex flex-col sm:flex-row sm:flex-wrap gap-3 sm:gap-2 sm:items-center">
                <div class="flex items-center gap-2 w-full sm:w-auto">
                    <label for="type" class="font-semibold whitespace-nowrap">Table:</label>
                    <select name="type" id="type" onchange="this.form.submit()" class="w-full sm:w-auto bg-gray-800 text-white border border-gray-700 rounded-lg px-3 py-2 focus:ring-blue-500 focus:border-blue-500 transition-all">
                        <option value="teams" {{ (request('type', $type ?? 'teams') == 'teams') ? 'selected' : '' }}>Teams</option>
                        <option value="players" {{ (request('type', $type ?? 'teams') == 'players') ? 'selected' : '' }}>Players</option>
                    </select>
                </div>

                <div class="flex items-center gap-2 w-full sm:w-auto">
                    <label for="season_id" class="font-semibold whitespace-nowrap">Season:</label>
                    <select name="season_id" id="season_id" onchange="this.form.submit()" class="w-full sm:w-auto bg-gray-800 text-white border border-gray-700 rounded-lg px-3 py-2 focus:ring-blue-500 focus:border-blue-500 transition-all">
                        <option value="all" {{ (request('season_id', $season) == 'all') ? 'selected' : '' }}>All Seasons</option>
                        @foreach($seasons as $s)
                            <option value="{{ $s->id }}" {{ $s->id == $season ? 'selected' : '' }}>{{ $s->name }}</option>
                        @endforeach
                    </select>
                </div>
            </form>
        </div>
        <x-data-table :rows="$table" :columns="$columns" highlight-first="true" />
    </div>
</x-animated-section>
@endsection
