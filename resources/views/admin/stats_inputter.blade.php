@extends('admin_layout')

@section('title', 'Admin Stats Inputter')

@section('content')

	<div class="bg-white/10 rounded-lg p-6">
		<h1 class="text-2xl font-bold mb-4">Match Player Stats Input</h1>
		<form method="POST" action="{{ route('admin.stats_inputter.store') }}">
			@csrf
			<div class="mb-4">
				<label for="match_id" class="block text-sm font-medium">Select Match</label>
				<select name="match_id" id="match_id" class="mt-1 block w-full px-3 py-2 border border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 bg-gray-800 text-white" required>
					<option value="">Select Match</option>
					@foreach($matches as $match)
						<option value="{{ $match->id }}" {{ old('match_id') == $match->id ? 'selected' : '' }}>
							{{ $match->season->name ?? 'No Season' }} | {{ $match->match_date }}
						</option>
					@endforeach
				</select>
				@error('match_id')
					<p class="mt-2 text-sm text-red-600">{{ $message }}</p>
				@enderror
			</div>
			<h2 class="text-xl font-semibold mb-2">Players</h2>
			<div class="overflow-x-auto">
				<table class="min-w-full bg-white/10 rounded-lg" id="stats-table">
					<thead>
						<tr>
		                            <th class="px-2 py-1">Select</th>
                            <th class="px-2 py-1">Name</th>
							<th class="px-2 py-1">
								Team<br>
								<span id="bleusGoals" class="font-bold text-blue-600">0</span> / 
								<span id="salmonsGoals" class="font-bold text-pink-600">0</span> / 
								<span id="lemonsGoals" class="font-bold text-yellow-500">0</span> / 
								<span id="greensGoals" class="font-bold text-green-600">0</span>
							</th>
							<th class="px-2 py-1">
								Played<br>
								<span id="playedCount" class="font-bold text-yellow-600">0</span>
							</th>
							<th class="px-2 py-1">
								Reserve<br>
								<span id="reserveCount" class="font-bold text-yellow-600">0</span>
							</th>
							<th class="px-2 py-1">
								Goals<br>
								<span id="goalsTotal" class="font-bold text-yellow-600">0</span>
							</th>
							<th class="px-2 py-1">
								Assists<br>
								<span id="assistsTotal" class="font-bold text-yellow-600">0</span>
							</th>
							<th class="px-2 py-1">
								Man of Match<br>
								<span id="motmCount" class="font-bold text-yellow-600">0</span>
							</th>
						</tr>
					</thead>
					<tbody>
						@foreach($players as $player)
						<tr>
							<td class="px-2 py-1 text-center">
								<input type="checkbox" name="selected[]" value="{{ $player->id }}" class="select-player-checkbox" {{ in_array($player->id, old('selected', [])) ? 'checked' : '' }}>
							</td>
							<td class="px-2 py-1">{{ $player->forename }} {{ $player->surname }} {{ $player->nickname ? '(' . $player->nickname . ')' : '' }}</td>
							<td class="px-2 py-1">
								<select name="players[{{ $player->id }}][team]" class="border border-gray-700 rounded px-2 py-1 team-select bg-gray-800 text-white">
									<option value="">Team</option>
									<option value="Les Bleus" {{ old('players.' . $player->id . '.team') == 'Les Bleus' ? 'selected' : '' }}>Les Bleus</option>
									<option value="Salmons" {{ old('players.' . $player->id . '.team') == 'Salmons' ? 'selected' : '' }}>Salmons</option>
									<option value="Lemons" {{ old('players.' . $player->id . '.team') == 'Lemons' ? 'selected' : '' }}>Lemons</option>
									<option value="Greens" {{ old('players.' . $player->id . '.team') == 'Greens' ? 'selected' : '' }}>Greens</option>
								</select>
								@error('players.' . $player->id . '.team')
									<p class="mt-2 text-sm text-red-600">{{ $message }}</p>
								@enderror
							</td>
							<td class="px-2 py-1 text-center">
								<input type="checkbox" name="players[{{ $player->id }}][played]" value="1" class="played-checkbox" {{ old('players.' . $player->id . '.played') ? 'checked' : '' }}>
								@error('players.' . $player->id . '.played')
									<p class="mt-2 text-sm text-red-600">{{ $message }}</p>
								@enderror
							</td>
							<td class="px-2 py-1 text-center">
								<input type="checkbox" name="players[{{ $player->id }}][reserve]" value="1" class="reserve-checkbox" {{ old('players.' . $player->id . '.reserve') ? 'checked' : '' }}>
							</td>
							<td class="px-2 py-1">
								<input type="number" name="players[{{ $player->id }}][goals]" min="0" class="border border-gray-700 rounded px-2 py-1 w-16 goals-input bg-gray-800 text-white" value="{{ old('players.' . $player->id . '.goals') }}">
							</td>
							<td class="px-2 py-1">
								<input type="number" name="players[{{ $player->id }}][assists]" min="0" class="border border-gray-700 rounded px-2 py-1 w-16 assists-input bg-gray-800 text-white" value="{{ old('players.' . $player->id . '.assists') }}">
							</td>
							<td class="px-2 py-1 text-center">
								<input type="checkbox" name="players[{{ $player->id }}][player_of_match]" value="1" class="motm-checkbox" {{ old('players.' . $player->id . '.player_of_match') ? 'checked' : '' }}>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<button type="submit" class="mt-4 px-4 py-2 bg-yellow-500 text-black rounded hover:bg-yellow-600">
				Save Match Player Stats
			</button>
		</form>
	</div>

	<script>
	function updateCounters() {
		let goalsTotal = 0, assistsTotal = 0, motmCount = 0, playedCount = 0, reserveCount = 0;
		let bleusGoals = 0, salmonsGoals = 0, lemonsGoals = 0, greensGoals = 0;
	// Select player logic removed
		document.querySelectorAll('.goals-input').forEach(input => {
			let val = parseInt(input.value) || 0;
			goalsTotal += val;
			let team = input.closest('tr').querySelector('.team-select').value;
			if (team === 'Les Bleus') bleusGoals += val;
			if (team === 'Salmons') salmonsGoals += val;
			if (team === 'Lemons') lemonsGoals += val;
			if (team === 'Greens') greensGoals += val;
		});
		document.querySelectorAll('.assists-input').forEach(input => {
			assistsTotal += parseInt(input.value) || 0;
		});
		document.querySelectorAll('.motm-checkbox').forEach(cb => {
			if (cb.checked) motmCount++;
		});
		document.querySelectorAll('input[type="checkbox"][name$="[played]"]').forEach(cb => {
			if (cb.checked) playedCount++;
		});
		document.querySelectorAll('.reserve-checkbox').forEach(cb => {
			if (cb.checked) reserveCount++;
		});
	// Removed selectedCount update
		document.getElementById('goalsTotal').textContent = goalsTotal;
		document.getElementById('assistsTotal').textContent = assistsTotal;
		document.getElementById('motmCount').textContent = motmCount;
		document.getElementById('bleusGoals').textContent = bleusGoals;
		document.getElementById('salmonsGoals').textContent = salmonsGoals;
		document.getElementById('lemonsGoals').textContent = lemonsGoals;
		document.getElementById('greensGoals').textContent = greensGoals;
		document.getElementById('playedCount').textContent = playedCount;
		document.getElementById('reserveCount').textContent = reserveCount;
	}
	document.addEventListener('input', function(e) {
		if (e.target.classList.contains('goals-input') || e.target.classList.contains('assists-input') || e.target.classList.contains('motm-checkbox') || e.target.classList.contains('team-select') || e.target.classList.contains('played-checkbox') || e.target.classList.contains('reserve-checkbox')) {
			updateCounters();
		}
	});
	window.addEventListener('DOMContentLoaded', updateCounters);
	</script>
@endsection

@section('footer')
@endsection