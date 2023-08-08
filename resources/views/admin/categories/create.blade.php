<x-layouts.app title="Dashboard">

    <div class="bg-white shadow-md rounded-md px-5 py-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-xl font-semibold my-4">Registrar Categoría</h1>
            <div>
                <a href="{{ route('dashboard.categories.index') }}" class="bg-gray-900 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded-md">
                    Regresar
                </a>
            </div>
        </div>

        <form action="{{ route('dashboard.categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Titulo</label>
                    <input type="text" name="title" id="title" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('title') border-red-500 @enderror">
                    @error('title')
                    <p class=" mt-2 text-sm text-red-600"><span class="font-medium">{{ $message }}</span>.</p>
                    @enderror
                </div>
                <div>
                    <label for="slug" class="block mb-2 text-sm font-medium text-gray-900">Slug</label>
                    <input type="text" id="slug" name="slug" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('slug') border-red-500 @enderror ">
                    @error('slug')
                    <p class=" mt-2 text-sm text-red-600"><span class="font-medium">{{ $message }}</span>.</p>
                    @enderror
                </div>
            </div>

            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900" for="image">Imagen</label>
                <input class="block w-full text-sm text-gray-900 border rounded-lg cursor-pointer bg-gray-50 focus:outline-none @error('image') border-red-500 @enderror " name="image"="image" type="file">
                @error('image')
                <p class=" mt-2 text-sm text-red-600"><span class="font-medium">{{ $message }}</span>.</p>
                @enderror
            </div>

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm w-full sm:w-auto px-5 py-2.5 text-center">Registrar</button>
        </form>


    </div>
</x-layouts.app>
