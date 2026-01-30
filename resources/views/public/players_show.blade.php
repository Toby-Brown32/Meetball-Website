@extends('layout')

@section('title', $player->forename . ' ' . $player->surname)
@section('content')

@php
    $half = ceil(count($statList) / 2);
    $firstHalf = array_slice($statList, 0, $half);
    $secondHalf = array_slice($statList, $half);
@endphp


<div class="w-full bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 rounded-2xl shadow-xl p-3 sm:p-4 mb-4 border border-gray-700">
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div class="flex items-center gap-3 min-w-0">
            <div class="w-12 h-12 rounded-full bg-[#EAD63D] flex items-center justify-center text-2xl font-extrabold text-gray-900 shadow-lg flex-shrink-0">
                {{ strtoupper(substr($player->forename,0,1)) }}{{ strtoupper(substr($player->surname,0,1)) }}
            </div>
            <h3 class="text-xl sm:text-2xl font-extrabold tracking-tight text-transparent bg-clip-text bg-[#EAD63D] leading-tight">
                {{ $player->forename }} {{ $player->surname }}
            </h3>
        </div>
    </div>

    <form method="GET" action="" class="mt-4 flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
        <div class="flex flex-col gap-3 sm:flex-row sm:items-end">
            <div class="flex flex-col gap-1">
                <label for="season_id" class="font-semibold text-[#EAD63D] text-sm">Season</label>
                <x-season-select :seasons="$seasons" :selected="$seasonId" id="season_id" name="season_id" />
            </div>

            <div class="flex flex-col gap-1">
                <label for="comparePlayer" class="font-semibold text-[#EAD63D] text-sm">Compare</label>
                @php
                    $playerItems = collect($allPlayers)->filter(fn($p) => $p->id !== $player->id)->map(fn($p) => ['value' => (string) $p->id, 'label' => $p->forename . ' ' . $p->surname])->values();
                @endphp
                <x-dropdown name="comparePlayer" :items="$playerItems" :selected="request('comparePlayer')" :placeholder="'Compare player'" width="w-full sm:w-56" showScrollbar="true" />
            </div>
        </div>

        <input type="hidden" name="id" value="{{ $player->id }}" />
    </form>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 w-full items-start justify-center mb-8">
    <div class="grid grid-cols-4 lg:grid-cols-2 gap-2 sm:gap-3 lg:gap-4">
        @foreach($firstHalf as $i => $stat)
            <x-stat-card :label="$stat['label']" :value="$stat['value']" :delay="0" compactOnMobile />
        @endforeach
    </div>

    <div class="flex flex-col items-center w-full">
        <div class="w-full bg-gray-900 rounded-xl p-4 sm:p-6 border border-gray-700">
            <div class="relative w-full h-72 sm:h-80">
                <canvas id="playerComparisonChart" class="absolute inset-0 w-full h-full"></canvas>
            </div>
        </div>


        @vite(['resources/js/playerChart.js'])
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                if (window.renderPlayerComparisonChart) {
                    const ctx = document.getElementById('playerComparisonChart').getContext('2d');
                    const labels = @json(array_column($radarStats, 'label'));
                    const playerData = @json(array_column($radarStats, 'value'));
                    const playerRaw = @json(array_column($radarStats, 'raw'));
                    const datasets = [
                        {
                            label: '{{ $player->forename }} {{ $player->surname }}',
                            data: playerData,
                            rawData: playerRaw,
                            backgroundColor: 'rgba(234, 214, 61, 0.7)',
                            borderColor: 'rgba(234, 214, 61, 1)',
                            borderWidth: 1
                        }
                    ];
                    @if(isset($compareStatList))
                        const compareData = @json(array_column($compareStatList, 'value'));
                        const compareRaw = @json(array_column($compareStatList, 'raw'));
                        datasets.push({
                            label: '{{ $comparePlayer->forename ?? '' }} {{ $comparePlayer->surname ?? '' }}',
                            data: compareData,
                            rawData: compareRaw,
                            backgroundColor: 'rgba(61, 156, 234, 0.7)',
                            borderColor: 'rgba(61, 156, 234, 1)',
                            borderWidth: 1
                        });
                    @endif
                    window.renderPlayerComparisonChart(ctx, labels, datasets);
                }
            });
        </script>

        <x-button-link :href="route('players.index')" class="mt-4 mx-auto w-full flex justify-center" x-data="{ show: false }" x-init="setTimeout(() => show = true, 600)" x-show="show" x-transition:enter="transition ease-out duration-700" x-transition:enter-start="opacity-0 translate-y-8 scale-95" x-transition:enter-end="opacity-100 translate-y-0 scale-100">
            Back to all players
        </x-button-link>
    </div>

    <div class="grid grid-cols-4 lg:grid-cols-2 gap-2 sm:gap-3 lg:gap-4">
        @foreach($secondHalf as $i => $stat)
            <x-stat-card :label="$stat['label']" :value="$stat['value']" :delay="0" compactOnMobile />
        @endforeach
    </div>
</div>


@endsection


