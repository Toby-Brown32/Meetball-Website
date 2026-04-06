@extends('layout')

@section('title', 'Match History')

@section('content')
<x-animated-section :delay="200">
        <div class="w-full bg-gradient-to-br from-gray-800 via-gray-700 to-gray-900 text-white rounded-2xl shadow-lg p-6 mb-6 border border-gray-600">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-4">
                <h3 class="text-2xl font-bold capitalize tracking-wide flex items-center gap-2 mb-0">
                    <span class="inline-block w-2 h-8 rounded bg-blue-500"></span>
                    Match History
                </h3>
                <form method="GET" action="{{ route('matches.index') }}" class="flex flex-wrap gap-2 items-center">
                    <label for="season_id" class="font-semibold mr-1">Season:</label>
                    <select name="season_id" id="season_id" onchange="this.form.submit()" class="bg-gray-800 text-white border border-gray-700 rounded-lg px-3 py-2 focus:ring-blue-500 focus:border-blue-500 transition-all">
                        <option value="all" {{ ($selectedSeason ?? 'all') == 'all' ? 'selected' : '' }}>All Seasons</option>
                        @foreach($seasons ?? [] as $season)
                            <option value="{{ $season->id }}" {{ ($selectedSeason ?? 'all') == $season->id ? 'selected' : '' }}>{{ $season->name }}</option>
                        @endforeach
                    </select>
                </form>
            </div>
        </div>
    </x-animated-section>

        @if($matches->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($matches as $index => $match)
                    <div
                        x-data="{ show: false }"
                        x-init="setTimeout(() => show = true, {{ 50 + $index * 40 }})"
                        x-show="show"
                        x-transition:enter="transition ease-out duration-700"
                        x-transition:enter-start="opacity-0 translate-y-8 scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                        class="bg-gradient-to-br from-gray-800 via-gray-700 to-gray-900 rounded-2xl shadow-lg p-6 border border-gray-600 hover:shadow-2xl hover:scale-105 transition-all duration-300 group"
                    >
                        <!-- Date -->
                        <div class="text-slate-400 text-sm mb-4 flex items-center gap-2">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                            </svg>
                            {{ \Carbon\Carbon::parse($match->match_date)->format('l, M d, Y') }}
                        </div>

                        <!-- Season -->
                        <div class="inline-block bg-blue-600/20 text-blue-300 text-xs font-bold px-3 py-1 rounded-full mb-4 uppercase tracking-wide border border-blue-500/30">
                            {{ $match->season?->name ?? 'No Season' }}
                        </div>

                        <!-- Score -->
                        <div class="mb-6">
                            <div class="grid grid-cols-2 gap-4 mb-4">
                                <div class="bg-rose-900/40 rounded-lg p-4 border border-rose-500/50">
                                    <div class="text-xs text-rose-300 font-bold uppercase tracking-wider mb-1">Salmons</div>
                                    <div class="text-3xl font-bold text-rose-300">{{ $match->salmon_goals ?? 0 }}</div>
                                </div>
                                @if($match->lemon_goals !== null)
                                    <div class="bg-yellow-900/40 rounded-lg p-4 border border-yellow-500/50">
                                        <div class="text-xs text-yellow-300 font-bold uppercase tracking-wider mb-1">Lemons</div>
                                        <div class="text-3xl font-bold text-yellow-300">{{ $match->lemon_goals ?? 0 }}</div>
                                    </div>
                                @else
                                    <div class="bg-blue-900/40 rounded-lg p-4 border border-blue-500/50">
                                        <div class="text-xs text-blue-300 font-bold uppercase tracking-wider mb-1">Les Bleus</div>
                                        <div class="text-3xl font-bold text-blue-300">{{ $match->bleu_goals ?? 0 }}</div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- MOTM -->
                        @if($match->playerOfTheMatch)
                            <div class="mb-4 p-3 bg-amber-900/30 rounded-lg border border-amber-500/40">
                                <div class="text-xs text-amber-300 font-bold uppercase tracking-wider mb-1 flex items-center gap-1">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd" />
                                    </svg>
                                    Player of the Match
                                </div>
                                <div class="font-semibold text-amber-200">{{ $match->playerOfTheMatch->forename }} {{ $match->playerOfTheMatch->surname }}</div>
                            </div>
                        @endif

                        <!-- Player Count -->
                        <div class="flex items-center justify-between mb-6 text-sm text-slate-400">
                            <span class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                </svg>
                                <strong>{{ $match->players->count() }}</strong> players
                            </span>
                        </div>

                        <!-- View Details Button -->
                        <a href="{{ route('matches.show', $match) }}" class="block w-full text-center px-4 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-bold rounded-lg hover:from-blue-500 hover:to-blue-600 transition-all duration-300 shadow-lg hover:shadow-blue-500/30 transform hover:scale-105">
                            <span class="flex items-center justify-center gap-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                </svg>
                                View Details
                            </span>
                        </a>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            @if($matches->hasPages())
                <x-animated-section :delay="600">
                    <div class="mt-16 flex justify-center">
                        <div class="bg-gradient-to-br from-gray-800 via-gray-700 to-gray-900 rounded-2xl p-6 border border-gray-600 shadow-xl">
                            <div class="flex items-center justify-center gap-2">
                                {{ $matches->appends(request()->query())->links() }}
                            </div>
                        </div>
                    </div>
                </x-animated-section>
            @endif
        @else
        <x-animated-section :delay="400">
            <div class="bg-gradient-to-br from-gray-800 via-gray-700 to-gray-900 border border-gray-600 rounded-2xl p-12 text-center shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-500 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
                <p class="text-gray-300 font-semibold mb-2 text-lg">No matches found</p>
                <p class="text-gray-500 text-sm">Try adjusting your season filter or check back later</p>
            </div>
        </x-animated-section>
        @endif

@endsection