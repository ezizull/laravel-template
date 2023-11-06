@props([
    'defclass' => 'card rounded-lg space-x-4',
])

<div {{ $attributes->merge(['class' => $defclass]) }}>
    @if (isset($head))
        <div {{ $head->attributes }}>
            {{ $head }}
        </div>
    @endif

    @if ($slot->isNotEmpty())
        {{ $slot }}
    @endif


    @if (isset($tail))
        <div {{ $tail->attributes }}>
            {{ $tail }}
        </div>
    @endif
</div>
