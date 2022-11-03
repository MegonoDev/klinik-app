<aside class="w-full md:w-64 bg-white md:min-h-screen shadow-sm" x-data="{ isOpen: false }">
    <div class="flex items-center justify-between p-3 h-16">
        <a href="#" class="flex items-center justify-center md:mx-auto">
            <i class="fa-solid fa-kit-medical text-primary fa-xl"></i>
            <span class="text-dark text-xl font-bold mx-2">{{ config('app.name') }}</span>
        </a>
        <div class="flex md:hidden">
            <button type="button" @click="isOpen = !isOpen"
                    class="text-gray-300 hover:text-gray-500 focus:outline-none focus:text-gray-500">
                <img class="mr-2 w-8 h-8 rounded-full" src="{{asset('img/user.png')}}" alt="user photo">
            </button>
        </div>
    </div>
    <div class="px-2 py-6 md:block" :class="isOpen? 'block': 'hidden'" >
        <ul>
            <span class="text-sm text-dark font-medium px-2 mb-3">Menu</span>
            <li class="px-2 py-3 bg-light_primary rounded">
                <a href="{{ route('dashboard') }}" class="flex items-center">
                    <i class="fa-solid fa-house text-primary"></i>
                    <span class="mx-2 text-primary">Dashboard</span>
                </a>
            </li>
             <li class="px-2 py-3 hover:bg-gray-100 rounded mt-2 hover:text-primary">
                <a href="{{ route('master') }}" class="flex items-center">
                    <i class="fa-solid fa-book text-dark"></i>
                    <span class="mx-2 text-dark">Master</span>
                </a>
            </li>
            <li class="px-2 py-3 hover:bg-gray-100 rounded mt-2 hover:text-primary">
                <a href="{{ route('registrasi') }}" class="flex items-center">
                    <i class="fa-solid fa-user text-dark"></i>
                    <span class="mx-2 text-dark">Register</span>
                </a>
            </li>
            {{-- <li class="px-2 py-3 hover:bg-gray-900 rounded mt-2">
                <a href="#" class="flex items-center">
                    <svg class="w-6 text-gray-500" fill="none" stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                    </svg>
                    <span class="mx-2 text-gray-300">Projects</span>
                </a>
            </li>
            <li class="px-2 py-3 hover:bg-gray-900 rounded mt-2">
                <a href="#" class="flex items-center">
                    <svg class="w-6 text-gray-500" fill="none" stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <span class="mx-2 text-gray-300">Calendar</span>
                </a>
            </li>
            <li class="px-2 py-3 hover:bg-gray-900 rounded mt-2">
                <a href="#" class="flex items-center">
                    <svg class="w-6 text-gray-500" fill="none" stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                    </svg>
                    <span class="mx-2 text-gray-300">Documents</span>
                </a>
            </li>
            <li class="px-2 py-3 hover:bg-gray-900 rounded mt-2">
                <a href="#" class="flex items-center">
                    <svg class="w-6 text-gray-500" fill="none" stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <span class="mx-2 text-gray-300">Reports</span>
                </a>
            </li> --}}
        </ul>
        <div class="border-t border-gray-200 -mx-2 mt-2 md:hidden"></div>
        <ul class="mt-6 md:hidden">
            <li class="px-2 py-3 hover:bg-gray-100 rounded mt-2">
                <a href="#" class="mx-2 text-dark"><i class="fa-solid fa-gear mr-2"></i>Pengaturan</a>
            </li>
            <li class="px-2 py-3 hover:bg-gray-100 rounded mt-2">
              <form action="{{route('logout')}}" method="post">
                @csrf
                <button class="mx-2 text-dark" type="submit"><i class="fa-solid fa-right-from-bracket mr-2"></i>Keluar</button>
              </form>
            </li>
        </ul>
    </div>
</aside>