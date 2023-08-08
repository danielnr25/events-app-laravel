<x-layouts.guest title="{{ $event->title }}">

    <section>
        <div class="max-w-7xl mx-auto py-10 px-5">
            <div class="lg:flex">
                <div class="lg:w-3/4 pr-5">
                    <h1 class="text-2xl md:text-4xl font-circular-medium tracking-tight text-blue-900">
                        {{ $event->title }}
                    </h1>
                    <div class="max-w-4xl pt-3">
                        <p class="text-gray-700 font-circular-light text-[17px] text-justify">
                            {{ $event->description }}
                        </p>
                    </div>

                    <div class="max-w-4xl py-3">
                        <div class="bg-opacity-5 bg-gray-100 rounded-lg py-3">
                            <h1 class="font-circular-medium text-xl cursor-pointer focus:text-blue-950">Nuestro servicio</h1>

                            <div class="bg-slate-200 p-2.5 mt-3 rounded-lg shadow-md cursor-pointer space-y-2">
                                <h2 class="text-lg mt-2 font-circular-medium text-blue-950">Servicio</h2>
                                <p class="text-base font-circular-light text-gray-700">{{ $event->extract }}</p>
                                <h2 class="text-lg mt-2 font-circular-medium text-blue-950">Dirección</h2>
                                <p class="text-base font-circular-light text-gray-700">{{ $event->address }} - {{ $event->city }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="max-w-4xl py-3">
                        <div class="bg-opacity-5 bg-gray-100 rounded-lg py-3">
                            <h1 class="font-circular-medium text-xl cursor-pointer focus:text-blue-950">Contacto</h1>

                            <div class="bg-slate-200 p-2.5 mt-3 rounded-lg shadow-md cursor-pointer space-y-2">
                                <h2 class="text-lg mt-2 font-circular-medium text-blue-950">Representante</h2>
                                <p class="text-base font-circular-light text-gray-700">{{ $event->contact }}</p>
                                <h2 class="text-lg mt-2 font-circular-medium text-blue-950">Télefono</h2>
                                <p class="text-base font-circular-light text-gray-700">{{ $event->phone }}</p>
                                <h2 class="text-lg mt-2 font-circular-medium text-blue-950">Nuestra web</h2>
                                <a href="{{$event->web }}" class="text-lg font-circular-light text-gray-700 hover:text-blue-700 hover:underline">
                                    {{ $event->web }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/4 mt-6 lg:mt-0">

                    <img src="{{ asset('storage/' . $event->imagen) }}" class="rounded-md object-cover mt-2" alt="{{$event->title}}">

                    <div class="py-10">
                        <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block w-full px-4 py-3 font-medium text-white bg-blue-700 rounded-lg text-center mb-4 hover:bg-blue-600" type="button">
                            Presupuesto
                        </button>
                        @include('layouts.events.modals.presupuesto')
                        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block w-full px-4 py-3 font-medium text-white bg-blue-700 rounded-lg text-center hover:bg-blue-600" type="button">
                            Contactar
                        </button>
                        @include('layouts.events.modals.contactar')
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-layouts.guest>
