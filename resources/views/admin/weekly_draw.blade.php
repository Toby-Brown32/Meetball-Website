@extends('admin_layout')

@section('title', 'Admin Weekly Draw')

@section('content')
<h2 class="text-2xl font-bold mb-4">Weekly Draw</h2>
<form method="POST" action="{{ route('admin.weekly_draw') }}" class="mb-8">
	@csrf
	<div class="mb-4">
		<label class="block font-semibold mb-2">Select Players:</label>
		<div class="grid grid-cols-2 md:grid-cols-3 gap-2">
			@foreach($players as $player)
				<label class="flex items-center space-x-2">
					<input type="checkbox" name="players[]" value="{{ $player->id }}" {{ in_array($player->id, old('players', $selected ?? [])) ? 'checked' : '' }}>
					<span>{{ $player->forename }} {{ $player->surname }}</span>
				</label>
			@endforeach
		</div>
	</div>
	<button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Draw Teams</button>
	@if(isset($teams))
		<button type="submit" name="redraw" value="1" class="ml-2 px-4 py-2 bg-yellow-600 text-white rounded">Redraw Teams</button>
	@endif
</form>

@if($teams)
	@if(isset($teams['guaranteed']) && count($teams['guaranteed']) > 0)
	<div class="mb-6">
		<h3 class="text-xl font-semibold mb-2">Guaranteed Players</h3>
		<ul class="list-disc ml-6">
			@foreach($teams['guaranteed'] as $player)
				<li>{{ $player->forename }} {{ $player->surname }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
		<div>
			<h3 class="text-xl font-semibold mb-2">Salmons</h3>
			<ul class="list-disc ml-6">
				@foreach($teams['A']['players'] as $player)
					<li>{{ $player->forename }} {{ $player->surname }}</li>
				@endforeach
			</ul>
		</div>
		<div>
			<h3 class="text-xl font-semibold mb-2">Lemons</h3>
			<ul class="list-disc ml-6">
				@foreach($teams['B']['players'] as $player)
					<li>{{ $player->forename }} {{ $player->surname }}</li>
				@endforeach
			</ul>
		</div>
	</div>
		@if(isset($teams['reserves']) && count($teams['reserves']) > 0)
		<div class="mt-8">
			<h3 class="text-xl font-semibold mb-2">Reserves (Drawn Order)</h3>
			<ul class="list-disc ml-6">
				@foreach($teams['reserves'] as $player)
					<li>{{ $player->forename }} {{ $player->surname }}</li>
				@endforeach
			</ul>
		</div>
		@endif

		@if(!empty($weeklyDrawOutput))
			<div class="mt-10 p-4 bg-gray-900/60 border border-gray-700 rounded-xl">
				<div class="flex items-center justify-between gap-3 mb-3">
					<h3 class="text-xl font-semibold">Copy/Paste Output</h3>
				</div>
				<pre id="weekly-draw-output" class="whitespace-pre-wrap text-sm leading-6 text-gray-100">{{ $weeklyDrawOutput }}</pre>
			</div>
		@endif
@endif
@endsection

@section('footer')
@endsection