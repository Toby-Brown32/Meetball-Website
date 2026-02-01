@extends('admin_layout')

@section('title', 'Admin Players')

@section('content')
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    <div class="flex items-center justify-between mb-4">
        <h1 class="text-2xl font-bold">Players</h1>
        <a href="{{ route('admin.players.create') }}" class="px-4 py-2 bg-yellow-500 text-black rounded hover:bg-yellow-600">
            Add Player
        </a>
    </div>

    <div class="bg-white/10 rounded-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-white/10">
                <thead class="bg-white/5">
                    <tr>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Name</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Nickname</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Level</th>
                        <th class="px-4 py-3 text-right text-sm font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/10">
                    @forelse($players as $player)
                        <tr>
                            <td class="px-4 py-3">
                                {{ $player->forename }} {{ $player->surname }}
                            </td>
                            <td class="px-4 py-3">
                                {{ $player->nickname ?? '—' }}
                            </td>
                            <td class="px-4 py-3">
                                {{ $player->player_level }}
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex items-center justify-end gap-3">
                                    <a href="{{ route('admin.players.edit', $player) }}" class="px-3 py-1 rounded bg-white/10 hover:bg-white/20">
                                        Edit
                                    </a>
                                    <form method="POST" action="{{ route('admin.players.destroy', $player) }}" onsubmit="return confirm('Delete this player?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-3 py-1 rounded bg-red-600/80 hover:bg-red-600">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="px-4 py-6 text-center text-white/70" colspan="4">
                                No players found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('footer')
@endsection
