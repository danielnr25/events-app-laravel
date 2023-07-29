<x-layouts.guest title="Login">

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-blue-600.svg" alt="Workflow">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-wide text-gray-900">Ingrese sus credenciales</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('login') }}" method="POST">
                @csrf

                @if(session('mesagge'))
                <p class="text-white bg-red-500 py-2 my-2 rounded-lg text-sm text-center">{{ session('mesagge') }}</p>
                @endif
                <div>
                    <x-utils.input-label for="email" :value="__('Email')" />
                    <div class="mt-2">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                    <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                    <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                </svg>
                            </div>
                            <x-utils.text-input id="email" name="email" type="email" :value="old('email')" autofocus />
                        </div>
                        <x-utils.input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <x-utils.input-label for="password" :value="__('Contraseña')" />
                        <div class="text-sm">
                            <a href="#" class="font-semibold text-blue-600 hover:text-blue-500">Forgot password?</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="1em" viewBox="0 0 448 512">
                                    <path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z" />
                                </svg>
                            </div>

                            <x-utils.text-input id="password" name="password" type="password" />
                        </div>
                        <x-utils.input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                </div>

                <div>
                    <x-utils.primary-button>
                        {{ __('Ingresar') }}
                    </x-utils.primary-button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-800">
                No tienes cuenta?
                <a href="{{ route('register') }}" class="font-semibold leading-6 text-blue-600 hover:text-blue-500">
                    {{ __('Registrarse') }}
                </a>
            </p>
        </div>
    </div>

</x-layouts.guest>
