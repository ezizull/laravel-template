@props([
    'defclass' =>
        'w-full scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex flex-col focus:outline focus:outline-2 focus:outline-red-500',
])

<div {{ $attributes->merge(['class' => $defclass]) }}>
    @if (isset($head))
        <div {{ $head->attributes }}>
            {{ $head }}
        </div>
    @endif


    {{ $slot }}


    @if (isset($tail))
        <div {{ $tail->attributes }}>
            {{ $tail }}
        </div>
    @endif
</div>
