<x-layouts.app title="Usuarios">
    <div class="bg-white shadow-md rounded-md px-5 py-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-xl font-semibold my-4">Listado de Usuarios</h1>
        </div>

        @if ($users->count() > 0)
        <div class="relative overflow-x-auto mt-10 sm:rounded-lg">
            <table class="w-full text-sm text-gray-800 ">
                <thead class="items-center text-center text-sm text-gray-900 uppercase bg-indigo-200 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Empresa
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Role
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr class="bg-gray-100 font-medium border-b text-center">
                        <td class="py-6">
                            {{ $user->id }}
                        </td>
                        <td class="py-6">
                            {{ $user->empresa }}
                        </td>
                        <td class="py-6">
                            {{ $user->name }}
                        </td>
                        <td class="py-6">
                            {{ $user->email }}
                        </td>
                        <td class="py-6">
                            @if ($user->role == "admin")
                            <span class="bg-blue-300 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                Admin
                            </span>
                            @else
                            <span class="bg-green-300 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                                User
                            </span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $users->links() }}
            </div>
            @else
            <div class="px-10 py-8 space-y-4">
                <h1 class="text-xl text-blue-800 md:text-2xl font-circular-medium mb-2 tracking-wide leading-7">No hay usuarios disponibles</h1>
            </div>
            @endif
        </div>
    </div>
</x-layouts.app>
