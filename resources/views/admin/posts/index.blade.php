@extends('components.layouts.app', ['title' => 'Publicaciones'])

@section('content')
<div class="flex items-center justify-between mt-5 mx-4">
    <h1 class="text-xl font-semibold ">
        {{ __('Publicaciones') }}
    </h1>
    <a href="{{''}}" class="text-sm text-white bg-gray-900 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg px-4 py-1.5 text-center ">Nuevo</a>
</div>


<div class="relative overflow-x-auto mt-10 sm:rounded-lg">
    <table class="w-full text-sm text-gray-800 ">
        <thead class="items-center text-center text-sm text-gray-900 uppercase bg-indigo-200 ">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Titulo
                </th>
                <th scope="col" class="px-6 py-3">
                    Descripción
                </th>
                <th scope="col" class="px-6 py-3">
                    Categoria
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
            <tr class="bg-gray-100 font-medium border-b text-center">
                <td class="py-6">
                    Apple MacBook Pro 17"
                </td>
                <td class="py-6">
                    Silver
                </td>
                <td class="py-6">
                    Laptop
                </td>
                <td class="py-6">
                    $2999
                </td>
                <td class="py-6 flex gap-2 justify-center">
                    <a href="" class="font-medium text-gray-50 dark:text-red-500 bg-green-500 py-1.5 px-2 rounded-md"> Editar</a>
                    <a href="" class="font-medium text-gray-50 dark:text-red-500 bg-red-500 py-1.5 px-2 rounded-md"> Borrar</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
