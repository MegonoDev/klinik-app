@extends('layouts.app')

@section('title')
    Register
@endsection

@section('content')
    <div id="header" class="flex justify-between py-4">
        <h1 class="text-2xl font-bold text-dark">Register</h1>
        <div id="pencarian">

        </div>
    </div>
    <div class="grid xs:grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="p-6 h-32 w-full bg-white rounded-lg border border-gray-200 shadow-md hover:scale-105 transition ease-in">
            <a href="">
                <div class="flex justify-start items-center text-dark hover:text-primary">
                    <i class="fa-solid fa-book fa-2x mr-2"></i>
                    <h2 class="font-bold text-xl">Referensi</h2>
                </div>
            </a>
        </div>
        <div class="p-6 h-32 w-full bg-white rounded-lg border border-gray-200 shadow-md hover:scale-105 transition ease-in">
            <a href="">
                <div class="flex justify-start items-center text-dark hover:text-primary">
                    <i class="fa-solid fa-users fa-2x mr-2"></i>
                    <h2 class="font-bold text-xl">Administrasi</h2>
                </div>
            </a>
        </div>
    </div>
@endsection