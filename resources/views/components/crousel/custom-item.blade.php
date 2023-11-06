@props([
    'class' => '',
    'imgclass' => '',
    'slotclass' => '',
    'slide' => 0,
    'nextslide' => 0,
    'prevslide' => 0,
    'src' => '',
    'alt' => '',
])

<div id="slide{{ $slide }}" class="carousel-item relative h-full overflow-hidden {{ $class }}">
    @if (!empty($src))
        <img src="{{ $src }}" alt="{{ $alt }}" class="object-cover w-full {{ $imgclass }}">
    @endif

    @if ($slot->isNotEmpty())
        <div class="flex h-full {{ $slotclass }}">
            {{ $slot }}
        </div>
    @endif

    @if ($prevslide > 0 || $nextslide > 0)
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide{{ $prevslide }}" class="btn btn-circle btn-primary">❮</a>
            <a href="#slide{{ $nextslide }}" class="btn btn-circle btn-primary">❯</a>
        </div>
    @endif
</div>
