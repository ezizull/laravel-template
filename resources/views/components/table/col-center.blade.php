@props([
    'defclass' => 'text-center p-0',
])

<th {{ $attributes->merge(['class' => $defclass]) }}>
    {{ $slot }}
</th>
