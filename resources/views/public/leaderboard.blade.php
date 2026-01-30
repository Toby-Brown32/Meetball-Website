@extends('layout')

@section('title', 'Leaderboards')
@section('content')
<x-animated-section :delay="200">
    <div class="w-full bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 rounded-2xl shadow-xl p-6 mb-8 border border-gray-700">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <h2 class="text-2xl font-bold capitalize tracking-wide flex items-center gap-2 mb-0">
                <span class="inline-block w-2 h-8 rounded bg-blue-500"></span>
                Season Leaderboards
            </h2>
            <form method="GET" action="{{ route('leaderboard.index') }}" class="flex flex-wrap gap-2 items-center ml-auto">
                <label for="season_id" class="font-semibold mr-1">Season:</label>
                <x-dropdown name="season_id" :items="$seasonItems ?? []" :selected="$selectedSeason ?? request('season_id', $season)" placeholder="All Seasons" width="w-48" showAll="true" />
            </form>
        </div>
    </div>
</x-animated-section>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($stats as $key => $players)
        <x-animated-section :delay="600">
            <div class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 text-white rounded-2xl shadow-xl p-4 mb-4 border border-gray-700 hover:shadow-2xl transition-shadow duration-300 text-sm">
                <h3 class="text-lg font-bold mb-2 capitalize tracking-wide flex items-center gap-2">
                    <span class="inline-block w-2 h-6 rounded bg-blue-500"></span>
                    @if($key === 'team_goals_for')
                        Team Goals For
                    @elseif($key === 'matches_played')
                        Matches Played
                    @elseif($key === 'played_pct')
                        Played Percentage
                    @elseif($key === 'player_of_match')
                        Player of the Match
                    @elseif($key === 'goal_difference')
                        Goal Difference
                    @else
                        {{ str_replace('_', ' ', $key) }}
                    @endif
                </h3>
                <ol class="space-y-1">
                    @foreach($players as $i => $player)
                        <li class="flex items-center gap-2 px-2 py-1 rounded bg-gray-800/80 hover:bg-blue-900/60 transition-colors duration-200 {{ $i === 0 ? 'ring-2 ring-blue-400' : '' }}">
                            <span class="text-base font-semibold w-5 text-center {{ $i === 0 ? 'text-yellow-300' : 'text-gray-400' }}">{{ $i+1 }}</span>
                            <span class="flex-1 font-medium truncate">{{ $player->forename }} {{ $player->surname }}</span>
                            <span class="text-right">
                                @if($key === 'matches_played')
                                    <span class="font-bold text-blue-300">{{ $player->played }}</span>
                                    <span class="ml-2 text-xs text-gray-300">({{ $player->played_pct }}%)</span>
                                @elseif($key === 'team_goals_for')
                                    <span class="font-bold text-green-300">{{ $player->team_goals_for }}</span>
                                @elseif($key === 'goal_difference')
                                    <span class="font-bold">{{ $player->team_goals_for - $player->team_goals_against }}</span>
                                @else
                                    <span class="font-bold">{{ $player->$key }}</span>
                                @endif
                            </span>
                        </li>
                    @endforeach
                </ol>
                <x-button-link :href="route('leaderboard.stat', ['stat' => $key, 'season_id' => $season])" class="mt-2 text-xs">View Full Table &rarr;</x-button-link>
            </div>
        </x-animated-section>
    @endforeach
</div>
@endsection
