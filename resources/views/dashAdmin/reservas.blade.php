@extends('adminlte::page')

@section('title', 'Admin')

@section('content')
     <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-3">
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
                                    href="{{ route('createBooking') }}">
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
                                                    class="w-1/6 min-w-[80px] text-base font-semibold text-white py-2 lg:py-5 px-3 lg:px-4 border-collapse border-transparent">
                                                    No Reserva</th>
                                                <th
                                                    class="w-1/6 min-w-[80px] text-base font-semibold text-white py-2 lg:py-5 px-3 lg:px-4 border-collapse border-transparent">
                                                    No Documento</th>
                                                <th
                                                    class="w-1/6 min-w-[80px] text-base font-semibold text-white py-2 lg:py-5 px-3 lg:px-4 border-collapse border-transparent">
                                                    Tipo Habitación</th>
                                                <th
                                                    class="w-1/6 min-w-[80px] text-base font-semibold text-white py-2 lg:py-5 px-3 lg:px-4 border-collapse border-transparent">
                                                    No Habitación</th>
                                                <th
                                                    class="w-1/6 min-w-[80px] text-base font-semibold text-white py-2 lg:py-5 px-3 lg:px-4 border-collapse border-transparent">
                                                    Llegada</th>
                                                <th
                                                    class="w-1/6 min-w-[80px] text-base font-semibold text-white py-2 lg:py-5 px-3 lg:px-4 border-collapse border-transparent">
                                                    Salida</th>
                                                <th
                                                    class="w-1/6 min-w-[80px] text-base font-semibold text-white py-2 lg:py-5 px-3 lg:px-4 border-collapse border-transparent">
                                                    Costo</th>
                                                <th
                                                    class="w-1/6 min-w-[80px] text-base font-semibold text-white py-2 lg:py-5 px-3 lg:px-4 border-collapse border-transparent">
                                                    Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody
                                            @foreach ($bookings as $booking)
                                                <tr>
                                                    <td
                                                        class="text-center text-dark font-medium text-sm py-5 px-2 bg-white border-b border-[#E8E8E8]">
                                                        {{ $booking->numBooking }}</td>
                                                    <td
                                                        class="text-center text-dark font-medium text-sm py-5 px-2 bg-white border-b border-[#E8E8E8]">
                                                        {{ $booking->numDocument }}</td>
                                                    <td
                                                        class="text-center text-dark font-medium text-sm py-5 px-2 bg-white border-b border-[#E8E8E8]">
                                                        {{ $booking->typeRoom }}</td>
                                                    <td
                                                        class="text-center text-dark font-medium text-sm py-5 px-2 bg-white border-b border-[#E8E8E8]">
                                                        {{ $booking->numRoom }}</td>
                                                    <td
                                                        class="text-center text-dark font-medium text-sm py-5 px-2 bg-white border-b border-[#E8E8E8]">
                                                        {{ $booking->dateArrival }}</td>
                                                    <td
                                                        class="text-center text-dark font-medium text-sm py-5 px-2 bg-white border-b border-[#E8E8E8]">
                                                        {{ $booking->dateOutput }}</td>
                                                    <td
                                                        class="text-center text-dark font-medium text-sm py-5 px-2 bg-white border-b border-[#E8E8E8]">
                                                        {{ $booking->costBooking }}</td>
                                                    <td>
                                                        <center>
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <x-jet-button>
                                                                                <a class="text-sm text-white-600 hover:text-white-900"
                                                                                    href="{{ route('editBooking', $booking->id) }}">
                                                                                        {{ 'Editar' }}
                                                                                </a>
                                                                            </x-jet-button>
                                                                        </th>
                                                                        <th>
                                                                            <x-jet-button>
                                                                                <a class="text-sm text-white-600 hover:text-white-900"
                                                                                    href="{{ route('deleteBooking', $booking->id) }}">
                                                                                    {{ 'Borrar' }}
                                                                                </a>
                                                                            </x-jet-button>
                                                                        </th>
                                                                    </tr>                                                                    
                                                                </thead>
                                                            </table> 
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
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
