@props([
    'defitems' => 'grid gap-6 grid-cols-1 md:grid-cols-2 xl:grid-cols-4 xl:grid-rows-2',
])

<div {{ $attributes }}>
    {{ $slot }}

    @if (isset($items))
        <div {{ $items->attributes->merge(['class' => $defitems]) }}>
            {{ $items }}
        </div>
    @endif
</div>
