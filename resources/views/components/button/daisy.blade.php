@props([
    'defbutton' => 'btn w-full mb-6 rounded px-5 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal',
])

<button {{ $attributes->merge(['class' => $defbutton]) }}>
    {{ $slot->isNotEmpty() ? $slot : 'Button' }}
</button>
