<div x-data="{ show: false }" x-init="setTimeout(() => show = true, {{ $delay ?? 0 }})" x-show="show" x-transition:enter="transition ease-out duration-700" x-transition:enter-start="opacity-0 translate-y-8 scale-95" x-transition:enter-end="opacity-100 translate-y-0 scale-100">
    {{ $slot }}
</div>
