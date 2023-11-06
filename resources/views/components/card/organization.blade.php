<x-table.daisy class="h-[25rem] mb-28 ">
    <p class="font-lato font-bold text-lg">Lihat struktur organisasi kami ?</p>

    @if (isset($organization))
        <x-slot:table>
            <tbody>
                <tr class="border-0">
                    <x-table.col-center colspan="{{ $organization['count_col'] }}">
                        <x-card.organization-item>
                            <x-slot:card class="!w-[10rem]">
                                <span class="line-clamp-2 text-primary font-black text-sm">
                                    Pimpinan Pusat Muhammadiyah
                                </span>
                            </x-slot:card>
                            <x-slot:bot>
                                <x-devider.custom class="h-[1rem]"></x-devider.custom>
                            </x-slot:bot>
                        </x-card.organization-item>
                    </x-table.col-center>
                </tr>
                {{-- <tr class="border-0">
                    <x-table.col-center colspan="{{ $organization['count_col'] }}">
                        <x-card.organization>
                            <x-slot:top>
                                <x-devider.custom class="h-[1rem]"></x-devider.custom>
                            </x-slot:top>
                            <x-slot:card class="!w-[10rem]">
                                <span class="line-clamp-2 text-primary font-black text-sm">
                                    PMW Jawa Timur
                                </span>
                            </x-slot:card>
                            <x-slot:bot>
                                <x-devider.custom class="h-[1rem]"></x-devider.custom>
                            </x-slot:bot>
                        </x-card.organization>
                    </x-table.col-center>
                </tr>
                <tr class="border-0">
                    <x-table.col-center colspan="{{ $organization['count_col'] }}">
                        <x-card.organization>
                            <x-slot:top>
                                <x-devider.custom class="h-[1rem]"></x-devider.custom>
                            </x-slot:top>
                            <x-slot:card class="!w-[10rem]">
                                <span class="line-clamp-1 text-primary font-black text-sm">Ketua PDM</span>
                                <span class="line-clamp-1">{{ $organization['pdm_ketua'] }}</span>
                            </x-slot:card>
                            <x-slot:bot>
                                <x-devider.custom class="h-[1rem]"></x-devider.custom>
                            </x-slot:bot>
                        </x-card.organization>
                    </x-table.col-center>
                </tr>
                <tr class="border-0">
                    @foreach ($organization['pdm_majelis'] as $majelis)
                        <x-table.col-center class="!min-w-[12rem] 2xl:!min-w-[10rem]">
                            @if ($loop->first)
                                <x-card.organization class="!items-end">
                                    <x-slot:top class="h-[1.6rem] flex justify-start">
                                        <x-devider.custom class="h-[1.6rem] w-[0.1rem]"></x-devider.custom>
                                        <x-devider.custom class="w-[6rem] 2xl:w-[5.615rem]"></x-devider.custom>
                                    </x-slot:top>
                                    <x-slot:card class="!w-[10rem]">
                                        <span
                                            class="line-clamp-1 text-primary font-black text-sm">{{ $majelis['title'] }}</span>
                                        @if ($majelis['name'])
                                            <span class="line-clamp-1">{{ $majelis['name'] }}</span>
                                        @endif
                                    </x-slot:card>
                                </x-card.organization>
                            @elseif ($loop->last)
                                <x-card.organization class="!items-start">
                                    <x-slot:top class="h-[1.6rem] flex justify-start">
                                        <x-devider.custom class="w-[6rem] 2xl:w-[5.615rem]"></x-devider.custom>
                                        <x-devider.custom class="h-[1.6rem] w-[0.1rem]"></x-devider.custom>
                                    </x-slot:top>
                                    <x-slot:card class="!w-[10rem]">
                                        <span
                                            class="line-clamp-1 text-primary font-black text-sm">{{ $majelis['title'] }}</span>
                                        @if ($majelis['name'])
                                            <span class="line-clamp-1">{{ $majelis['name'] }}</span>
                                        @endif
                                    </x-slot:card>
                                </x-card.organization>
                            @else
                                <x-card.organization>
                                    <x-slot:top class="flex flex-col items-center">
                                        <x-devider.custom
                                            class="w-[12rem] 2xl:w-[11.5rem] 3xl:w-[12.45rem]"></x-devider.custom>
                                        <x-devider.custom class="h-[1.5rem] w-[0.1rem]"></x-devider.custom>
                                    </x-slot:top>
                                    <x-slot:card class="!w-[10rem]">
                                        <span
                                            class="line-clamp-1 text-primary font-black text-sm">{{ $majelis['title'] }}</span>
                                        @if ($majelis['name'])
                                            <span class="line-clamp-1">{{ $majelis['name'] }}</span>
                                        @endif
                                    </x-slot:card>
                                </x-card.organization>
                            @endif
                        </x-table.col-center>
                    @endforeach
                </tr>
                <tr class="border-0">
                    <x-table.col-center colspan="{{ $organization['count_col'] }}">
                        <x-card.organization>
                            <x-slot:top>
                                <x-devider.custom class="h-[2rem]"></x-devider.custom>
                            </x-slot:top>
                            <x-slot:card class="!w-[10rem]">
                                <span class="line-clamp-2 text-primary font-black text-sm">
                                    Pimpinan Cabang
                                </span>
                            </x-slot:card>
                            <x-slot:bot>
                                <x-devider.custom class="h-[1rem]"></x-devider.custom>
                            </x-slot:bot>
                        </x-card.organization>
                    </x-table.col-center>
                </tr>
                <tr class="border-0">
                    @foreach ($organization['cabang_majelis'] as $majelis)
                        <x-table.col-center class="!min-w-[12rem] 2xl:!min-w-[10rem]">
                            @if ($loop->first)
                                <x-card.organization class="!items-end">
                                    <x-slot:top class="h-[1.6rem] flex justify-start">
                                        <x-devider.custom class="h-[1.6rem] w-[0.1rem]"></x-devider.custom>
                                        <x-devider.custom class="w-[6rem] 2xl:w-[5.615rem]"></x-devider.custom>
                                    </x-slot:top>
                                    <x-slot:card class="!w-[10rem]">
                                        <span
                                            class="line-clamp-1 text-primary font-black text-sm">{{ $majelis['title'] }}</span>
                                        @if ($majelis['name'])
                                            <span class="line-clamp-1">{{ $majelis['name'] }}</span>
                                        @endif
                                    </x-slot:card>
                                </x-card.organization>
                            @elseif ($loop->last)
                                <x-card.organization class="!items-start">
                                    <x-slot:top class="h-[1.6rem] flex justify-start">
                                        <x-devider.custom class="w-[6rem] 2xl:w-[5.615rem]"></x-devider.custom>
                                        <x-devider.custom class="h-[1.6rem] w-[0.1rem]"></x-devider.custom>
                                    </x-slot:top>
                                    <x-slot:card class="!w-[10rem]">
                                        <span
                                            class="line-clamp-1 text-primary font-black text-sm">{{ $majelis['title'] }}</span>
                                        @if ($majelis['name'])
                                            <span class="line-clamp-1">{{ $majelis['name'] }}</span>
                                        @endif
                                    </x-slot:card>
                                </x-card.organization>
                            @else
                                <x-card.organization>
                                    <x-slot:top class="flex flex-col items-center">
                                        <x-devider.custom
                                            class="w-[12rem] 2xl:w-[11.5rem] 3xl:w-[12.45rem]"></x-devider.custom>
                                        <x-devider.custom class="h-[1.5rem] w-[0.1rem]"></x-devider.custom>
                                    </x-slot:top>
                                    <x-slot:card class="!w-[10rem]">
                                        <span
                                            class="line-clamp-1 text-primary font-black text-sm">{{ $majelis['title'] }}</span>
                                        @if ($majelis['name'])
                                            <span class="line-clamp-1">{{ $majelis['name'] }}</span>
                                        @endif
                                    </x-slot:card>
                                </x-card.organization>
                            @endif
                        </x-table.col-center>
                    @endforeach
                </tr>
                <tr class="border-0">
                    <x-table.col-center colspan="{{ $organization['count_col'] }}">
                        <x-card.organization>
                            <x-slot:top>
                                <x-devider.custom class="h-[2rem]"></x-devider.custom>
                            </x-slot:top>
                            <x-slot:card class="!w-[10rem]">
                                <span class="line-clamp-2 text-primary font-black text-sm">Pimpinan
                                    Ranting</span>
                            </x-slot:card>
                            <x-slot:bot>
                                <x-devider.custom class="h-[1rem]"></x-devider.custom>
                            </x-slot:bot>
                        </x-card.organization>
                    </x-table.col-center>
                </tr>
                <tr class="border-0">
                    <x-table.col-center colspan="{{ $organization['count_col'] }}">
                        <x-card.organization>
                            <x-slot:top>
                                <x-devider.custom class="h-[1rem]"></x-devider.custom>
                            </x-slot:top>
                            <x-slot:card class="!w-[10rem]">
                                <span class="line-clamp-2 text-primary font-black text-sm">
                                    Anggota/Warga
                                </span>
                            </x-slot:card>
                        </x-card.organization>
                    </x-table.col-center>
                </tr> --}}
            </tbody>
        </x-slot:table>
    @endif
</x-table.daisy>
