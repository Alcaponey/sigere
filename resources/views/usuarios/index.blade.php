<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-10 lg:px-12">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <script src="https://cdn.tailwindcss.com"></script>
                <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
                <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

                <!-- ====== Table Section Start -->
                <section class="bg-white py-10 lg:py-[10px]">
                    <div class="container">
                        <div class="py-2">
                            <x-jet-button>
                                <a class="text-sm text-white-600 hover:text-white-900" 
                                    href="{{ route('createUser') }}">
                                    {{ 'Crear' }}
                                </a>
                            </x-jet-button>
                        </div>
                        <div class="flex flex-wrap -mx-4">
                            <div class="w-full px-4">
                                <div class="max-w-full overflow-x-auto">
                                    <table class="table-auto w-full">
                                        <thead>
                                            <tr class="bg-sky-600 text-center">
                                                <th
                                                    class="w-1/6 min-w-[160px] text-lg font-semibold text-white py-4 lg:py-7 px-3 lg:px-4 border-l border-transparent">
                                                    Nombre</th>
                                                <th
                                                    class="w-1/6 min-w-[160px] text-lg font-semibold text-white py-4 lg:py-7 px-3 lg:px-4 border-l border-transparent">
                                                    No Documento</th>
                                                <th
                                                    class="w-1/6 min-w-[160px] text-lg font-semibold text-white py-4 lg:py-7 px-3 lg:px-4 border-l border-transparent">
                                                    Tel??fono</th>
                                                <th
                                                    class="w-1/6 min-w-[160px] text-lg font-semibold text-white py-4 lg:py-7 px-3 lg:px-4 border-l border-transparent">
                                                    Email</th>
                                                <th
                                                    class="w-1/6 min-w-[160px] text-lg font-semibold text-white py-4 lg:py-7 px-3 lg:px-4 border-l border-transparent">
                                                    Rol</th>
                                                <th
                                                    class="w-1/6 min-w-[160px] text-lg font-semibold text-white py-4 lg:py-7 px-3 lg:px-4 border-l border-transparent">
                                                    Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody
                                            @foreach ($usuarios as $usuario)
                                                <tr>
                                                    <td
                                                        class="text-center text-dark font-medium text-base py-5 px-2 bg-white border-b border-[#E8E8E8]">
                                                        {{ $usuario->name }}</td>
                                                    <td
                                                        class="text-center text-dark font-medium text-base py-5 px-2 bg-white border-b border-[#E8E8E8]">
                                                        {{ $usuario->numDocument }}</td>
                                                    <td
                                                        class="text-center text-dark font-medium text-base py-5 px-2 bg-white border-b border-[#E8E8E8]">
                                                        {{ $usuario->phone }}</td>
                                                    <td
                                                        class="text-center text-dark font-medium text-base py-5 px-2 bg-white border-b border-[#E8E8E8]">
                                                        {{ $usuario->email }}</td>
                                                    <td
                                                        class="text-center text-dark font-medium text-base py-5 px-2 bg-white border-b border-[#E8E8E8]">
                                                        {{ $usuario->role }}</td>
                                                    <td>
                                                        <center>
                                                            <x-jet-button>
                                                                <a class="text-sm text-white-600 hover:text-white-900"
                                                                    href="{{ route('editUsuario', $usuario->id) }}">
                                                                    {{ 'Editar' }}
                                                                </a>
                                                            </x-jet-button>
                                                            <x-jet-button>
                                                                <a class="text-sm text-white-600 hover:text-white-900"
                                                                    href="{{ route('deleteUsuario', $usuario->id) }}">
                                                                    {{ 'Borrar' }}
                                                                </a>
                                                            </x-jet-button>
                                                        </center>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ====== Table Section End -->
            </div>
        </div>
    </div>
</x-app-layout>
