@extends('layout')

@section('title', 'Full Leaderboard')
@section('content')
<x-animated-section :delay="200">
    <div class="w-full bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 text-white rounded-2xl shadow-xl p-6 mb-6 border border-gray-700">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-4">
            <h3 class="text-2xl font-bold capitalize tracking-wide flex items-center gap-2 mb-0">
                <span class="inline-block w-2 h-8 rounded bg-blue-500"></span>
                Full Table: {{ str_replace('_', ' ', $stat) }}
            </h3>
            <form method="GET" action="{{ route('leaderboard.stat', $stat) }}" class="flex flex-wrap gap-2 items-center">
                <label for="stat" class="font-semibold mr-1">Stat:</label>
                <x-dropdown name="stat" :items="$statItems" :selected="$stat" placeholder="Choose stat" width="w-56" showAll="true" />
                <label for="season_id" class="font-semibold ml-4 mr-1">Season:</label>
                <x-dropdown name="season_id" :items="$seasonItems ?? []" :selected="$selectedSeason ?? request('season_id', $season)" placeholder="All Seasons" width="w-48" showAll="true" />
            </form>
        </div>
        <x-data-table :rows="$players" :columns="$columns" highlight-first="true" />
    </div>
</x-animated-section>
<x-button-link :href="route('leaderboard.index', ['season_id' => $season])" class="mt-6">&larr; Back to Leaderboards</x-button-link>
@endsection
