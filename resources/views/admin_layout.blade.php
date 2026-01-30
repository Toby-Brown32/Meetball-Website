<!DOCTYPE html>
<html lang="en" x-data="{ mobileOpen: false }" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Football Stats')</title>

    {{-- Tailwind --}}
    @vite('resources/css/app.css')

    {{-- Alpine --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="min-h-full bg-gray-800 text-white flex flex-col">

    <header class="border-b border-white/20 bg-[#EAD63D] text-[#50482D]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">

                <div class="flex items-center">
                    <img src="{{ asset('images/meetball_logo.png') }}" alt="Meetball Logo" class="h-16 w-auto mr-2">
                    <a href="{{ route('admin.weekly_draw') }}" class="text-xl font-bold tracking-wide">
                        Meetball Admin
                    </a>
                </div>

                <nav class="hidden md:flex items-right space-x-8 font-medium">
                    <a href="{{ route('admin.weekly_draw') }}" class="hover:text-[#3F3923] transition">
                        Weekly Draw
                    </a>
                    <a href="{{ route('admin.stats_inputter') }}" class="hover:text-[#3F3923] transition">
                        Stats Inputter
                    </a>
                    <a href="{{ route('admin.add_players') }}" class="hover:text-[#3F3923] transition">
                        Add Players
                    </a>
                    <a href="{{ route('admin.new_season') }}" class="hover:text-[#3F3923] transition">
                        New Season
                    </a>
                    <a href="{{ route('admin.match_played') }}" class="hover:text-[#3F3923] transition">
                        Match Played
                    </a>
                </nav>

                <form method="POST" action="{{ route('admin.logout') }}" class="hidden md:block">
                    @csrf
                    <button type="submit" class="px-4 py-2 rounded-lg bg-[#50482D] text-[#EAD63D] font-semibold hover:bg-[#3F3923] transition">
                        Logout
                    </button>
                </form>

                <button
                    @click="mobileOpen = !mobileOpen"
                    class="md:hidden inline-flex items-center justify-center rounded-lg p-2 hover:bg-[#50482D]/10 transition"
                    aria-label="Open Menu"
                >
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-6 w-6"
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
            class="md:hidden border-t border-[#50482D]/20 bg-[#EAD63D]"
        >
            <nav class="px-4 py-4 space-y-3 font-medium">
                <a href="{{ route('admin.weekly_draw') }}" class="block hover:text-[#3F3923] transition">
                    Weekly Draw
                </a>
                <a href="{{ route('admin.stats_inputter') }}" class="block hover:text-[#3F3923] transition">
                    Stats Inputter
                </a>
                <a href="{{ route('admin.add_players') }}" class="block hover:text-[#3F3923] transition">
                    Add Players
                </a>
                <a href="{{ route('admin.new_season') }}" class="block hover:text-[#3F3923] transition">
                    New Season
                </a>
                <a href="{{ route('admin.match_played') }}" class="block hover:text-[#3F3923] transition">
                    Match Played
                </a>

                <div class="pt-3">
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" class="block w-full text-center px-4 py-2 rounded-lg bg-[#50482D] text-[#EAD63D] font-semibold hover:bg-[#3F3923] transition">
                            Logout
                        </button>
                    </form>
                </div>
            </nav>
        </div>
    </header>

    <main class="flex-1">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            @yield('content')
        </div>
    </main>

    <footer class="border-t border-white/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 text-sm text-center">
            @yield('footer')
        </div>
    </footer>

</body>
</html>
