<section>
    <div class="bg-slate-100">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-10">
            @if ($posts->count())
            <div class="space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0 lg:gap-y-9">
                @foreach ($posts as $post)
                <div class="group relative shadow-md bg-white rounded-md">
                    <div class="relative h-80 w-full overflow-hidden rounded-t-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                        <img src="{{ asset('storage/' . $post->imagen) }}" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="h-full w-full object-cover object-center">
                    </div>
                    <div class="px-2 space-y-2 mt-2 mb-3">
                        @if ($post->categories()->count() > 0)
                        <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                            # {{ $post->categories()->first()->title }}
                        </span>
                        @else
                        <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                            # Sin categoría
                        </span>
                        @endif
                        <h3 class="text-base font-circular-medium text-gray-900">
                            <a href="{{route('posts.show',$post->slug)}}" class="hover:underline hover:text-blue-700">
                                {{ $post->title }}
                            </a>
                        </h3>
                        <p class="text-sm font-circular-light text-gray-600">
                            {{ $post->extract }}
                        </p>

                    </div>
                </div>
                @endforeach
            </div>
            <div class="pt-9">
                <div class="">
                    {{ $posts->links() }}
                </div>
            </div>
            @else
            <div class="py-10">
                <div class="rounded-md text-center">
                    <p class="text-lg font-circular-book text-gray-700">No hay posts disponibles.</p>
                </div>
            </div>
            @endif

        </div>
    </div>

</section>
