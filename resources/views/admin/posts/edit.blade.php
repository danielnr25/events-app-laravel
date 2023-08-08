<x-layouts.app title="Dashboard">

    <div class="bg-white shadow-md rounded-md px-5 py-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-xl font-semibold my-4">Modificar Post</h1>
            <div>
                <a href="{{ route('dashboard.posts.index') }}" class="bg-gray-900 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded-md">
                    Regresar
                </a>
            </div>
        </div>

        <form action="{{route('dashboard.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Titulo</label>
                    <input type="text" id="title" name="title" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('title') border-red-500 @enderror" value="{{ old('title', $post->title )}}">
                    @error('title')
                    <p class=" mt-2 text-sm text-red-600"><span class="font-medium">{{ $message }}</span>.</p>
                    @enderror
                </div>
                <div>
                    <label for="slug" class="block mb-2 text-sm font-medium text-gray-900">Slug</label>
                    <input type="text" id="slug" name="slug" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('slug') border-red-500 @enderror" value="{{ old('slug', $post->slug )}}">
                    @error('slug')
                    <p class=" mt-2 text-sm text-red-600"><span class="font-medium">{{ $message }}</span>.</p>
                    @enderror
                </div>
                <div>
                    <label for="extract" class="block mb-2 text-sm font-medium text-gray-900">Reseña del post</label>
                    <textarea id="extract" name="extract" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border focus:ring-blue-500 focus:border-blue-500 @error('extract') border-red-500 @enderror" placeholder="Reseña...">{{ old('extract', $post->extract) }}</textarea>
                    @error('extract')
                    <p class=" mt-2 text-sm text-red-600"><span class="font-medium">{{ $message }}</span>.</p>
                    @enderror
                </div>
                <div>
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Descripción</label>
                    <textarea id="description" name="description" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border focus:ring-blue-500 focus:border-blue-500 @error('description') border-red-500 @enderror" placeholder="Descripción...">{{ old('description', $post->description) }}</textarea>
                    @error('description')
                    <p class=" mt-2 text-sm text-red-600"><span class="font-medium">{{ $message }}</span>.</p>
                    @enderror
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="imagen">Imagen</label>
                    <input class="block w-full text-sm text-gray-900 border rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('imagen') border-red-500 @enderror" id="imagen" name="imagen" type="file" value="{{ old('imagen', $post->imagen) }}">
                    @error('imagen')
                    <p class=" mt-2 text-sm text-red-600"><span class="font-medium">{{ $message }}</span>.</p>
                    @enderror
                </div>
                <div>
                    <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900">Categoría del evento</label>
                    <select id="category_id" name="category_id" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('category_id') border-red-500 @enderror">
                        @foreach($categories as $categoryId => $categoryTitle)
                        <option value="{{ $categoryId }}" @if($categoryId==$post->category_id) selected @endif>{{ $categoryTitle }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <p class=" mt-2 text-sm text-red-600"><span class="font-medium">{{ $message }}</span>.</p>
                    @enderror
                </div>
            </div>

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Modificar</button>
        </form>

    </div>
</x-layouts.app>
