@extends('layout')

@section('title', 'All Players')
@section('content')
<div class="w-full min-h-[800px] bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 text-white rounded-3xl shadow-2xl p-8 mb-10 border border-gray-700">
    <h3 class="text-3xl font-extrabold mb-8 tracking-tight text-center text-transparent bg-clip-text bg-[#EAD63D] animate-gradient">All Players</h3>
    <ul class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 lg:grid-cols-6 xl:grid-cols-8 2xl:grid-cols-9 gap-3 sm:gap-5">
        @foreach($players as $i => $player)
            <li
                x-data="{ show: false }"
                x-init="setTimeout(() => show = true, {{ 50 + $i * 40 }})"
                x-show="show"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 translate-y-8 scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                class="bg-gradient-to-br from-gray-800 via-gray-700 to-gray-900 rounded-2xl shadow-lg px-2 py-2 sm:px-3 sm:py-3 flex flex-col items-center border border-gray-600 hover:shadow-2xl hover:scale-105 transition-all duration-300 cursor-pointer group min-w-0"
            >
                <a href="{{ route('players.show', $player->id) }}" class="w-full flex flex-col items-center">
                    <div class="w-7 h-7 sm:w-10 sm:h-10 rounded-full bg-[#EAD63D] mb-1 sm:mb-2 flex items-center justify-center text-xs sm:text-base font-bold text-gray-900 leading-none group-hover:scale-110 transition-transform">
                        {{ strtoupper(substr($player->forename,0,1)) }}{{ strtoupper(substr($player->surname,0,1)) }}
                    </div>
                    <div class="text-sm sm:text-base font-semibold text-white group-hover:text-[#EAD63D] transition-colors text-center truncate w-full leading-tight">
                        {{ $player->forename }} {{ $player->surname }}
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
