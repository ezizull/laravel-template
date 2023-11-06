@props([
    'defclass' => 'avatar',
])

<div {{ $attributes->merge(['class' => $defclass]) }}>
    <div class="w-24 rounded-full">
        <img src="https://picsum.photos/200" />
    </div>
</div>
