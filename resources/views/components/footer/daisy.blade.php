@props([
    'defclass' => 'footer p-10',
])

<footer {{ $attributes->merge(['class' => $defclass]) }}>
    {{ $slot }}
</footer>
