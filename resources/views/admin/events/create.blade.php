<x-layouts.app title="Dashboard">

    <div class="bg-white shadow-md rounded-md px-5 py-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-xl font-semibold my-4">Registrar Evento</h1>
            <div>
                <a href="{{ route('dashboard.events.index') }}" class="bg-gray-900 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded-md">
                    Regresar
                </a>
            </div>
        </div>

        <form action="{{route('dashboard.events.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Titulo</label>
                    <input type="text" id="title" name="title" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('title') border-red-500 @enderror">
                    @error('title')
                    <p class=" mt-2 text-sm text-red-600"><span class="font-medium">{{ $message }}</span>.</p>
                    @enderror
                </div>
                <div>
                    <label for="slug" class="block mb-2 text-sm font-medium text-gray-900">Slug</label>
                    <input type="text" id="slug" name="slug" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('slug') border-red-500 @enderror">
                    @error('slug')
                    <p class=" mt-2 text-sm text-red-600"><span class="font-medium">{{ $message }}</span>.</p>
                    @enderror
                </div>
                <div>
                    <label for="extract" class="block mb-2 text-sm font-medium text-gray-900">Reseña del evento</label>
                    <textarea id="extract" name="extract" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border focus:ring-blue-500 focus:border-blue-500 @error('extract') border-red-500 @enderror" placeholder="Reseña..."></textarea>
                    @error('extract')
                    <p class=" mt-2 text-sm text-red-600"><span class="font-medium">{{ $message }}</span>.</p>
                    @enderror
                </div>
                <div>
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Descripción</label>
                    <textarea id="description" name="description" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border focus:ring-blue-500 focus:border-blue-500 @error('description') border-red-500 @enderror" placeholder="Descripción..."></textarea>
                    @error('description')
                    <p class=" mt-2 text-sm text-red-600"><span class="font-medium">{{ $message }}</span>.</p>
                    @enderror
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="imagen">Imagen</label>
                    <input class="block w-full text-sm text-gray-900 border rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('imagen') border-red-500 @enderror" id="imagen" name="imagen" type="file">
                    @error('imagen')
                    <p class=" mt-2 text-sm text-red-600"><span class="font-medium">{{ $message }}</span>.</p>
                    @enderror
                </div>
                <div>
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Precio del evento aproximado</label>
                    <input type="number" id="price" name="price" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('price') border-red-500 @enderror" placeholder="$ 198.43">
                    @error('price')
                    <p class=" mt-2 text-sm text-red-600"><span class="font-medium">{{ $message }}</span>.</p>
                    @enderror
                </div>
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Télefono</label>
                    <input type="text" id="phone" name="phone" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('phone') border-red-500 @enderror" placeholder="123-345-678">
                    @error('phone')
                    <p class=" mt-2 text-sm text-red-600"><span class="font-medium">{{ $message }}</span>.</p>
                    @enderror
                </div>
                <div>
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Dirección</label>
                    <input type="text" id="address" name="address" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('address') border-red-500 @enderror">
                    @error('address')
                    <p class=" mt-2 text-sm text-red-600"><span class="font-medium">{{ $message }}</span>.</p>
                    @enderror
                </div>
                <div>
                    <label for="city" class="block mb-2 text-sm font-medium text-gray-900">Ciudad</label>
                    <input type="text" id="city" name="city" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('city') border-red-500 @enderror">
                    @error('city')
                    <p class=" mt-2 text-sm text-red-600"><span class="font-medium">{{ $message }}</span>.</p>
                    @enderror
                </div>
                <div>
                    <label for="contact" class="block mb-2 text-sm font-medium text-gray-900">Email del contacto</label>
                    <input type="email" id="contact" name="contact" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('contact') border-red-500 @enderror" placeholder="john.doe@company.com">
                    @error('contact')
                    <p class=" mt-2 text-sm text-red-600"><span class="font-medium">{{ $message }}</span>.</p>
                    @enderror
                </div>
                <div>
                    <label for="web" class="block mb-2 text-sm font-medium text-gray-900">Sitio Web</label>
                    <input type="url" id="web" name="web" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('web') border-red-500 @enderror" placeholder="flowbite.com">
                    @error('web')
                    <p class=" mt-2 text-sm text-red-600"><span class="font-medium">{{ $message }}</span>.</p>
                    @enderror
                </div>
                <div>
                    <label for="categories" class="block mb-2 text-sm font-medium text-gray-900">Categoría del evento</label>
                    <select id="categories" name="category_id" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('categories') border-red-500 @enderror">
                        <option selected>Selecciona una categoría</option>
                        @foreach($categories as $categoryId => $categoryTitle)
                        <option value="{{ $categoryId }}">{{ $categoryTitle }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <p class=" mt-2 text-sm text-red-600"><span class="font-medium">{{ $message }}</span>.</p>
                    @enderror
                </div>
            </div>

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registrar</button>
        </form>

    </div>
</x-layouts.app>
