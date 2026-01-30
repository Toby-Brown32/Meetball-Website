
<div class="rounded-lg shadow-lg bg-gradient-to-br from-gray-900 to-gray-800 p-2 sm:p-4">
    <table class="w-full table-fixed text-[11px] text-white sm:text-sm {{ $tableClass }} rounded-lg overflow-hidden">
        <thead class="{{ $theadClass }}">
            <tr>
                @foreach($columns as $col)
                    @php
                        $visibilityClass = '';
                        if (!empty($col['hideOnMobile'])) {
                            $visibilityClass = 'hidden sm:table-cell';
                        } elseif (!empty($col['hideBelowMd'])) {
                            $visibilityClass = 'hidden md:table-cell';
                        } elseif (!empty($col['hideBelowLg'])) {
                            $visibilityClass = 'hidden lg:table-cell';
                        }
                    @endphp
                    <th class="px-2 py-2 text-{{ $col['align'] ?? 'left' }} {{ $col['class'] ?? '' }} {{ $visibilityClass }} bg-blue-800 text-white font-semibold uppercase tracking-wide text-[10px] sm:px-4 sm:py-3 sm:text-xs border-b border-blue-700 first:rounded-tl-lg last:rounded-tr-lg whitespace-normal break-words">
                        {{ $col['label'] }}
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody class="{{ $tbodyClass }} divide-y divide-gray-700">
            @foreach($rows as $i => $row)
                <tr class="{{ $highlightFirst && $i === 0 ? 'ring-2 ring-blue-400' : '' }} {{ $striped && $i % 2 === 0 ? 'bg-gray-800/80' : 'bg-gray-700/80' }} hover:bg-blue-800/70 sm:hover:scale-[1.01] transition-all duration-150 ease-in-out {{ $rowClass }}">
                    @foreach($columns as $col)
                        @php
                            $visibilityClass = '';
                            if (!empty($col['hideOnMobile'])) {
                                $visibilityClass = 'hidden sm:table-cell';
                            } elseif (!empty($col['hideBelowMd'])) {
                                $visibilityClass = 'hidden md:table-cell';
                            } elseif (!empty($col['hideBelowLg'])) {
                                $visibilityClass = 'hidden lg:table-cell';
                            }
                        @endphp
                        <td class="px-2 py-2 text-{{ $col['align'] ?? 'left' }} {{ $col['cellClass'] ?? $cellClass }} {{ $visibilityClass }} align-middle whitespace-normal break-words sm:px-4 sm:py-3">
                            @if(isset($col['render']) && is_callable($col['render']))
                                {!! $col['render']($row, $i) !!}
                            @else
                                {{ is_array($row) ? ($row[$col['key']] ?? '') : ($row->{$col['key']} ?? '') }}
                            @endif
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
