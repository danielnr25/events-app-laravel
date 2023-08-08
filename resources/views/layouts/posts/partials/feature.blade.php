<div class="max-w-5xl mx-auto py-10 px-10">
    <h1 class="text-center text-black font-bold md:text-3xl text-2xl my-5">{{__('Nuestros articulos de Eventos')}}</h1>
</div>

<section>
    <div class="md:flex md:items-center md:justify-center">
        <form action="{{ route('blog.search') }}" method="GET" class="flex px-5">
            <input type="text" name="search" value="{{ old('search') }}" class="w-full md:w-[400px] px-5 py-3 border rounded-md shadow-sm focus:outline-none focus:border-blue-700" placeholder="{{ __("¿Qué posts buscas?") }}">
            <button type="submit" class="ml-1 px-4 py-3 font-medium text-white bg-blue-700 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                {{ __("Buscar") }}
            </button>
        </form>
    </div>
</section>
