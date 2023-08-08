<x-layouts.app title="Posts">
    <div class="bg-white shadow-md rounded-md px-5 py-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-xl font-semibold my-4">Listado de Posts</h1>
            <div>
                <a href="{{route('dashboard.posts.create') }}" class="bg-gray-900 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded-md">
                    Crear Post
                </a>
            </div>
        </div>
        @if ($posts->count() > 0)
        <div class="relative overflow-x-auto mt-10 sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-800 ">
                <thead class="text-sm text-gray-900 uppercase bg-indigo-200 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Titulo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Imagen
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Estado
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr class="bg-gray-100 font-medium border-b">
                        <td class="px-6 py-4">
                            {{ $loop->iteration }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $post->title }}
                        </td>
                        <td class="px-6 py-4">
                            <img class="h-auto object-cover max-w-[60px]" src="{{ asset('storage/' . $post->imagen) }}" " alt=" image-none">
                        </td>
                        <td class="px-6 py-4">
                            @if ($post->published == "ACTIVE")
                            <span class="bg-green-300 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                                Activo
                            </span>
                            @else
                            <span class="bg-red-300 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">
                                Inactivo
                            </span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex space-x-3 items-center">
                                <a href="{{ route('dashboard.posts.edit',$post->id ) }}" class="font-medium bg-emerald-700 px-2 py-1 rounded-md text-white hover:bg-green-500">Editar</a>
                                <form action="{{ route('dashboard.posts.destroy', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="font-medium bg-red-700 px-2 py-1 rounded-md text-white hover:bg-red-500">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $posts->links() }}
            </div>
            @else
            <div class="px-10 py-8 space-y-4">
                <p class="text-center text-lg text-blue-800 md:text-xl font-circular-medium mb-2 tracking-wide leading-7">No hay posts disponibles</p>
            </div>
            @endif
        </div>
    </div>
</x-layouts.app>
