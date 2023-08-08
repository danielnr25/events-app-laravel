<x-layouts.guest title="Registro">

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-xl">
            <div class="w-full max-w-xl p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
                <form class="space-y-6" action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <h2 class="mt-4 text-center text-2xl font-bold leading-9 tracking-wide text-gray-900"> Registrate en Eventos</h2>
               
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <x-utils.input-label for="empresa" :value="__('Empresa')" />
                            <div class="mt-2">
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" class="w-4 h-4 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 384 512">
                                            <path d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h96c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16z" />
                                        </svg>
                                    </div>
                                    <x-utils.text-input id="empresa" name="empresa" type="text" autofocus :value="old('empresa')" />
                                </div>
                                <x-utils.input-error :messages="$errors->get('empresa')" class="mt-2" />
                            </div>
                        </div>
                        <div>
                            <x-utils.input-label for="name" :value="__('Nombre completo')" />
                            <div class="mt-2">
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                                        </svg>
                                    </div>
                                    <x-utils.text-input id="name" name="name" type="text" autofocus :value="old('name')" />
                                </div>
                                <x-utils.input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                        </div>
                        <div>
                            <x-utils.input-label for="username" :value="__('Username')" />
                            <div class="mt-2">
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                                        </svg>
                                    </div>
                                    <x-utils.text-input id="username" name="username" type="text" autofocus :value="old('username')" />
                                </div>
                                <x-utils.input-error :messages="$errors->get('username')" class="mt-2" />
                            </div>
                        </div>
                        <div>
                            <x-utils.input-label for="email" :value="__('Email')" />
                            <div class="mt-2">
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                            <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                            <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                        </svg>
                                    </div>
                                    <x-utils.text-input id="email" name="email" type="email" :value="old('email')" />
                                </div>
                                <x-utils.input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center justify-between">
                                <x-utils.input-label for="password" :value="__('Contraseña')" />
                            </div>
                            <div class="mt-2">
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="1em" viewBox="0 0 448 512">
                                            <path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z" />
                                        </svg>
                                    </div>
                                    <x-utils.text-input id="password" name="password" type="password" autocomplete="current-password" />
                                </div>
                                <x-utils.input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center justify-between">
                                <x-utils.input-label for="password" :value="__('Confirmar Contraseña')" />
                            </div>
                            <div class="mt-2">
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="1em" viewBox="0 0 448 512">
                                            <path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z" />
                                        </svg>
                                    </div>
                                    <x-utils.text-input id="password_confirmation" name="password_confirmation" type="password" autocomplete="current-password" />
                                </div>
                                <x-utils.input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                        </div>
                    </div>
                    <div>
                        <x-utils.primary-button>
                            {{ __('Registrarse') }}
                        </x-utils.primary-button>
                    </div>
                </form>
                <p class="mt-10 text-center text-sm text-gray-800 dark:text-gray-200">
                    Ya tienes cuenta?
                    <a href="{{ route('login') }}" class="font-semibold leading-6 text-blue-600 hover:text-blue-500">
                        {{ __('Login') }}
                    </a>
                </p>
            </div>
        </div>
    </div>

</x-layouts.guest>
