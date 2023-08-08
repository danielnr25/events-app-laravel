<section>

    <div class="max-w-7xl mx-auto py-10 px-5">
        <h1 class="text-2xl md:text-4xl font-circular-medium tracking-tight text-blue-900">
            Categoria de {{$category->title}}
        </h1>
        <div class="max-w-4xl pt-3">
            <p class="text-gray-700 font-circular-light text-lg">
                Ofrecemos los siguientes eventos de {{ $category->title }} en Perú, encontrarás una diversidad de tu preferencia. Si no encuentras lo que buscas, puedes <a href="{{ route('contact') }}" class="text-blue-900 hover:text-blue-800">contactarnos</a> y te ayudaremos a encontrar lo que necesitas.
            </p>
        </div>
    </div>

</section>
