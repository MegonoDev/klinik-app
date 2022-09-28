@extends('layouts/auth')

@section('title')
    Login
@endsection

@section('content')
<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
    <a href="#" class="flex items-center mb-6">
            <i class="fa-solid fa-kit-medical text-primary fa-2x"></i>
        <span class="text-dark text-2xl font-bold mx-2">{{ config('app.name') }}</span>
    </a>
    <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-semibold text-primary text-transform: uppercase">
                Login
            </h1>
            <form class="space-y-4 md:space-y-6" action="{{route('register')}}" method="POST">
                @csrf
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-dark">Nama</label>
                    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-dark sm:text-sm rounded-lg focus:ring-primary focus:border-light_primary block w-full p-2.5" placeholder="Masukkan Nama Anda" required>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-dark">Email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-dark sm:text-sm rounded-lg focus:ring-primary focus:border-light_primary block w-full p-2.5" placeholder="Masukkan Email Anda" required>
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-dark">Password</label>
                    <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-dark sm:text-sm rounded-lg focus:ring-primary focus:border-light_primary block w-full p-2.5" placeholder="Masukkan Password Anda" required>
                </div>
                <div>
                    <label for="password_confirmation" class="block mb-2 text-sm font-medium text-dark">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="bg-gray-50 border border-gray-300 text-dark sm:text-sm rounded-lg focus:ring-primary focus:border-light_primary block w-full p-2.5" placeholder="Masukkan Konfirmasi Password Anda" required>
                </div>
                <button type="submit" class="w-full text-white bg-primary hover:bg-indigo-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <i class="fa-solid fa-right-to-bracket mr-1.5"></i>
                    Daftar
                </button>
                @if (Route::has('login'))
                <p class="text-sm text-dark text-center">
                    Tidak punya akun? <a href="{{route('login')}}" class="font-medium text-primary hover:underline">Masuk Disini</a>
                </p>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection