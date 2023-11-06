@props([
    'href' => '',
    'url' => '',
    'class' => '',
])

<a href="{{ $href }}"
    class="flex flex-row btn btn-link w-max h-auto justify-start space-x-2 p-0 md:p-1 no-underline hover:no-underline {{ $class }}">
    @if (isset($logo))
        <div class="bg-local bg-cover w-16 h-16 {{ $logo->attributes['class'] }}"
            style="background-image: url('{{ $url }}')">
            {{ $logo }}
        </div>
    @endif

    @if (isset($text))
        <div class="flex flex-col text-base-content justify-center items-start">
            {{ $text }}
        </div>
    @endif
</a>
