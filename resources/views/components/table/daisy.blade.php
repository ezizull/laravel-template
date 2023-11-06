@props([
    'defclass' => 'overflow-x-auto',
])

@if ($slot->isNotEmpty())
    {{ $slot }}
@endif

<div {{ $attributes->merge(['class' => $defclass]) }}>
    @if (isset($table))
        <table {{ $table->attributes->merge(['class' => 'table table-xs']) }}>
            {{ $table }}
        </table>
    @endif
</div>
