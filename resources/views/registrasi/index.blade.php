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
        <x-menu-card>
            <x-slot name="icon">
                <i class="fa-solid fa-book fa-2x mr-2"></i>
            </x-slot>
            {{ __('Referensi') }}
        </x-menu-card>

        <x-menu-card>
            <x-slot name="icon">
                <i class="fa-solid fa-users fa-2x mr-2"></i>
            </x-slot>
            {{ __('Administrasi') }}
        </x-menu-card>
    </div>
@endsection