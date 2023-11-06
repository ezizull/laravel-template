@props([
    'defclass' => 'items-center grid-flow-col',
])

<aside {{ $attributes->merge(['class' => $defclass]) }}>
    {{ $slot }}
</aside>
