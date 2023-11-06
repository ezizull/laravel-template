@props([
    'name' => '',
    'items' => [],
    'errors' => [],
    'errlabel' => 'select select-error w-full rounded-md px-3 pl-10 text-xs font-medium uppercase focus:ring-1',
    'deflabel' => 'select w-full rounded-md px-3 pl-10 text-xs font-medium uppercase',
    'deficons' => 'absolute top-2/4 left-3 grid h-5 w-5 -translate-y-2/4 place-items-center',
    'defitem' => 'bg-black',
])

<div class="relative w-full mt-6">
    @if (isset($items))
        <select {{ $attributes->merge(['name' => $name, 'class' => $errors->has($name) ? $errlabel : $deflabel]) }}>
            <option disabled selected>{{ $label ?? 'label select' }}</option>
            {{ $items }}
        </select>
    @endif

    @if (isset($icon))
        <div {{ $icon->attributes->merge(['class' => $deficons]) }}>
            {{ $icon }}
        </div>
    @endif
</div>

@error($name)
    <p class="block text-sm mt-1">{{ $message }}</p>
@enderror
