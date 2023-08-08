<x-layouts.guest title="{{ $post->title }}">
    <div class="mx-auto max-w-7xl lg:px-4 py-10 bg-lights-sun">
        <div class="relative px-4 sm:px-8 lg:px-8">
            <div class="max-w-full mx-auto">
                <div class="xl:relative">
                    <div class="max-w-4xl mx-auto">
                        <header class="flex flex-col">
                            <h1 class="mt-6 text-4xl font-circular-medium tracking-tight text-gray-900 sm:text-5xl">
                                <span class="block xl:inline">{{ $post->title }}</span>
                            </h1>
                            <time class="flex items-center order-first text-base text-gray-700">
                                <span class="h-4 w-0.5 rounded-full bg-zinc-900"></span>
                                <span class="ml-3">
                                    {{ $post->created_at->format('d/m/Y') }}
                                </span>
                            </time>

                        </header>

                        <div class="inline-block space-x-4 mt-4">
                            <a href="{{route('post') }}" class="inline-block text-blue-700 before:content-['#']">
                                @if ($post->categories()->count() > 0)
                                <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                    {{ $post->categories()->first()->title }}
                                </span>
                                @else
                                <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                    # Sin categoría
                                </span>
                                @endif
                            </a>
                        </div>

                        <div class="mt-8 prose text-gray-900 dark:prose-invert">
                            <p class="text-justify font-circular-light">
                                {{ $post->extract }}
                            </p>
                            <img src="{{ asset('storage/' . $post->imagen) }}" alt="{{$post->title }}" class="rounded-lg w-full md:h-[350px] lg:h-[400px] object-cover cursor-grabbing" />
                            <p class="text-justify font-circular-light">
                                {{ $post->description }}
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.guest>
