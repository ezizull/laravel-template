<x-topbar.custom>
    <x-slot:start>
        <x-image.custom-logo class="hidden sm:flex" href="/" url="/images/muhammadiyah-logo.png">
            <x-slot:logo class="h-16 w-16"></x-slot:logo>
            <x-slot:text>
                <p class="font-lato leading-tight font-extrabold text-xl">Muhammadiyah</p>
                <p class="font-lato leading-none font-normal normal-case">Cahaya Islam Berkemajuan</p>
            </x-slot:text>
        </x-image.custom-logo>
    </x-slot:start>
    <x-slot:end>
        <div class="hidden xl:inline-flex">
            <x-link.custom href="/news">News</x-link.custom>
            <x-devider.daisy class="divider-horizontal" />
            <x-link.custom href="/gallery">Photo</x-link.custom>
            <x-devider.daisy class="divider-horizontal" />
            <x-link.custom href="/announce">Announcement</x-link.custom>
            <x-devider.daisy class="divider-horizontal" />
            <x-link.custom href="/contact">Contact</x-link.custom>
            <x-devider.daisy class="divider-horizontal" />
            <x-link.custom href="/organization">Organization</x-link.custom>
        </div>

        <x-button.dropdown class="dropdown-bottom dropdown-end w-12 inline-flex xl:hidden">
            <x-slot:label>
                <x-heroicon-s-bars-3-bottom-left />
            </x-slot:label>
            <x-slot:items class="mt-1">
                <li><x-link.custom class="hover:no-underline">News</x-link.custom></li>
                <li><x-link.custom class="hover:no-underline">Photo</x-link.custom></li>
                <li><x-link.custom class="hover:no-underline">Announcement</x-link.custom></li>
                <li><x-link.custom class="hover:no-underline">Contact</x-link.custom></li>
                <li><x-link.custom class="hover:no-underline">Organization</x-link.custom></li>
            </x-slot:items>
        </x-button.dropdown>
    </x-slot:end>
</x-topbar.custom>
