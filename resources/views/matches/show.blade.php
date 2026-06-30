@extends('layout')

@section('title', 'Match Details')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <x-animated-section :delay="200">
        <div class="mb-6">
            <a href="{{ route('matches.index') }}" class="text-[#EAD63D] hover:text-[#EAD63D]/80 transition-colors duration-200 font-semibold">
                Back to Matches
            </a>
        </div>
    </x-animated-section>

    <x-animated-section :delay="400" class="block bg-gradient-to-br from-gray-800 via-gray-700 to-gray-900 rounded-xl p-8 shadow-xl border border-gray-600">
        <div class="text-center mb-8">
            <div class="text-gray-400 text-sm mb-2">
                {{ \Carbon\Carbon::parse($match->match_date)->format('l, F d, Y') }}
            </div>
            <div class="inline-block bg-[#EAD63D]/15 text-[#EAD63D] text-sm font-bold px-4 py-2 rounded-full mb-6 uppercase tracking-wide border border-[#EAD63D]/30">
                {{ $match->season?->name ?? 'No Season' }}
            </div>
            <h1 class="text-4xl md:text-5xl font-extrabold text-[#EAD63D] mb-6">Match Details</h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
            <div class="rounded-xl p-4 border text-center" style="background-color:#F51B47; border-color:#ff4a63;">
                <div class="text-white font-bold text-sm uppercase tracking-wider mb-2">Salmons</div>
                <div class="text-5xl md:text-6xl font-black text-white">{{ $match->salmon_goals ?? 0 }}</div>
            </div>

            <div class="flex items-center justify-center">
                <div class="text-slate-400 font-bold text-lg md:text-xl">VS</div>
            </div>

            @if($match->lemon_goals !== null)
                <div class="rounded-xl p-6 border text-center" style="background-color:#F5C542; border-color:#F8D96A;">
                    <div class="text-[#4A3A12] font-bold text-lg uppercase tracking-wider mb-2">Lemons</div>
                    <div class="text-6xl font-black text-[#4A3A12]">{{ $match->lemon_goals ?? 0 }}</div>
                </div>
            @else
                <div class="bg-sky-800/90 rounded-xl p-6 border border-sky-600/70 text-center">
                    <div class="text-sky-50 font-bold text-lg uppercase tracking-wider mb-2">Les Bleus</div>
                    <div class="text-6xl font-black text-sky-50">{{ $match->bleu_goals ?? 0 }}</div>
                </div>
            @endif
        </div>

        @if($match->playerOfTheMatch)
            <div class="text-center mb-8">
                <div class="bg-sky-700/90 border border-sky-500/70 rounded-xl px-6 py-4">
                    <div class="text-xs text-sky-100 font-bold uppercase tracking-wider">Player of the Match</div>
                    <div class="text-sky-50 font-bold text-lg">{{ $match->playerOfTheMatch->forename }} {{ $match->playerOfTheMatch->surname }}</div>
                </div>
            </div>
        @endif

        @php
            $goalScorers = $match->players->filter(function($player) { return $player->pivot->goals > 0; })->sortByDesc(function($player) { return $player->pivot->goals; });
            $assistProviders = $match->players->filter(function($player) { return $player->pivot->assists > 0; })->sortByDesc(function($player) { return $player->pivot->assists; });
        @endphp

        @if($goalScorers->count() > 0 || $assistProviders->count() > 0)
            <div class="mb-8">
                <h3 class="text-xl font-bold text-white mb-4">
                    Goal Involvements
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @if($goalScorers->count() > 0)
                        <div class="bg-slate-800/80 border border-slate-600/70 rounded-xl p-4">
                            <h4 class="text-[#EAD63D] font-semibold mb-3">
                                Goals
                            </h4>
                            <div class="space-y-2">
                                @foreach($goalScorers as $player)
                                    <div class="flex items-center justify-between rounded-lg px-3 py-2 {{ $player->pivot->team === 'Salmons' ? 'bg-[#F51B47]' : ($player->pivot->team === 'Lemons' ? 'bg-[#F5C542]' : ($player->pivot->team === 'Les Bleus' ? 'bg-sky-700/90' : ($player->pivot->team === 'Greens' ? 'bg-emerald-600/80' : 'bg-slate-700/80'))) }}">
                                        <span class="inline-flex items-center gap-2">
                                            <span class="inline-flex items-center px-2 py-1 rounded-full text-[10px] font-semibold uppercase tracking-wide {{ $player->pivot->team === 'Salmons' ? 'bg-white/20 text-white border border-white/30' : ($player->pivot->team === 'Lemons' ? 'bg-[#4A3A12]/20 text-[#4A3A12] border border-[#4A3A12]/20' : ($player->pivot->team === 'Les Bleus' ? 'bg-sky-50/20 text-sky-50 border border-sky-100/30' : ($player->pivot->team === 'Greens' ? 'bg-emerald-50/20 text-emerald-50 border border-emerald-100/30' : 'bg-slate-100/20 text-slate-100 border border-slate-100/30'))) }}">
                                                {{ $player->pivot->team ?? 'Unknown' }}
                                            </span>
                                            <span class="font-medium {{ $player->pivot->team === 'Salmons' ? 'text-white' : ($player->pivot->team === 'Lemons' ? 'text-[#4A3A12]' : ($player->pivot->team === 'Les Bleus' ? 'text-sky-50' : ($player->pivot->team === 'Greens' ? 'text-emerald-50' : 'text-slate-100'))) }}">{{ $player->forename }} {{ $player->surname }}</span>
                                        </span>
                                        <span class="bg-slate-900/40 text-slate-50 px-2 py-1 rounded-full text-sm font-bold">{{ $player->pivot->goals }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    @if($assistProviders->count() > 0)
                        <div class="bg-slate-800/80 border border-slate-600/70 rounded-xl p-4">
                            <h4 class="text-[#EAD63D] font-semibold mb-3">
                                Assists
                            </h4>
                            <div class="space-y-2">
                                @foreach($assistProviders as $player)
                                    <div class="flex items-center justify-between rounded-lg px-3 py-2 {{ $player->pivot->team === 'Salmons' ? 'bg-[#F51B47]' : ($player->pivot->team === 'Lemons' ? 'bg-[#F5C542]' : ($player->pivot->team === 'Les Bleus' ? 'bg-sky-700/90' : ($player->pivot->team === 'Greens' ? 'bg-emerald-600/80' : 'bg-slate-700/80'))) }}">
                                        <span class="inline-flex items-center gap-2">
                                            <span class="inline-flex items-center px-2 py-1 rounded-full text-[10px] font-semibold uppercase tracking-wide {{ $player->pivot->team === 'Salmons' ? 'bg-white/20 text-white border border-white/30' : ($player->pivot->team === 'Lemons' ? 'bg-[#4A3A12]/20 text-[#4A3A12] border border-[#4A3A12]/20' : ($player->pivot->team === 'Les Bleus' ? 'bg-sky-50/20 text-sky-50 border border-sky-100/30' : ($player->pivot->team === 'Greens' ? 'bg-emerald-50/20 text-emerald-50 border border-emerald-100/30' : 'bg-slate-100/20 text-slate-100 border border-slate-100/30'))) }}">
                                                {{ $player->pivot->team ?? 'Unknown' }}
                                            </span>
                                            <span class="font-medium {{ $player->pivot->team === 'Salmons' ? 'text-white' : ($player->pivot->team === 'Lemons' ? 'text-[#4A3A12]' : ($player->pivot->team === 'Les Bleus' ? 'text-sky-50' : ($player->pivot->team === 'Greens' ? 'text-emerald-50' : 'text-slate-100'))) }}">{{ $player->forename }} {{ $player->surname }}</span>
                                        </span>
                                        <span class="bg-slate-900/40 text-slate-50 px-2 py-1 rounded-full text-sm font-bold">{{ $player->pivot->assists }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        @endif

        @php
            $playedPlayers = $match->players->filter(function($player) { return $player->pivot->played == 1; })->groupBy(function($player) { return $player->pivot->team; });
            $reservePlayers = $match->players->filter(function($player) { return $player->pivot->reserve == 1; });
        @endphp

        <div class="border-t border-gray-600 pt-6">
            <h3 class="text-xl font-bold text-white mb-4">
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
                <div class="bg-slate-800/80 border border-slate-600/70 rounded-xl p-4">
                    <h4 class="text-[#EAD63D] font-semibold mb-3">
                        Reserves ({{ $reservePlayers->count() }})
                    </h4>
                    <div class="flex flex-wrap gap-2">
                        @foreach($reservePlayers as $player)
                            <span class="px-3 py-1 rounded-full text-sm font-medium {{ $player->pivot->team === 'Salmons' ? 'bg-[#F51B47] text-white' : ($player->pivot->team === 'Lemons' ? 'bg-[#F5C542] text-[#4A3A12]' : ($player->pivot->team === 'Les Bleus' ? 'bg-sky-700/90 text-sky-50' : ($player->pivot->team === 'Greens' ? 'bg-emerald-600/80 text-emerald-50' : 'bg-slate-700/80 text-slate-100'))) }}">{{ $player->forename }} {{ $player->surname }}</span>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </x-animated-section>
</div>
@endsection