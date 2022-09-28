<nav class="hidden md:flex justify-end items-center bg-white p-4 shadow-sm h-16">
    {{-- <div>
        <input class="px-4 py-2 border border-white rounded focus:outline-none" type="text"
            placeholder="Search.."/>
    </div> --}}
    {{-- <div>
        <form action="{{route('logout')}}" method="post">
            @csrf
            <button class="mx-2 text-gray-700 focus:outline-none" type="submit">
                <svg class="h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path
                        d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                </svg>
            </button>
        </form>
    </div> --}}
    <div>
        <button id="dropdownNavbarButton" data-dropdown-toggle="dropdownNav" class="flex items-center text-sm font-medium text-gray-900 rounded-full hover:text-primary md:mr-0 focus:ring-4 focus:ring-gray-100" type="button">
            <span class="sr-only">Open user menu</span>
            <img class="mr-2 w-8 h-8 rounded-full" src="{{asset('img/user.png')}}" alt="user photo">
            <span class="text-transform: capitalize">{{Auth::user()->name }}</span>
            <i class="fa-solid fa-chevron-down mx-2 fa-xs"></i>
        </button>
        <!-- Dropdown menu -->
        <div id="dropdownNav" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 485px);">
            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformNav">
                <li>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-100"><i class="fa-solid fa-gear mr-2"></i>Pengaturan</a>
                </li>
                <li>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button type="submit" class="block w-full text-start py-2 px-4 text-dark hover:bg-gray-100"><i class="fa-solid fa-right-from-bracket mr-2"></i>Keluar</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>