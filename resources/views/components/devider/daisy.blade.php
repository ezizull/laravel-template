@props([
    'class' => '',
])

<div class="divider {{ $class }}">{{ $slot }}</div>
