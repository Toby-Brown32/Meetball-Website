<style>
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

    .dropdown-scrollbar::-webkit-scrollbar { width: 10px; height: 10px; }
    .dropdown-scrollbar::-webkit-scrollbar-track { background: #0f172a; }
    .dropdown-scrollbar::-webkit-scrollbar-thumb { background: #374151; border-radius: 999px; border: 2px solid transparent; background-clip: padding-box; }
    .dropdown-scrollbar { scrollbar-color: #374151 #0f172a; scrollbar-width: thin; }

    [x-cloak] { display: none !important; }
</style>

<div x-data="{ open: false, selected: '', label: '' }" x-init="selected = @json($selectedRaw); label = @json($selectedName)" class="relative inline-block">
    <input type="hidden" name="{{ $name }}" x-bind:value="selected">

    <button type="button"
            @click="open = !open"
            aria-haspopup="listbox"
            :aria-expanded="open.toString()"
            class="{{ $width }} text-left {{ $buttonClass }} focus:outline-none focus:ring-1 focus:ring-blue-500">
        <span class="truncate text-sm font-medium" x-text="label || @json($selectedName ?? $placeholder)">{{ $selectedName ?? $placeholder }}</span>
        <svg class="w-4 h-4 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <ul x-cloak x-show="open"
        x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 transform scale-95"
        x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-95"
        @click.outside="open = false"
        role="listbox"
        class="absolute left-0 mt-2 min-w-full bg-gray-900 text-white rounded-lg shadow-lg z-50 ring-1 ring-black/20 {{ $showAll ? '' : 'overflow-auto ' }}{{ $showAll ? '' : ($showScrollbar ? 'dropdown-scrollbar ' : 'no-scrollbar ') }}{{ $showAll ? '' : 'max-h-60' }}">
        @foreach($items as $it)
            <li data-value="{{ $it['value'] }}" data-action="{{ $it['action'] ?? '' }}"
                @click="selected = '{{ $it['value'] }}'; label = $event.target.textContent.trim(); open = false; @if($autosubmit) $nextTick(() => { const f = $event.target.closest('form'); if (f) { const hidden = f.querySelector('input[name=\'{{ $name }}\']'); if (hidden) hidden.value = '{{ $it['value'] }}'; const action = $event.target.getAttribute('data-action'); if (action) f.action = action; f.submit(); } }) @endif"
                class="px-4 py-2 hover:bg-gray-800 cursor-pointer"
                role="option">{{ $it['label'] }}</li>
        @endforeach
    </ul>
</div>
