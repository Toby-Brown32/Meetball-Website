<?php
// View component for a season select dropdown
$selected = $selected ?? null;
?>
<select name="season_id" id="season_id" onchange="this.form?.submit?.()" class="bg-gray-900 text-gray-100 border border-gray-700 rounded-xl px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500 transition">
    <option value="all" {{ $selected == 'all' ? 'selected' : '' }}>All Seasons</option>
    @foreach($seasons as $season)
        <option value="{{ $season->id }}" {{ $selected == $season->id ? 'selected' : '' }}>{{ $season->name }}</option>
    @endforeach
</select>
