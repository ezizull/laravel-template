@props([
    'class' => '',
    'name' => '',
    'errors' => [],
    'deflabel' => 'btn w-full px-3',
    'errlabel' => 'btn btn-error w-full px-3',
    'defitems' => 'dropdown-content z-[1] menu menu-md p-2 shadow bg-base-100 rounded-box w-max',
])

<div class="dropdown {{ $class }}">
    <label tabindex="0"
        {{ isset($label) ? $label->attributes->merge(['class' => $errors->has($name) ? $errlabel : $deflabel]) : null }}>
        {{ $label ?? 'label dropdown' }}
    </label>

    <ul tabindex="0" {{ isset($items) ? $items->attributes->merge(['class' => $defitems]) : null }}>
        {{ $items ?? '' }}
    </ul>
</div>

@error($name)
    <p class="block text-sm mt-1">{{ $message }}</p>
@enderror
