@props([
    'class' => '',
    'href' => '#',
])

@if (!empty(url()->current()) && str_contains(url()->current(), $href))
    <a class="link underline-offset-4 font-lato leading-none font-light {{ $class }}" href="{{ $href }}">
        {{ $slot }}
    </a>
@else
    <a class="link link-hover underline-offset-4 font-lato leading-none font-light {{ $class }}"
        href="{{ $href }}">
        {{ $slot }}
    </a>
@endif
