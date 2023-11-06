@props([
    'title' => 'Title',
    'desc' => 'Description',
    'placeclass' => 'flex justify-center',
])

<div {{ $attributes->merge(['class' => $placeclass]) }}>
    @if (isset($top))
        <div class="flex flex-col border-t-[1px] w-10">
            <div class="flex h-1/2"></div>
            <div class="flex h-1/2"></div>
        </div>
    @elseif (isset($top_half_left))
        <div class="flex flex-col border-t-[1px] w-10">
            <div class="flex h-1/2"></div>
            <div class="flex h-1/2"></div>
        </div>
    @elseif (isset($top_bot))
        <div class="flex flex-col border-y-[1px] w-10">
            <div class="flex h-1/2"></div>
            <div class="flex h-1/2"></div>
        </div>
    @elseif (isset($top_bot_half_left))
        <div class="flex flex-col border-y-[1px] w-10">
            <div class="flex h-1/2"></div>
            <div class="flex h-1/2"></div>
        </div>
    @elseif (isset($bot))
        <div class="flex flex-col border-b-[1px] w-10">
            <div class="flex h-1/2"></div>
            <div class="flex h-1/2"></div>
        </div>
    @elseif (isset($bot_half_left))
        <div class="flex flex-col border-b-[1px] w-10">
            <div class="flex h-1/2"></div>
            <div class="flex h-1/2"></div>
        </div>
    @elseif (isset($middle))
        <div class="flex flex-col w-10">
            <div class="flex h-1/2 border-b-[1px]"></div>
            <div class="flex h-1/2 border-t-[1px]"></div>
        </div>
    @elseif (isset($middle_u_top))
        <div class="flex flex-col border-t-[1px] w-10">
            <div class="flex h-1/2 border-b-[1px] border-l-[1px]"></div>
            <div class="flex h-1/2 border-t-[1px]"></div>
        </div>
    @elseif (isset($middle_left_u_top))
        <div class="flex flex-col border-t-[1px] w-10">
            <div class="flex h-1/2 border-b-[1px] border-l-[1px]"></div>
            <div class="flex h-1/2 border-t-[1px]"></div>
        </div>
    @elseif (isset($middle_left))
        <div class="flex flex-col border-l-[1px] w-10">
            <div class="flex h-1/2 border-b-[1px]"></div>
            <div class="flex h-1/2 border-t-[1px]"></div>
        </div>
    @elseif (isset($middle_u_bot))
        <div class="flex flex-col border-b-[1px] w-10">
            <div class="flex h-1/2 border-b-[1px]"></div>
            <div class="flex h-1/2 border-t-[1px] border-l-[1px]"></div>
        </div>
    @elseif (isset($middle_left_u_bot))
        <div class="flex flex-col border-b-[1px] w-10">
            <div class="flex h-1/2 border-b-[1px]"></div>
            <div class="flex h-1/2 border-t-[1px] border-l-[1px]"></div>
        </div>
    @elseif (isset($middle_left_top))
        <div class="flex flex-col w-10">
            <div class="flex h-1/2 border-b-[1px] border-l-[1px]"></div>
            <div class="flex h-1/2 border-t-[1px]"></div>
        </div>
    @elseif (isset($middle_left_bot))
        <div class="flex flex-col w-10">
            <div class="flex h-1/2 border-b-[1px]"></div>
            <div class="flex h-1/2 border-t-[1px] border-l-[1px]"></div>
        </div>
    @elseif (isset($middle_e))
        <div class="flex flex-col border-y-[1px] border-l-[1px] w-10">
            <div class="flex h-1/2 border-b-[1px]"></div>
            <div class="flex h-1/2 border-t-[1px]"></div>
        </div>
    @elseif (isset($middle_left_e))
        <div class="flex flex-col border-y-[1px] border-l-[1px] w-10">
            <div class="flex h-1/2 border-b-[1px]"></div>
            <div class="flex h-1/2 border-t-[1px]"></div>
        </div>
    @elseif (isset($center_y))
        <div class="flex flex-col border-t-[1px] w-10">
            <div class="flex h-1/2"></div>
            <div class="flex h-1/2"></div>
        </div>
    @elseif (isset($center_top))
        <div class="flex flex-col border-t-[1px] w-10">
            <div class="flex h-1/2"></div>
            <div class="flex h-1/2"></div>
        </div>
    @endif


    <div class="flex flex-col w-full">
        @if (isset($top))
            <div class="flex border-t-[1px] h-10">
                <div class="flex w-1/2"></div>
                <div class="flex w-1/2"></div>
            </div>
        @elseif (isset($top_bot))
            <div class="flex border-t-[1px] h-10">
                <div class="flex w-1/2"></div>
                <div class="flex w-1/2"></div>
            </div>
        @elseif (isset($top_bot_half_left))
            <div class="flex h-10">
                <div class="flex w-1/2 border-t-[1px]"></div>
                <div class="flex w-1/2"></div>
            </div>
        @elseif (isset($top_bot_half_right))
            <div class="flex h-10">
                <div class="flex w-1/2 border-t-[1px]"></div>
                <div class="flex w-1/2"></div>
            </div>
        @elseif (isset($top_half_left))
            <div class="flex h-10">
                <div class="flex w-1/2 border-t-[1px]"></div>
                <div class="flex w-1/2"></div>
            </div>
        @elseif (isset($top_half_right))
            <div class="flex h-10">
                <div class="flex w-1/2"></div>
                <div class="flex w-1/2 border-t-[1px]"></div>
            </div>
        @elseif (isset($center))
            <div class="flex h-10">
                <div class="flex w-1/2 border-r-[1px]"></div>
                <div class="flex w-1/2 border-l-[1px]"></div>
            </div>
        @elseif (isset($center_y))
            <div class="flex h-10 border-t-[1px]">
                <div class="flex w-1/2 border-r-[1px]"></div>
                <div class="flex w-1/2 border-l-[1px]"></div>
            </div>
        @elseif (isset($center_top))
            <div class="flex h-10">
                <div class="flex w-1/2 border-r-[1px]"></div>
                <div class="flex w-1/2 border-l-[1px]"></div>
            </div>
        @elseif (isset($center_top_half_left))
            <div class="flex h-10">
                <div class="flex w-1/2 border-r-[1px] border-t-[1px]"></div>
                <div class="flex w-1/2 border-l-[1px]"></div>
            </div>
        @elseif (isset($center_top_half_right))
            <div class="flex h-10">
                <div class="flex w-1/2 border-r-[1px]"></div>
                <div class="flex w-1/2 border-l-[1px] border-t-[1px]"></div>
            </div>
        @elseif (isset($center_top_t))
            <div class="flex h-10 border-t-[1px]">
                <div class="flex w-1/2 border-r-[1px]"></div>
                <div class="flex w-1/2 border-l-[1px]"></div>
            </div>
        @endif

        @if (isset($card))
            <div class="flex justify-center">
                <x-card.daisy class="h-14 bg-base-200 {{ $card->attributes['class'] }}">
                    <x-slot:body class="font-lato justify-center gap-0 p-0">
                        {{ $card }}
                    </x-slot:body>
                </x-card.daisy>
            </div>
        @endif

        @if (isset($bot))
            <div class="flex border-b-[1px] h-10">
                <div class="flex w-1/2"></div>
                <div class="flex w-1/2"></div>
            </div>
        @elseif (isset($top_bot))
            <div class="flex border-b-[1px] h-10">
                <div class="flex w-1/2"></div>
                <div class="flex w-1/2"></div>
            </div>
        @elseif (isset($top_bot_half_left))
            <div class="flex h-10">
                <div class="flex w-1/2 border-b-[1px]"></div>
                <div class="flex w-1/2"></div>
            </div>
        @elseif (isset($top_bot_half_right))
            <div class="flex h-10">
                <div class="flex w-1/2 border-b-[1px]"></div>
                <div class="flex w-1/2"></div>
            </div>
        @elseif (isset($bot_half_left))
            <div class="flex h-10">
                <div class="flex w-1/2 border-b-[1px]"></div>
                <div class="flex w-1/2"></div>
            </div>
        @elseif (isset($bot_half_right))
            <div class="flex h-10">
                <div class="flex w-1/2"></div>
                <div class="flex w-1/2 border-b-[1px]"></div>
            </div>
        @elseif (isset($center))
            <div class="flex h-10">
                <div class="flex w-1/2 border-r-[1px]"></div>
                <div class="flex w-1/2 border-l-[1px]"></div>
            </div>
        @elseif (isset($center_y))
            <div class="flex h-10 border-b-[1px]">
                <div class="flex w-1/2 border-r-[1px]"></div>
                <div class="flex w-1/2 border-l-[1px]"></div>
            </div>
        @elseif (isset($center_bot))
            <div class="flex h-10">
                <div class="flex w-1/2 border-r-[1px]"></div>
                <div class="flex w-1/2 border-l-[1px]"></div>
            </div>
        @elseif (isset($center_bot_half_left))
            <div class="flex h-10">
                <div class="flex w-1/2 border-r-[1px] border-b-[1px]"></div>
                <div class="flex w-1/2 border-l-[1px]"></div>
            </div>
        @elseif (isset($center_bot_half_right))
            <div class="flex h-10">
                <div class="flex w-1/2 border-r-[1px]"></div>
                <div class="flex w-1/2 border-l-[1px] border-b-[1px]"></div>
            </div>
        @elseif (isset($center_bot_t))
            <div class="flex h-10 border-b-[1px]">
                <div class="flex w-1/2 border-r-[1px]"></div>
                <div class="flex w-1/2 border-l-[1px]"></div>
            </div>
        @endif
    </div>


    @if (isset($top))
        <div class="flex flex-col border-t-[1px] w-10">
            <div class="flex h-1/2"></div>
            <div class="flex h-1/2"></div>
        </div>
    @elseif (isset($top_half_right))
        <div class="flex flex-col border-t-[1px] w-10">
            <div class="flex h-1/2"></div>
            <div class="flex h-1/2"></div>
        </div>
    @elseif (isset($top_bot))
        <div class="flex flex-col border-y-[1px] w-10">
            <div class="flex h-1/2"></div>
            <div class="flex h-1/2"></div>
        </div>
    @elseif (isset($bot))
        <div class="flex flex-col border-b-[1px] w-10">
            <div class="flex h-1/2"></div>
            <div class="flex h-1/2"></div>
        </div>
    @elseif (isset($bot_half_right))
        <div class="flex flex-col border-b-[1px] w-10">
            <div class="flex h-1/2"></div>
            <div class="flex h-1/2"></div>
        </div>
    @elseif (isset($middle))
        <div class="flex flex-col w-10">
            <div class="flex h-1/2 border-b-[1px]"></div>
            <div class="flex h-1/2 border-t-[1px]"></div>
        </div>
    @elseif (isset($middle_u_top))
        <div class="flex flex-col border-t-[1px] w-10">
            <div class="flex h-1/2 border-b-[1px] border-r-[1px]"></div>
            <div class="flex h-1/2 border-t-[1px]"></div>
        </div>
    @elseif (isset($middle_right_u_top))
        <div class="flex flex-col border-t-[1px] w-10">
            <div class="flex h-1/2 border-b-[1px] border-r-[1px]"></div>
            <div class="flex h-1/2 border-t-[1px]"></div>
        </div>
    @elseif (isset($middle_right))
        <div class="flex flex-col border-r-[1px] w-10">
            <div class="flex h-1/2 border-b-[1px]"></div>
            <div class="flex h-1/2 border-t-[1px]"></div>
        </div>
    @elseif (isset($middle_u_bot))
        <div class="flex flex-col border-b-[1px] w-10">
            <div class="flex h-1/2 border-b-[1px]"></div>
            <div class="flex h-1/2 border-t-[1px] border-r-[1px]"></div>
        </div>
    @elseif (isset($middle_right_u_bot))
        <div class="flex flex-col border-b-[1px] w-10">
            <div class="flex h-1/2 border-b-[1px]"></div>
            <div class="flex h-1/2 border-t-[1px] border-r-[1px]"></div>
        </div>
    @elseif (isset($middle_right_top))
        <div class="flex flex-col w-10">
            <div class="flex h-1/2 border-b-[1px] border-r-[1px]"></div>
            <div class="flex h-1/2 border-t-[1px]"></div>
        </div>
    @elseif (isset($middle_right_bot))
        <div class="flex flex-col w-10">
            <div class="flex h-1/2 border-b-[1px]"></div>
            <div class="flex h-1/2 border-t-[1px] border-r-[1px]"></div>
        </div>
    @elseif (isset($middle_e))
        <div class="flex flex-col border-y-[1px] border-r-[1px] w-10">
            <div class="flex h-1/2 border-b-[1px]"></div>
            <div class="flex h-1/2 border-t-[1px]"></div>
        </div>
    @elseif (isset($middle_right_e))
        <div class="flex flex-col border-y-[1px] border-r-[1px] w-10">
            <div class="flex h-1/2 border-b-[1px]"></div>
            <div class="flex h-1/2 border-t-[1px]"></div>
        </div>
    @elseif (isset($center_y))
        <div class="flex flex-col border-b-[1px] w-10">
            <div class="flex h-1/2"></div>
            <div class="flex h-1/2"></div>
        </div>
    @elseif (isset($center_top))
        <div class="flex flex-col border-b-[1px] w-10">
            <div class="flex h-1/2"></div>
            <div class="flex h-1/2"></div>
        </div>
    @endif
</div>
