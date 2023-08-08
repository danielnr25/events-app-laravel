<section>
    <div class="max-w-5xl mx-auto py-10 px-10">
        <h1 class="text-2xl md:text-4xl font-circular-medium text-blue-800 text-center">
            {{ __("Encontrarás las mejores organizaciones para tu evento con los mejores promotores del Perú") }}
        </h1>
        <p class="py-3 px-5 text-center font-circular-light text-xl text-gray-700">
            Eventos de calidad con los mejores promotores del Perú.
        </p>
    </div>
</section>

<section>
    <div class="md:flex md:items-center md:justify-center">
        <form action="{{ route('eventos.search') }}" method="GET" class="flex px-5">
            <input type="text" name="search" value="{{ old('search') }}" class="w-full md:w-[400px] px-5 py-3 border rounded-md shadow-sm focus:outline-none focus:border-blue-700" placeholder="{{ __("¿Qué evento buscas?") }}">
            <button type="submit" class="ml-1 px-4 py-3 font-medium text-white bg-blue-700 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                {{ __("Buscar") }}
            </button>
        </form>
    </div>
</section>
