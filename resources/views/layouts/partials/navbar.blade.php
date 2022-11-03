<nav class="hidden md:flex sm:flex justify-end sm:justify-end items-center sm:items-center bg-white sm:bg-white p-4 sm:p-4 shadow-sm sm:shadow-sm h-16 sm:h-26">
    {{-- <div>
        <button @click="isOpen = !isOpen"><i class="fa-solid fa-bars"></i></button>
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