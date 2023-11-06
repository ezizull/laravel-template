@props([
    'defclass' => 'card',
    'defbody' => 'card-body',
    'defaction' => 'card-action',
    'defimage' => 'object-cover',
])

<a {{ $attributes->merge(['class' => $defclass]) }}>
    @if (isset($head))
        <figure class="{{ $head->attributes['figClass'] }}">
            <img {{ $head->attributes->merge(['class' => $defimage]) }} />
            {{ $head }}
        </figure>
    @endif

    @if (isset($body))
        <div {{ $body->attributes->merge(['class' => $defbody]) }}>
            {{ $body }}

            @if (isset($action))
                <div {{ $action->attributes->merge(['class' => $defaction]) }}>
                    {{ $action }}
                </div>
            @endif
        </div>
    @endif


    @if (isset($tail))
        <figure class="{{ $tail->attributes['figClass'] }}">
            <img {{ $tail->attributes->merge(['class' => $defimage]) }} />s
            {{ $tail }}
        </figure>
    @endif
</a>
