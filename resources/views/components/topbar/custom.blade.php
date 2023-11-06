@props([
    'class' => '',
])

<div class="navbar p-0 md:p-2 my-3 rounded-lg {{ $class }}">
    @if (isset($start))
        <div {{ $start->attributes->merge(['class' => 'navbar-start']) }}>
            {{ $start }}
        </div>
    @endif

    @if (isset($center))
        <div {{ $center->attributes->merge(['class' => 'navbar-center']) }}>
            {{ $center }}
        </div>
    @endif

    @if (isset($end))
        <div {{ $end->attributes->merge(['class' => 'navbar-end']) }}>
            {{ $end }}
        </div>
    @endif
</div>
