<x-layouts.app title="Categorias">
    @push('scripts')
    <script>
        // Ocultar la notificación después de 3000 milisegundos (3 segundos)
        setTimeout(function() {
            document.getElementById('notificacion').style.display = 'none';
        }, 2500);
    </script>
    @endpush
    <div class="bg-white shadow-md rounded-md px-5 py-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-xl font-semibold my-4">Listado de Categorias</h1>
            <div>
                <a href="{{ route('dashboard.categories.create')}}" class="bg-gray-900 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded-md">
                    Crear Categoria
                </a>
            </div>
        </div>

        @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert" id="notificacion">
            <strong class="font-bold">Bien hecho!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
        @endif

        @if ($categories->count() > 0)
        <div class="relative overflow-x-auto mt-10 sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-800 ">
                <thead class="text-sm text-gray-900 uppercase bg-indigo-200 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Slug
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Imagen
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr class="bg-gray-100 font-medium border-b">
                        <td class="px-6 py-4">
                            {{ $loop->iteration }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $category->title }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $category->slug }}
                        </td>
                        <td class="px-6 py-4">
                            <img class="h-auto object-cover max-w-[60px]" src="{{ asset('storage/' . $category->image) }}" alt="image-none">
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex space-x-3 items-center">
                                <a href="{{route('dashboard.categories.edit', $category->id)}}" class="font-medium bg-emerald-700 px-2 py-1 rounded-md text-white hover:bg-green-500">Editar</a>
                                <form action="#" method="POST">
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
                {{ $categories->links() }}
            </div>
            @else
            <div class="px-10 py-8 space-y-4">
                <h1 class="text-xl text-blue-800 md:text-2xl font-circular-medium mb-2 tracking-wide leading-7">No hay categorias disponibles</h1>
            </div>
            @endif
        </div>
    </div>
</x-layouts.app>
