@extends('layout')

@section('title', 'Match Details')

@section('content')
<!-- Back Button -->
<x-animated-section :delay="200">
    <div class="mb-6">
        <a href="{{ route('matches.index') }}" class="inline-flex items-center gap-2 text-blue-400 hover:text-blue-300 transition-colors duration-200 font-semibold">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back to Matches
        </a>
    </div>
</x-animated-section>

    <x-animated-section :delay="400" class="bg-gradient-to-br from-gray-800 via-gray-700 to-gray-900 rounded-2xl p-8 shadow-lg border border-gray-600">
        <!-- Match Header -->
        <div class="text-center mb-8">
            <div class="text-gray-400 text-sm mb-2">
                {{ \Carbon\Carbon::parse($match->match_date)->format('l, F d, Y') }}
            </div>
            <div class="inline-block bg-blue-600/20 text-blue-300 text-sm font-bold px-4 py-2 rounded-full mb-6 uppercase tracking-wide border border-blue-500/30">
                    {{ $match->season?->name ?? 'No Season' }}
                </div>
                <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6">Match Details</h1>
            </div>

            <!-- Score Display -->
            <div class="grid grid-cols-3 gap-4 mb-8">
                <!-- Salmons -->
                <div class="bg-rose-900/30 rounded-xl p-4 border border-rose-500/40 text-center">
                    <div class="text-rose-300 font-bold text-sm uppercase tracking-wider mb-2">Salmons</div>
                    <div class="text-5xl md:text-6xl font-black text-rose-300">{{ $match->salmon_goals ?? 0 }}</div>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="text-slate-400 font-bold text-lg md:text-xl">VS</div>
                </div>

                <!-- Opponent -->
                @if($match->lemon_goals !== null)
                    <div class="bg-yellow-900/30 rounded-xl p-6 border border-yellow-500/40 text-center">
                        <div class="text-yellow-300 font-bold text-lg uppercase tracking-wider mb-2">Lemons</div>
                        <div class="text-6xl font-black text-yellow-300">{{ $match->lemon_goals ?? 0 }}</div>
                    </div>
                @else
                    <div class="bg-blue-900/30 rounded-xl p-6 border border-blue-500/40 text-center">
                        <div class="text-blue-300 font-bold text-lg uppercase tracking-wider mb-2">Les Bleus</div>
                        <div class="text-6xl font-black text-blue-300">{{ $match->bleu_goals ?? 0 }}</div>
                    </div>
                @endif
            </div>

            <!-- Player of the Match -->
            @if($match->playerOfTheMatch)
                <div class="text-center mb-8">
                    <div class="inline-flex items-center gap-3 bg-amber-900/30 border border-amber-500/40 rounded-xl px-6 py-4">
                        <svg class="w-6 h-6 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd" />
                        </svg>
                        <div>
                            <div class="text-xs text-amber-300 font-bold uppercase tracking-wider">Player of the Match</div>
                            <div class="text-amber-200 font-bold text-lg">{{ $match->playerOfTheMatch->forename }} {{ $match->playerOfTheMatch->surname }}</div>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Goal Involvements -->
            @php
                $goalScorers = $match->players->filter(function($player) { return $player->pivot->goals > 0; })->sortByDesc(function($player) { return $player->pivot->goals; });
                $assistProviders = $match->players->filter(function($player) { return $player->pivot->assists > 0; })->sortByDesc(function($player) { return $player->pivot->assists; });
            @endphp

                            @if($goalScorers->count() > 0 || $assistProviders->count() > 0)
                                <div class="mb-8">
                                    <h3 class="text-xl font-bold text-white mb-4 flex items-center gap-2">
                                        <svg class="w-5 h-5 text-[#EAD63D]" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        Goal Involvements
                                    </h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        @if($goalScorers->count() > 0)
                                            <div class="bg-gradient-to-br from-red-900/20 to-red-800/20 border border-red-500/30 rounded-xl p-4">
                                                <h4 class="text-red-300 font-semibold mb-3 flex items-center gap-2">
                                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 011.414 0l4-4z" clip-rule="evenodd" />
                                                    </svg>
                                                    Goals
                                                </h4>
                                                <div class="space-y-2">
                                                    @foreach($goalScorers as $player)
                                                        <div class="flex items-center justify-between rounded-lg px-3 py-2 {{ $player->pivot->team === 'Salmons' ? 'bg-rose-900/10' : ($player->pivot->team === 'Lemons' ? 'bg-yellow-900/10' : ($player->pivot->team === 'Les Bleus' ? 'bg-blue-900/10' : ($player->pivot->team === 'Greens' ? 'bg-emerald-900/10' : 'bg-gray-900/10'))) }}">
                                                            <span class="inline-flex items-center gap-2">
                                                                <span class="inline-flex items-center px-2 py-1 rounded-full text-[10px] font-semibold uppercase tracking-wide {{ $player->pivot->team === 'Salmons' ? 'bg-rose-500/20 text-rose-200 border border-rose-500/30' : ($player->pivot->team === 'Lemons' ? 'bg-yellow-500/20 text-yellow-200 border border-yellow-500/30' : ($player->pivot->team === 'Les Bleus' ? 'bg-blue-500/20 text-blue-200 border border-blue-500/30' : ($player->pivot->team === 'Greens' ? 'bg-emerald-500/20 text-emerald-200 border border-emerald-500/30' : 'bg-gray-500/20 text-gray-200 border border-gray-500/30'))) }}">
                                                                    {{ $player->pivot->team ?? 'Unknown' }}
                                                                </span>
                                                                <span class="font-medium {{ $player->pivot->team === 'Salmons' ? 'text-rose-200' : ($player->pivot->team === 'Lemons' ? 'text-yellow-200' : ($player->pivot->team === 'Les Bleus' ? 'text-blue-200' : ($player->pivot->team === 'Greens' ? 'text-emerald-200' : 'text-gray-200'))) }}">{{ $player->forename }} {{ $player->surname }}</span>
                                                            </span>
                                                            <span class="bg-red-600/30 text-red-300 px-2 py-1 rounded-full text-sm font-bold">{{ $player->pivot->goals }}</span>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif

                                        @if($assistProviders->count() > 0)
                                            <div class="bg-gradient-to-br from-blue-900/20 to-blue-800/20 border border-blue-500/30 rounded-xl p-4">
                                                <h4 class="text-blue-300 font-semibold mb-3 flex items-center gap-2">
                                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 011.414 0l4-4z" clip-rule="evenodd" />
                                                    </svg>
                                                    Assists
                                                </h4>
                                                <div class="space-y-2">
                                                    @foreach($assistProviders as $player)
                                                        <div class="flex items-center justify-between rounded-lg px-3 py-2 {{ $player->pivot->team === 'Salmons' ? 'bg-rose-900/10' : ($player->pivot->team === 'Lemons' ? 'bg-yellow-900/10' : ($player->pivot->team === 'Les Bleus' ? 'bg-blue-900/10' : ($player->pivot->team === 'Greens' ? 'bg-emerald-900/10' : 'bg-gray-900/10'))) }}">
                                                            <span class="inline-flex items-center gap-2">
                                                                <span class="inline-flex items-center px-2 py-1 rounded-full text-[10px] font-semibold uppercase tracking-wide {{ $player->pivot->team === 'Salmons' ? 'bg-rose-500/20 text-rose-200 border border-rose-500/30' : ($player->pivot->team === 'Lemons' ? 'bg-yellow-500/20 text-yellow-200 border border-yellow-500/30' : ($player->pivot->team === 'Les Bleus' ? 'bg-blue-500/20 text-blue-200 border border-blue-500/30' : ($player->pivot->team === 'Greens' ? 'bg-emerald-500/20 text-emerald-200 border border-emerald-500/30' : 'bg-gray-500/20 text-gray-200 border border-gray-500/30'))) }}">
                                                                    {{ $player->pivot->team ?? 'Unknown' }}
                                                                </span>
                                                                <span class="font-medium {{ $player->pivot->team === 'Salmons' ? 'text-rose-200' : ($player->pivot->team === 'Lemons' ? 'text-yellow-200' : ($player->pivot->team === 'Les Bleus' ? 'text-blue-200' : ($player->pivot->team === 'Greens' ? 'text-emerald-200' : 'text-gray-200'))) }}">{{ $player->forename }} {{ $player->surname }}</span>
                                                            </span>
                                                            <span class="bg-blue-600/30 text-blue-300 px-2 py-1 rounded-full text-sm font-bold">{{ $player->pivot->assists }}</span>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endif

                            <!-- Players -->
                            @php
                                $playedPlayers = $match->players->filter(function($player) { return $player->pivot->played == 1; })->groupBy(function($player) { return $player->pivot->team; });
                                $reservePlayers = $match->players->filter(function($player) { return $player->pivot->reserve == 1; });
                            @endphp

                            <div class="border-t border-gray-600 pt-6">
                                <h3 class="text-xl font-bold text-white mb-4 flex items-center gap-2">
                                    <svg class="w-5 h-5 text-[#EAD63D]" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                    </svg>
                                    Squad ({{ $match->players->count() }} players)
                                </h3>

                                @if($playedPlayers->count() > 0)
                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                                        @foreach($playedPlayers as $team => $players)
                                            <div class="bg-gradient-to-br from-gray-700/50 to-gray-800/50 border border-gray-500/30 rounded-xl p-4">
                                                <h4 class="text-center text-sm font-bold text-white mb-3 uppercase tracking-wider
                                                    @if($team === 'Lemons') text-yellow-300
                                                    @elseif($team === 'Greens') text-emerald-300
                                                    @elseif($team === 'Salmons') text-rose-300
                                                    @elseif($team === 'Les Bleus') text-blue-300
                                                    @else text-gray-300 @endif">
                                                    {{ $team }}
                                                </h4>
                                                <div class="space-y-1">
                                                    @foreach($players as $player)
                                                        <div class="text-sm text-gray-300 text-center">{{ $player->forename }} {{ $player->surname }}</div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                                @if($reservePlayers->count() > 0)
                                    <div class="bg-gradient-to-br from-orange-900/20 to-orange-800/20 border border-orange-500/30 rounded-xl p-4">
                                        <h4 class="text-orange-300 font-semibold mb-3 flex items-center gap-2">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                            </svg>
                                            Reserves ({{ $reservePlayers->count() }})
                                        </h4>
                                        <div class="flex flex-wrap gap-2">
                                            @foreach($reservePlayers as $player)
                                                <span class="bg-orange-900/30 text-orange-200 px-3 py-1 rounded-full text-sm">{{ $player->forename }} {{ $player->surname }}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </x-animated-section>
@endsection