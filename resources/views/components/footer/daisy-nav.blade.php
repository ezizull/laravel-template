@props([
    'defclass' => '',
    'deftitle' => 'footer-title',
])

<nav {{ $attributes->merge(['class' => $defclass]) }}>
    @if (isset($title))
        <header {{ $title->attributes->merge(['class' => $deftitle]) }}>
            {{ $title }}
        </header>
    @endif

    {{ $slot }}
</nav>
