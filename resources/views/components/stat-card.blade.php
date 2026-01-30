@props([
    'label',
    'value',
    'delay' => 0,
    'compactOnMobile' => false,
])

@php
    $containerClass = $compactOnMobile
        ? 'rounded-lg sm:rounded-xl p-2 sm:p-4'
        : 'rounded-xl p-4';
    $labelClass = $compactOnMobile ? 'text-[11px] sm:text-sm' : 'text-sm';
    $valueClass = $compactOnMobile ? 'text-base sm:text-2xl' : 'text-2xl';
@endphp

<div x-data="{ show: false }" x-init="setTimeout(() => show = true, {{ $delay * 0.8 }})" x-show="show" x-transition:enter="transition ease-out duration-700" x-transition:enter-start="opacity-0 translate-y-8 scale-95" x-transition:enter-end="opacity-100 translate-y-0 scale-100" class="bg-gradient-to-br from-gray-800 via-gray-700 to-gray-900 shadow-lg {{ $containerClass }} flex flex-col items-center border border-gray-600 hover:shadow-2xl transition-all duration-300">
    <span class="{{ $labelClass }} font-semibold text-gray-400 mb-1 leading-tight text-center">{{ $label }}</span>
    <span class="{{ $valueClass }} font-bold text-white leading-tight">{{ $value }}</span>
</div>
