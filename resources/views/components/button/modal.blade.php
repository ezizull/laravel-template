@props([
    'deflabel' => 'btn px-3',
    'defbutton' => 'btn px-3',
    'class' => '',
    'method' => 'dialog',
    'action' => '#',
])

<button class="{{ $deflabel }}  {{ $class }}" onclick="my_modal_5.showModal()">
    {{ $label ?? 'button' }}
</button>
<dialog id="my_modal_5" class="modal modal-bottom sm:modal-middle transition-none">
    <form
        {{ isset($form)
            ? $form->attributes->merge(['class' => 'modal-box shadow-none', 'method' => $method, 'action' => $action])
            : $attributes->merge(['class' => 'modal-box shadow-none', 'method' => $method, 'action' => $action]) }}>
        @csrf

        {{ $form ?? '' }}

        @if (isset($button))
            <div {{ $button->attributes->merge(['class' => 'modal-action space-x-4']) }}>
                <a href="" class="btn btn-sm w-24 {{ $defbutton }}">cancel</a>
                {{ $button ?? '' }}
            </div>
        @else
            <div {{ $attributes->merge(['class' => 'modal-action space-x-4']) }}>
                <button class="btn btn-sm w-24 {{ $defbutton }}">cancel</button>
                {{ $button ?? '' }}
            </div>
        @endif
    </form>
</dialog>
