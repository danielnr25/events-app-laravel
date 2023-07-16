@extends('components.layouts.app', ['title' => 'Profile'])

@section('content')

<div class="md:mx-8 md:my-6">
    <header class="mb-4">
        <h2 class="text-lg font-medium text-gray-700">
            {{ __('Información de ') }}
            <span class="font-bold text-gray-900"> {{ $user->name }}</span>
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Actualice la información de perfil y la dirección de correo electrónico de su cuenta.") }}
        </p>
    </header>
    <form>
        <div class="mb-6">
            <x-utils.input-label for="username" :value="__('Username')" />
            <div class="relative mt-2">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                    </svg>
                </div>
                <x-utils.text-input id="username" name="username" type="text" :value="old('username', $user->username)" placeholder="{{ $user->username }}" disabled />
            </div>
        </div>
        <div class="mb-6">
            <x-utils.input-label for="email" :value="__('Email')" />
            <div class="relative mt-2">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                        <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                        <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                    </svg>
                </div>
                <x-utils.text-input id="email" name="email" type="email" :value="old('email', $user->email)" placeholder="{{ $user->email }}" disabled />
            </div>
        </div>
        <div class="mb-6">
            <x-utils.input-label for="password" :value="__('Contraseña')" />
            <div class="relative mt-2">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="1em" viewBox="0 0 448 512">
                        <path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z" />
                    </svg>
                </div>
                <x-utils.text-input id="password" name="password" type="password" :value="old('password', $user->password)" placeholder="{{ $user->password }}" disabled />
            </div>
        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Actualizar</button>
    </form>
</div>

@endsection
