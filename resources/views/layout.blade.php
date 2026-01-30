<!DOCTYPE html>
<html lang="en" x-data="{ mobileOpen: false }" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@hasSection('title') Meetball - @yield('title') @else Meetball @endif</title>

    <link rel="icon" type="image/png" href="{{ asset('images/meetball_logo.png') }}">

    {{-- Tailwind --}}
    @vite('resources/css/app.css')

    {{-- Alpine --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="min-h-full bg-gray-900 text-white flex flex-col">

    <header class="border-b border-white/20 bg-[#EAD63D] text-[#50482D] w-full">
        @php
            $navBase = 'inline-flex items-center rounded-lg px-3 py-2 text-sm font-medium transition-colors';
            $navActive = 'bg-[#50482D]/15 text-[#3F3923] ring-1 ring-[#50482D]/20';
            $navInactive = 'text-[#50482D] hover:bg-[#50482D]/10 hover:text-[#3F3923]';

            $mobileNavBase = 'block w-full rounded-lg px-3 py-2 text-sm font-medium transition-colors';
            $mobileNavActive = 'bg-[#50482D]/15 text-[#3F3923] ring-1 ring-[#50482D]/20';
            $mobileNavInactive = 'text-[#50482D] hover:bg-[#50482D]/10 hover:text-[#3F3923]';
        @endphp
        <div class="w-full px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between w-full relative">

                <div class="flex items-center absolute left-0 top-0 h-16 pl-4">
                    <img src="{{ asset('images/meetball_logo.png') }}" alt="Meetball Logo" class="h-16 w-auto mr-2">
                    <a href="{{ route('dashboard') }}" class="text-xl font-bold tracking-wide">
                        Meetball
                    </a>
                </div>

                <nav class="hidden md:flex items-center gap-2 absolute left-1/2 top-0 h-16 -translate-x-1/2">
                    <a href="{{ route('dashboard') }}" class="{{ $navBase }} {{ request()->routeIs('dashboard') ? $navActive : $navInactive }}">
                        Dashboard
                    </a>
                    <a href="{{ route('leaderboard.index') }}" class="{{ $navBase }} {{ request()->routeIs('leaderboard.*') ? $navActive : $navInactive }}">
                        Leaderboards
                    </a>
                    <a href="{{ route('league.table') }}" class="{{ $navBase }} {{ request()->routeIs('league.table') ? $navActive : $navInactive }}">
                        League Table
                    </a>
                    <a href="{{ route('players.index') }}" class="{{ $navBase }} {{ request()->routeIs('players.*') ? $navActive : $navInactive }}">
                        Players
                    </a>
                </nav>

                <div class="hidden md:flex absolute right-0 top-0 h-16 pr-4 items-center">
                    <a href="{{ route('feedback') }}" class="{{ $navBase }} {{ request()->routeIs('feedback*') ? $navActive : $navInactive }}">
                        Feedback
                    </a>
                </div>

                <button
                    @click="mobileOpen = !mobileOpen"
                    class="md:hidden inline-flex items-center justify-center rounded-lg p-2 hover:bg-[#50482D]/10 transition z-50 focus:outline-none focus:ring-2 focus:ring-[#50482D]"
                    aria-label="Open Menu"
                    style="position: absolute; right: 1rem; top: 0.5rem;"
                >
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-8 w-8"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

            </div>
        </div>

        <div
            x-show="mobileOpen"
            x-transition
            @click.outside="mobileOpen = false"
            class="md:hidden border-t border-[#50482D]/20 bg-[#EAD63D] z-40 absolute top-16 left-0 w-full shadow-xl"
            style="min-height: 0;"
        >
            <nav class="px-4 py-4 space-y-2">
                <a href="{{ route('dashboard') }}" @click="mobileOpen = false" class="{{ $mobileNavBase }} {{ request()->routeIs('dashboard') ? $mobileNavActive : $mobileNavInactive }}">
                    Dashboard
                </a>
                <a href="{{ route('leaderboard.index') }}" @click="mobileOpen = false" class="{{ $mobileNavBase }} {{ request()->routeIs('leaderboard.*') ? $mobileNavActive : $mobileNavInactive }}">
                    Leaderboards
                </a>
                <a href="{{ route('league.table') }}" @click="mobileOpen = false" class="{{ $mobileNavBase }} {{ request()->routeIs('league.table') ? $mobileNavActive : $mobileNavInactive }}">
                    League Table
                </a>
                <a href="{{ route('players.index') }}" @click="mobileOpen = false" class="{{ $mobileNavBase }} {{ request()->routeIs('players.*') ? $mobileNavActive : $mobileNavInactive }}">
                    Players
                </a>
                <a href="{{ route('feedback') }}" @click="mobileOpen = false" class="{{ $mobileNavBase }} {{ request()->routeIs('feedback*') ? $mobileNavActive : $mobileNavInactive }}">
                    Feedback
                </a>
            </nav>
        </div>
    </header>

    <main class="flex-1 w-full">
        <div class="w-full py-8">
            @yield('content')
        </div>
    </main>

    <footer class="border-t border-white/20 w-full">
        <div class="w-full px-4 sm:px-6 lg:px-8 py-6 text-sm flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="w-full md:w-auto text-center md:text-left text-white">&copy; {{ date('Y') }} Meetball</div>
            <div class="hidden md:flex flex-1"></div>
            <div class="flex items-center gap-3 w-full md:w-auto justify-center md:justify-end text-white">
                <span class="font-semibold">Toby Brown</span>
                <a href="https://www.linkedin.com/in/toby-brown-bournemouth" target="_blank" rel="noopener" aria-label="LinkedIn" class="hover:text-[#EAD63D] transition">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 inline"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-10h3v10zm-1.5-11.268c-.966 0-1.75-.784-1.75-1.75s.784-1.75 1.75-1.75 1.75.784 1.75 1.75-.784 1.75-1.75 1.75zm15.5 11.268h-3v-5.604c0-1.337-.025-3.063-1.868-3.063-1.868 0-2.154 1.459-2.154 2.967v5.7h-3v-10h2.881v1.367h.041c.401-.761 1.381-1.563 2.845-1.563 3.043 0 3.604 2.004 3.604 4.609v5.587z"/></svg>
                </a>
                <a href="https://github.com/Toby-Brown32" target="_blank" rel="noopener" aria-label="GitHub" class="hover:text-[#EAD63D] transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6 inline"><path d="M12 0c-6.627 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.387.6.113.82-.258.82-.577 0-.285-.011-1.04-.017-2.04-3.338.726-4.042-1.61-4.042-1.61-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.085 1.84 1.237 1.84 1.237 1.07 1.834 2.809 1.304 3.495.997.108-.775.418-1.305.762-1.605-2.665-.304-5.466-1.332-5.466-5.931 0-1.31.469-2.381 1.236-3.221-.124-.303-.535-1.523.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.984-.399 3.003-.404 1.018.005 2.046.138 3.006.404 2.291-1.553 3.297-1.23 3.297-1.23.653 1.653.242 2.873.119 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.803 5.625-5.475 5.921.43.371.823 1.102.823 2.222 0 1.606-.015 2.898-.015 3.293 0 .322.218.694.825.576 4.765-1.589 8.199-6.085 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                </a>
            </div>
        </div>
    </footer>

</body>
</html>
