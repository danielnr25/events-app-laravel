<div class="mx-auto max-w-7xl px-4 sm:px-5 lg:px-5 pb-10">
    <div class="space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0 lg:gap-y-10">
        @forelse ($events as $event)
        <div class="group relative bg-white shadow-md rounded-lg">
            <div class="relative h-80 w-full overflow-hidden rounded-t-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-60">
                <img src="{{ asset('storage/' . $event->imagen) }}" alt="{{ $event->title }}" class="h-full w-full object-cover object-center">
            </div>
            <div class="px-3">
                <h2 class="mt-2 text-base font-circular-medium text-gray-900">
                    <a href="{{ route('eventos.show', ['slug' => $event->slug]) }}" class="hover:underline hover:text-blue-700">
                        {{ $event->title }}
                    </a>
                </h2>
                <p class="pb-3 text-sm text-gray-900">
                    {{ $event->extract }}
                </p>
            </div>
        </div>
        @empty
        <div class="bg-gray-700 py-2 rounded-md text-center">
            <p class="text-lg font-circular-book text-gray-100">No hay eventos disponibles en esta categoría.</p>
        </div>
        @endforelse
    </div>
    <div class="pt-10">
        {{ $events->links() }}
    </div>
</div>
