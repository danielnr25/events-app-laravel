<x-layouts.guest title="Blog">

    <div class="lg:py-10 space-y-12 bg-slate-100">
        <h1 class="text-center text-black font-bold md:text-3xl text-2xl my-5">{{__('Nuestros blog de Eventos')}}</h1>
        <form class="flex items-center justify-center px-8">
            <input type="text" placeholder="Busqueda ..." class="rounded-s-md clasered w-96 border-gray-800 border-2 placeholder:font-semibold font-semibold focus:border-gray-900 focus:ring-gray-800 " />
            <input type="submit" value="Buscar" class="bg-blue-700 text-white border px-3 py-2.5 font-bold rounded-r-md cursor-pointer hover:bg-gray-950 hover:text-white w-28" />
        </form>
        <div class="flex justify-between lg:px-10 px-4 items-center">
            <h1 class="text-black text-2xl font-bold md:text-3xl">Publicaciones Recientes</h1>
            <button class="underline py-1.5 px-3 md:py-2 md:px-3 font-semibold text-black rounded-lg  hover:text-indigo-600">Ver más</button>
        </div>

        <div class="flex justify-center px-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out">
                    <img src="https://images.pexels.com/photos/16948115/pexels-photo-16948115/free-photo-of-hombre-traje-pareja-mujer.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="rounded-t-lg object-cover cursor-grabbing" />
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-black">Eventos de Bodas</h2>
                        <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
                        <div class="flex justify-between items-center mt-4">
                            <Link to="/blog" class="text-blue-600 hover:underline">Leer más</Link>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out">
                    <img src="https://images.pexels.com/photos/16948115/pexels-photo-16948115/free-photo-of-hombre-traje-pareja-mujer.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="rounded-t-lg cursor-grabbing" />
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-black">Eventos de Bodas</h2>
                        <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
                        <div class="flex justify-between items-center mt-4">
                            <Link to="/blog" class="text-blue-600 hover:underline">Leer más</Link>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out">
                    <img src="https://images.pexels.com/photos/16948115/pexels-photo-16948115/free-photo-of-hombre-traje-pareja-mujer.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="rounded-t-lg cursor-grabbing" />
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-black">Eventos de Bodas</h2>
                        <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
                        <div class="flex justify-between items-center mt-4">
                            <Link to="/blog" class="text-blue-600 hover:underline">Leer más</Link>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out">
                    <img src="https://images.pexels.com/photos/16948115/pexels-photo-16948115/free-photo-of-hombre-traje-pareja-mujer.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="rounded-t-lg cursor-grabbing" />
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-black">Eventos de Bodas</h2>
                        <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
                        <div class="flex justify-between items-center mt-4">
                            <Link to="/blog" class="text-blue-600 hover:underline">Leer más</Link>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out">
                    <img src="https://images.pexels.com/photos/16948115/pexels-photo-16948115/free-photo-of-hombre-traje-pareja-mujer.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="rounded-t-lg cursor-grabbing" />
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-black">Eventos de Bodas</h2>
                        <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
                        <div class="flex justify-between items-center mt-4">
                            <Link to="/blog" class="text-blue-600 hover:underline">Leer más</Link>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out">
                    <img src="https://images.pexels.com/photos/16948115/pexels-photo-16948115/free-photo-of-hombre-traje-pareja-mujer.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="rounded-t-lg cursor-grabbing" />
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-black">Eventos de Bodas</h2>
                        <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
                        <div class="flex justify-between items-center mt-4">
                            <Link to="/blog" class="text-blue-600 hover:underline">Leer más</Link>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</x-layouts.guest>
