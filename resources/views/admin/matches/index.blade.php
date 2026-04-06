@extends('admin_layout')

@section('title', 'Admin Matches')

@section('content')
<div class="mb-8">
	<h1 class="text-3xl font-bold mb-6">Match History</h1>

	<div class="bg-white/10 rounded-lg p-6 mb-6">
		<form method="GET" action="{{ route('admin.matches.index') }}" class="flex gap-4 items-end flex-wrap">
			<div>
				<label for="season_id" class="block text-sm font-medium mb-2">Filter by Season:</label>
				<select name="season_id" id="season_id" class="px-4 py-2 border border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent bg-gray-800 text-white hover:border-gray-500 transition">
					<option value="">All Seasons</option>
					@foreach($seasons as $season)
						<option value="{{ $season->id }}" {{ $seasonId == $season->id ? 'selected' : '' }}>
							{{ $season->name }}
						</option>
					@endforeach
				</select>
			</div>
			<button type="submit" class="px-6 py-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 font-semibold transition">Filter</button>
			@if($seasonId)
				<a href="{{ route('admin.matches.index') }}" class="px-6 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 font-semibold transition">Clear</a>
			@endif
		</form>
	</div>
</div>

@if($matches->count() > 0)
	<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
		@foreach($matches as $match)
			<div class="bg-gradient-to-br from-gray-800 to-gray-700 rounded-lg p-6 border border-amber-500/50 hover:border-amber-400/60 transition hover:shadow-lg hover:shadow-amber-500/30">
				<!-- Date -->
				<div class="text-gray-300 text-sm mb-4">
					{{ \Carbon\Carbon::parse($match->match_date)->format('l, M d, Y') }}
				</div>

				<!-- Season -->
				<div class="inline-block bg-yellow-700 text-yellow-50 text-xs font-bold px-3 py-1 rounded-full mb-4 uppercase tracking-wide">
					{{ $match->season?->name ?? 'No Season' }}
				</div>

				<!-- Score -->
				<div class="mb-6">
					<div class="grid grid-cols-2 gap-4 mb-4">
						<div class="bg-rose-900/60 rounded-lg p-4 border border-rose-500/70">
							<div class="text-xs text-rose-200 font-bold uppercase tracking-wider">Salmons</div>
							<div class="text-3xl font-bold text-rose-200">{{ $match->salmon_goals ?? 0 }}</div>
						</div>
						@if($match->lemon_goals !== null)
							<div class="bg-yellow-900/60 rounded-lg p-4 border border-yellow-500/70">
								<div class="text-xs text-yellow-200 font-bold uppercase tracking-wider">Lemons</div>
								<div class="text-3xl font-bold text-yellow-200">{{ $match->lemon_goals ?? 0 }}</div>
							</div>
						@else
							<div class="bg-sky-900/60 rounded-lg p-4 border border-sky-500/70">
								<div class="text-xs text-sky-200 font-bold uppercase tracking-wider">Les Bleus</div>
								<div class="text-3xl font-bold text-sky-200">{{ $match->bleu_goals ?? 0 }}</div>
							</div>
						@endif
					</div>
				</div>

				<!-- MOTM -->
				@if($match->player_of_match_id)
					<div class="mb-4 p-3 bg-amber-900/60 rounded-lg border border-amber-500/70">
						<div class="text-xs text-amber-200 font-bold uppercase tracking-wider mb-1">Player of the Match</div>
						<div class="font-semibold text-amber-100">{{ $match->playerOfTheMatch?->forename }} {{ $match->playerOfTheMatch?->surname }}</div>
					</div>
				@endif

				<!-- Player Count -->
				<div class="flex items-center justify-between mb-4 text-sm text-gray-300">
					<span>
						<strong>{{ \DB::table('match_player')->where('match_id', $match->id)->count() }}</strong> players
					</span>
				</div>

				<!-- Edit Button -->
				<a href="{{ route('admin.matches.edit', $match) }}" class="block w-full text-center px-4 py-3 bg-gradient-to-r from-yellow-600 to-yellow-700 text-gray-900 font-bold rounded-lg hover:from-yellow-500 hover:to-yellow-600 transition shadow-lg hover:shadow-yellow-500/30">
					Edit Match
				</a>
			</div>
		@endforeach
	</div>
@else
	<div class="bg-gradient-to-r from-yellow-900/30 to-yellow-900/10 border border-yellow-700/50 rounded-lg p-8 text-center">
		<svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-yellow-600 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
		</svg>
		<p class="text-yellow-400 font-semibold mb-2">No matches found</p>
		<p class="text-yellow-600 text-sm">Try adjusting your season filter or create a new match</p>
	</div>
@endif

@endsection
