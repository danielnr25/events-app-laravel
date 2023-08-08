<div class="bg-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-16">
            <h2 class="text-2xl md:text-4xl text-center font-circular-medium text-blue-800">
                Nuestras categorías de eventos
            </h2>
            @if ($categories->count())
            <div class="mt-16 space-y-12 lg:grid lg:grid-cols-4 lg:gap-x-6 lg:space-y-0 lg:gap-y-10">
                @foreach ($categories as $category )
                <div class="group relative bg-white shadow-md rounded-lg">
                    <div class="relative h-80 w-full overflow-hidden rounded-t-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-48">
                        <img src="{{ asset('storage/' . $category->image) }}" alt="{{$category->title}}" class="h-full w-full object-cover object-center">
                    </div>
                    <div class="px-3">
                        <h3 class="mt-2 text-base font-semibold text-gray-900">
                            <a href="{{ route("category",$category->slug) }}">
                                <span class="absolute inset-0"></span>
                                {{ $category->title }}
                            </a>
                        </h3>
                        <p class="text-sm pb-3 text-gray-900">
                            {{ $category->events_count }} paquetes disponibles
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <div class="mt-10 rounded-md text-center">
                <p class="text-lg font-circular-book text-gray-700">No hay categorías disponibles.</p>
            </div>
            @endif
        </div>
    </div>
</div>
