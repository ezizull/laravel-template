@props([
    'defbutton' => 'flex space-x-2 w-full rounded items-center text-xs font-medium uppercase leading-normal',
])

<dev {{ $attributes->merge(['class' => $defbutton]) }}>
    {{ $slot->isNotEmpty() ? $slot : 'Button' }}
</dev>
