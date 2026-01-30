@extends('layout')

@section('title', 'Dashboard')

@section('content')
    <div class="max-w-4xl mx-auto py-12">
        <x-animated-section :delay="200">
            <h1 class="text-4xl md:text-5xl font-extrabold text-[#EAD63D] mb-4 text-center">Welcome to Meetball</h1>
        </x-animated-section>
        <x-animated-section :delay="400">
            <div class="flex justify-center gap-4 mb-6">
                <img src="{{ asset('images/meetball_logo.png') }}" alt="Meetball Logo" class="h-20 w-auto rounded-xl shadow-lg">
            </div>
        </x-animated-section>
        <x-animated-section :delay="600">
            <div class="grid grid-cols-3 gap-2 md:gap-8 mb-12">
                <div class="bg-gradient-to-br from-gray-800 via-gray-700 to-gray-900 rounded-xl p-3 md:p-8 shadow-xl border border-gray-600 hover:scale-105 transition-transform min-w-0">
                    <h3 class="text-xs sm:text-sm md:text-xl font-bold text-gray-400 mb-1 md:mb-2">Current Season</h3>
                    <p class="text-base sm:text-lg md:text-3xl font-extrabold text-white truncate">{{ $currentSeason }}</p>
                </div>
                <div class="bg-gradient-to-br from-gray-800 via-gray-700 to-gray-900 rounded-xl p-3 md:p-8 shadow-xl border border-gray-600 hover:scale-105 transition-transform min-w-0">
                    <h3 class="text-xs sm:text-sm md:text-xl font-bold text-gray-400 mb-1 md:mb-2">Matches Played</h3>
                    <p class="text-base sm:text-lg md:text-3xl font-extrabold text-white">{{ $matchesPlayed }}</p>
                </div>
                <div class="bg-gradient-to-br from-gray-800 via-gray-700 to-gray-900 rounded-xl p-3 md:p-8 shadow-xl border border-gray-600 hover:scale-105 transition-transform min-w-0">
                    <h3 class="text-xs sm:text-sm md:text-xl font-bold text-gray-400 mb-1 md:mb-2">Goals Scored</h3>
                    <p class="text-base sm:text-lg md:text-3xl font-extrabold text-white">{{ $goalsScored }}</p>
                </div>
            </div>
        </x-animated-section>
        <x-animated-section :delay="800">
            <div class="text-center mt-8 mb-12">
                <a href="{{ route('leaderboard.index') }}" class="inline-block px-8 py-4 bg-[#EAD63D] text-[#50482D] font-bold rounded-full shadow-lg hover:bg-[#50482D] hover:text-[#EAD63D] transition-all text-lg">View Leaderboards</a>
            </div>
        </x-animated-section>
        <x-animated-section :delay="1000">
            <div class="mb-10 flex flex-col items-center justify-center text-center">
                <p class="text-lg md:text-xl text-white/90 font-medium mb-6">
                    Meetball was founded in October 2013 as a place for digital animals to meet, switch off, and play football.
                </p>
                <p class="text-base md:text-lg text-white/80 mb-4">
                    It’s a community for people working in the creative agency world across BCP (Bournemouth, Christchurch and Poole). Designers, developers, copywriters, strategists, account teams, alongside client-side marketers, digital marketers, and software engineers and more.
                </p>
                <p class="text-base md:text-lg text-white/80 mb-4">
                    Every Thursday evening all year round we meet at Littledown astroturf for a one hour friendly 8-a-side game. Meetball was set up to create an inclusive, welcoming space where people from our industry (and adjacent client and business roles) can meet like-minded peers, make new connections, and build genuine relationships beyond the day job.
                </p>
                <p class="text-base md:text-lg text-white/80 mb-4">
                    Our approach to the beautiful game is enjoyment over winning. We play without referees, relying on mutual respect, honesty, and kindness to keep games fair and fun. Teams are randomly drawn each week from everyone available to play, keeping things fresh, social, and inclusive.
                </p>
                <p class="text-base md:text-lg text-white/80 mb-6">
                    If that sounds like your kind of football, and your kind of people, we’d love to hear from you.
                </p>
                <div class="flex flex-col md:flex-row gap-4 justify-center items-center mt-4">
                    <a href="tel:07866744207" class="px-6 py-4 bg-[#EAD63D] text-[#50482D] font-semibold text-lg rounded-full shadow-lg hover:bg-[#50482D] hover:text-[#EAD63D] transition">Contact Andy Brown: 07866 744207</a>
                    <a href="mailto:andy@3dfd.com" class="px-6 py-4 bg-[#EAD63D] text-[#50482D] font-semibold text-lg rounded-full shadow-lg hover:bg-[#50482D] hover:text-[#EAD63D] transition">Email: andy@3dfd.com</a>
                </div>
            </div>
        </x-animated-section>
    </div>
@endsection

@section('footer')
@endsection