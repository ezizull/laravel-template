<div class="navbar bg-base-100">
    <div class="flex-1">
        <a class="btn btn-ghost normal-case text-xl">Jatinom</a>
    </div>
    <div class="flex-none">
        <ul class="menu menu-horizontal items-center px-1">
            <li>
                <a class="p-2">
                    <x-gmdi-notifications-r class="h-5 w-5" />
                </a>
            </li>
            <li>
                <details class="hidden md:block">
                    <summary class="w-56 space-x-2">
                        <div class="avatar">
                            <div class="w-10 rounded-full">
                                <img alt="avatar" src="https://tecdn.b-cdn.net/img/new/avatars/2.webp" />
                            </div>
                        </div>
                        <div class="w-28">
                            <p class="font-black line-clamp-1">{{ strtok(ucwords($user->name), ' ') }}</p>
                            <p class="line-clamp-1">{{ ucwords($user->getRoleNames()[0]) }}</p>
                        </div>
                    </summary>
                    <ul class="bg-base-100 w-56 p-2 !mt-7">
                        <li><a>Log Out</a></li>
                    </ul>
                </details>
                <div class="md:hidden dropdown dropdown-bottom dropdown-end p-0">
                    <label tabindex="0" class="p-1.5">
                        <x-heroicon-o-bars-3 class="h-6 w-6" />
                    </label>
                    <ul tabindex="0"
                        class="menu menu-md dropdown-content !mt-7 z-[1] p-2 shadow bg-base-100 rounded-box w-28">
                        <li><a>Log Out</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
