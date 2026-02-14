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
                    Meetball is a community for people working in and around the creative agency world across BCP (Bournemouth, Christchurch and Poole).
                </p>
                <p class="text-base md:text-lg text-white/80 mb-4">
                    Founded in October 2013, it’s a place for digital animals to switch off, meet like-minded people, and play football.
                </p>
                <p class="text-base md:text-lg text-white/80 mb-4">
                    Every Thursday evening, all year round, we meet at Littledown astroturf for a friendly one-hour, 8-a-side game. Designers, copywriters, strategists, account teams, client-side marketers, software engineers and plenty more are welcome.
                </p>
                <p class="text-base md:text-lg text-white/80 mb-4">
                    We play for enjoyment, not results (but we do track some stats for fun). There are no referees, teams are randomly drawn each week, and games are built on trust, respect and kindness. The result is football that’s social, inclusive, and genuinely good fun.
                </p>
                <p class="text-base md:text-lg text-white/80 mb-6">
                    If that sounds like your kind of football, and your kind of people, you’ll fit right in.
                </p>
                <div class="flex flex-col md:flex-row gap-4 justify-center items-center mt-4">
                    <a
                        href="#"
                        x-data="{
                            rev: '70244766870',
                            get raw() { return this.rev.split('').reverse().join(''); },
                            get pretty() {
                                const n = this.raw;
                                return n.length === 11 ? (n.slice(0, 5) + ' ' + n.slice(5)) : n;
                            },
                            get href() { return 'tel:' + this.raw; },
                        }"
                        :href="href"
                        :aria-label="'Call Andy Brown: ' + pretty"
                        class="px-6 py-4 bg-[#EAD63D] text-[#50482D] font-semibold text-lg rounded-full shadow-lg hover:bg-[#50482D] hover:text-[#EAD63D] transition"
                        x-text="'Contact Andy Brown: ' + pretty"
                    ></a>

                    <a
                        href="#"
                        x-data="{
                            rev: 'moc.dfd3@ydna',
                            get email() { return this.rev.split('').reverse().join(''); },
                            get href() { return 'mailto:' + this.email; },
                        }"
                        :href="href"
                        :aria-label="'Email Andy Brown: ' + email"
                        class="px-6 py-4 bg-[#EAD63D] text-[#50482D] font-semibold text-lg rounded-full shadow-lg hover:bg-[#50482D] hover:text-[#EAD63D] transition"
                        x-text="'Email: ' + email"
                    ></a>
                </div>
                <noscript>
                    <div class="mt-4 text-sm text-white/70">
                        Enable JavaScript to view contact details.
                    </div>
                </noscript>
            </div>
        </x-animated-section>
    </div>
@endsection

@section('footer')
@endsection