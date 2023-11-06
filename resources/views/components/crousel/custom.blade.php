@props([
    'class' => '',
])

<div class="carousel w-full h-full rounded-lg {{ $class }}">
    {{ $slot }}
</div>
