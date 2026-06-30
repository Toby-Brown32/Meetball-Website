@extends('layout')

@section('title', 'Match History')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <x-animated-section :delay="200">
        <div class="w-full bg-gradient-to-br from-gray-800 via-gray-700 to-gray-900 text-white rounded-xl shadow-xl p-6 mb-6 border border-gray-600">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <h3 class="text-2xl font-bold uppercase tracking-wide mb-0 text-[#EAD63D]">
                    Match History
                </h3>
                <form method="GET" action="{{ route('matches.index') }}" class="flex flex-wrap gap-2 items-center">
                    <label for="season_id" class="font-semibold mr-1 text-gray-300">Season:</label>
                    <select name="season_id" id="season_id" onchange="this.form.submit()" class="bg-gray-800 text-white border border-gray-700 rounded-lg px-3 py-2 focus:ring-[#EAD63D] focus:border-[#EAD63D] transition-all">
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
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
            @foreach($matches as $index => $match)
                <div
                    x-data="{ show: false }"
                    x-init="setTimeout(() => show = true, {{ 50 + $index * 40 }})"
                    x-show="show"
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 translate-y-8 scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                    class="bg-gradient-to-br from-gray-800 via-gray-700 to-gray-900 rounded-xl shadow-xl p-6 border border-gray-600 hover:shadow-2xl hover:scale-[1.02] transition-all duration-300 group flex flex-col h-full"
                >
                    <div class="flex-1">
                        <div class="text-slate-400 text-sm mb-4">
                            {{ \Carbon\Carbon::parse($match->match_date)->format('l, M d, Y') }}
                        </div>

                        <div class="inline-block bg-[#EAD63D]/15 text-[#EAD63D] text-xs font-bold px-3 py-1 rounded-full mb-4 uppercase tracking-wide border border-[#EAD63D]/30">
                            {{ $match->season?->name ?? 'No Season' }}
                        </div>

                        <div class="mb-6">
                            <div class="grid grid-cols-2 gap-4 mb-4">
                                <div class="rounded-lg p-4 border" style="background-color:#F51B47; border-color:#ff4a63;">
                                    <div class="text-xs text-white font-bold uppercase tracking-wider mb-1">Salmons</div>
                                    <div class="text-3xl font-bold text-white">{{ $match->salmon_goals ?? 0 }}</div>
                                </div>
                                @if($match->lemon_goals !== null)
                                    <div class="rounded-lg p-4 border" style="background-color:#f5c542; border-color:#f8d96a;">
                                        <div class="text-xs text-[#4a3a12] font-bold uppercase tracking-wider mb-1">Lemons</div>
                                        <div class="text-3xl font-bold text-[#4a3a12]">{{ $match->lemon_goals ?? 0 }}</div>
                                    </div>
                                @else
                                    <div class="bg-sky-800/90 rounded-lg p-4 border border-sky-600/70">
                                        <div class="text-xs text-sky-100 font-bold uppercase tracking-wider mb-1">Les Bleus</div>
                                        <div class="text-3xl font-bold text-sky-50">{{ $match->bleu_goals ?? 0 }}</div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        @if($match->playerOfTheMatch)
                            <div class="mb-4 p-3 bg-sky-700/90 rounded-lg border border-sky-500/70">
                                <div class="text-xs text-sky-100 font-bold uppercase tracking-wider mb-1">
                                    Player of the Match
                                </div>
                                <div class="font-semibold text-sky-50">{{ $match->playerOfTheMatch->forename }} {{ $match->playerOfTheMatch->surname }}</div>
                            </div>
                        @else
                            <div class="mb-4 p-3 min-h-[76px]"></div>
                        @endif

                        <div class="flex items-center justify-between mb-6 text-sm text-slate-400">
                            <span>
                                <strong>{{ $match->players->count() }}</strong> players
                            </span>
                        </div>
                    </div>

                    <a href="{{ route('matches.show', $match) }}" class="mt-auto block w-full text-center px-4 py-3 bg-[#EAD63D] text-[#50482D] font-bold rounded-lg hover:bg-[#50482D] hover:text-[#EAD63D] transition-all duration-300 shadow-lg hover:shadow-[#EAD63D]/20 transform hover:scale-[1.02]">
                        View Details
                    </a>
                </div>
            @endforeach
        </div>

        @if($matches->hasPages())
            <x-animated-section :delay="600">
                <div class="mt-16 flex justify-center">
                    <div class="bg-gradient-to-br from-gray-800 via-gray-700 to-gray-900 rounded-xl p-6 border border-gray-600 shadow-xl">
                        <div class="flex items-center justify-center gap-2">
                            {{ $matches->appends(request()->query())->links() }}
                        </div>
                    </div>
                </div>
            </x-animated-section>
        @endif
    @else
        <x-animated-section :delay="400">
            <div class="bg-gradient-to-br from-gray-800 via-gray-700 to-gray-900 border border-gray-600 rounded-xl p-12 text-center shadow-xl">
                <p class="text-gray-300 font-semibold mb-2 text-lg">No matches found</p>
                <p class="text-gray-500 text-sm">Try adjusting your season filter or check back later</p>
            </div>
        </x-animated-section>
    @endif
</div>
@endsection