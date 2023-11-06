@props([
    'defclass' => '!min-w-[0.1rem] !min-h-[0.1rem] bg-base-content ',
])


<div class="relative">
    <div {{ $attributes->merge(['class' => $defclass]) }}></div>

    @if ($slot->isNotEmpty())
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-base-100">
            {{ $slot }}
        </div>
    @endif
</div>
