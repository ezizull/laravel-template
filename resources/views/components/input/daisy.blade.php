@props([
    'class' => '',
    'name' => '',
    'errors' => [],
    'definput' => 'input focus:ring-1 block w-full pl-10 p-2.5',
    'errinput' => 'input input-error focus:ring-1 block w-full pl-10 p-2.5',
    'deficons' => 'absolute top-2/4 left-3 grid h-5 w-5 -translate-y-2/4 place-items-center text-blue-gray-500',
])

<div class="relative w-full mt-6 {{ $class }}">
    @if (isset($icon))
        <div {{ $icon->attributes->merge(['class' => $deficons]) }}>
            {{ $icon }}
        </div>
    @endif

    <input
        {{ $attributes->merge([
            'name' => $name,
            'class' => $errors->has($name) ? $errinput : $definput,
            'placeholder' => 'placeholder',
        ]) }}>
</div>

@error($name)
    <p class="block text-sm mt-1">{{ $message }}</p>
@enderror
