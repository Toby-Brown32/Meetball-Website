@extends('admin_layout')

@section('title', 'Edit Match')

@section('content')

<div class="mb-6">
	<a href="{{ route('admin.matches.index') }}" class="text-yellow-500 hover:text-yellow-400">← Back to Matches</a>
</div>

<div class="bg-white/10 rounded-lg p-6">
	<h1 class="text-2xl font-bold mb-4">Edit Match</h1>

	@php
		$currentOpponent = $match->lemon_goals !== null ? 'Lemons' : 'Les Bleus';
		$currentOpponentGoals = $match->lemon_goals !== null ? $match->lemon_goals : ($match->bleu_goals ?? 0);
	@endphp

	<div class="mb-6 text-gray-300">
		<p><strong>Date:</strong> {{ \Carbon\Carbon::parse($match->match_date)->format('F d, Y') }}</p>
		<p><strong>Season:</strong> {{ $match->season?->name ?? 'No Season' }}</p>
		<p><strong>Score:</strong>
			<span class="text-pink-600">Salmons {{ $match->salmon_goals ?? 0 }}</span>
			-
			<span class="text-{{ $currentOpponent === 'Lemons' ? 'yellow' : 'blue' }}-600">
				{{ $currentOpponent }} {{ $currentOpponentGoals }}
			</span>
		</p>
	</div>

	<form method="POST" action="{{ route('admin.matches.update', $match) }}">
		@csrf
		@method('PUT')

		<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
			<div>
				<label for="salmon_goals" class="block text-sm font-medium text-gray-200 mb-1">
					Salmons Goals
				</label>

				<input
					type="number"
					name="score[salmon_goals]"
					id="salmon_goals"
					min="0"
					value="{{ old('score.salmon_goals', $match->salmon_goals ?? 0) }}"
					class="w-full px-3 py-2 rounded-lg bg-gray-800 text-white border border-gray-700 focus:outline-none focus:ring-yellow-500 focus:border-yellow-500"
				>
			</div>

			<div>
				<label for="opponent" class="block text-sm font-medium text-gray-200 mb-1">
					Opponent
				</label>

				<select
					name="score[opponent]"
					id="opponent"
					class="w-full px-3 py-2 rounded-lg bg-gray-800 text-white border border-gray-700 focus:outline-none focus:ring-yellow-500 focus:border-yellow-500"
				>
					<option value="Les Bleus" {{ old('score.opponent', $currentOpponent) == 'Les Bleus' ? 'selected' : '' }}>
						Les Bleus
					</option>

					<option value="Lemons" {{ old('score.opponent', $currentOpponent) == 'Lemons' ? 'selected' : '' }}>
						Lemons
					</option>
				</select>
			</div>

			<div>
				<label for="opponent_goals" class="block text-sm font-medium text-gray-200 mb-1">
					Opponent Goals
				</label>

				<input
					type="number"
					name="score[opponent_goals]"
					id="opponent_goals"
					min="0"
					value="{{ old('score.opponent_goals', $currentOpponentGoals) }}"
					class="w-full px-3 py-2 rounded-lg bg-gray-800 text-white border border-gray-700 focus:outline-none focus:ring-yellow-500 focus:border-yellow-500"
				>
			</div>
		</div>

		<h2 class="text-xl font-semibold mb-4">Players</h2>

		<div class="overflow-x-auto">
			<table class="min-w-full bg-white/10 rounded-lg" id="match-stats-table">
				<thead>
					<tr>
						<th class="px-2 py-1">Select</th>
						<th class="px-2 py-1">Name</th>
						<th class="px-2 py-1">Team</th>
						<th class="px-2 py-1">Played</th>
						<th class="px-2 py-1">Reserve</th>
						<th class="px-2 py-1">Goals</th>
						<th class="px-2 py-1">Assists</th>
						<th class="px-2 py-1">Player of the Match</th>
					</tr>
				</thead>

				<tbody>
					@foreach($players as $player)
						@php
							$mp = $matchPlayers[$player->id] ?? null
						@endphp

						<tr>
							<td class="px-2 py-1 text-center">
								<input
									type="checkbox"
									name="selected[]"
									value="{{ $player->id }}"
									class="select-player-checkbox"
									{{ $mp ? 'checked' : '' }}
								>
							</td>

							<td class="px-2 py-1">
								{{ $player->forename }}
								{{ $player->surname }}
								{{ $player->nickname ? '(' . $player->nickname . ')' : '' }}
							</td>

							<td class="px-2 py-1">
								<select
									name="players[{{ $player->id }}][team]"
									class="border border-gray-700 rounded px-2 py-1 team-select bg-gray-800 text-white"
								>
									<option value="">Team</option>

									<option value="Les Bleus" {{ $mp?->team == 'Les Bleus' ? 'selected' : '' }}>
										Les Bleus
									</option>

									<option value="Salmons" {{ $mp?->team == 'Salmons' ? 'selected' : '' }}>
										Salmons
									</option>

									<option value="Lemons" {{ $mp?->team == 'Lemons' ? 'selected' : '' }}>
										Lemons
									</option>

									<option value="Greens" {{ $mp?->team == 'Greens' ? 'selected' : '' }}>
										Greens
									</option>
								</select>
							</td>

							<td class="px-2 py-1 text-center">
								<input
									type="checkbox"
									name="players[{{ $player->id }}][played]"
									value="1"
									class="played-checkbox"
									{{ $mp?->played ? 'checked' : '' }}
								>
							</td>

							<td class="px-2 py-1 text-center">
								<input
									type="checkbox"
									name="players[{{ $player->id }}][reserve]"
									value="1"
									class="reserve-checkbox"
									{{ $mp?->reserve ? 'checked' : '' }}
								>
							</td>

							<td class="px-2 py-1">
								<input
									type="number"
									name="players[{{ $player->id }}][goals]"
									min="0"
									class="border border-gray-700 rounded px-2 py-1 w-16 goals-input bg-gray-800 text-white"
									value="{{ $mp?->goals ?? '' }}"
								>
							</td>

							<td class="px-2 py-1">
								<input
									type="number"
									name="players[{{ $player->id }}][assists]"
									min="0"
									class="border border-gray-700 rounded px-2 py-1 w-16 assists-input bg-gray-800 text-white"
									value="{{ $mp?->assists ?? '' }}"
								>
							</td>

							<td class="px-2 py-1 text-center">
								<input
									type="radio"
									name="player_of_match_id"
									value="{{ $player->id }}"
									class="motm-radio"
									{{ (old('player_of_match_id', $match->player_of_match_id) == $player->id || (!$match->player_of_match_id && $mp?->player_of_match)) ? 'checked' : '' }}
								>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		<div class="mt-6 flex flex-col md:flex-row items-stretch md:items-center justify-between gap-4">
			<div class="flex gap-4">
				<button
					type="submit"
					class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"
				>
					Save Changes
				</button>

				<a
					href="{{ route('admin.matches.index') }}"
					class="px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-700"
				>
					Cancel
				</a>
			</div>
		</div>
	</form>

	<div class="mt-6 text-right">
		<form
			method="POST"
			action="{{ route('admin.matches.destroy', $match) }}"
			onsubmit="return confirm('Delete this match and all player stats?');"
		>
			@csrf
			@method('DELETE')

			<button
				type="submit"
				class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700"
			>
				Delete Match
			</button>
		</form>
	</div>
</div>

@endsection