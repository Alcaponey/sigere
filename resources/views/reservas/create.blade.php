<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo"></x-slot>

        <x-jet-validation-errors class="mb-1" />

        <form method="POST" action="{{ route('storeBooking') }}">
            @csrf

            <div>
                <x-jet-label for="numBooking" value="{{ __('No Reserva') }}" />
                <x-jet-input id="numBooking" class="block mt-1 w-full" type="text" name="numBooking" value="{{$booking->numBooking}}" required
                    autofocus autocomplete="numBooking" />
            </div>

            <div>
                <x-jet-label for="numDocument" value="{{ __('No Documento') }}" />
                <x-jet-input id="numDocument" class="block mt-1 w-full" type="text" name="numDocument" value="{{$booking->numDocument}}" required
                    autofocus autocomplete="numDocument" />
            </div>

            <div>
                <x-jet-label for="typeRoom" value="{{ __('Tipo Habitación') }}" />
                <x-jet-input id="typeRoom" class="block mt-1 w-full" type="text" name="typeRoom" value="{{$booking->typeRoom}}" required
                    autofocus autocomplete="typeRoom" />
            </div>

            <div>
                <x-jet-label for="numRoom" value="{{ __('No Habitación') }}" />
                <x-jet-input id="numRoom" class="block mt-1 w-full" type="text" name="numRoom" value="{{$booking->numRoom}}" required
                    autofocus autocomplete="numRoom" />
            </div>

            <div>
                <x-jet-label for="dateArrival" value="{{ __('Llegada') }}" />
                <x-jet-input id="dateArrival" class="block mt-1 w-full" type="text" name="dateArrival" value="{{$booking->dateArrival}}" required
                    autofocus autocomplete="dateArrival" />
            </div>

            <div>
                <x-jet-label for="dateOutput" value="{{ __('Salida') }}" />
                <x-jet-input id="dateOutput" class="block mt-1 w-full" type="text" name="dateOutput" value="{{$booking->dateOutput}}" required
                    autofocus autocomplete="dateOutput" />
            </div>

            <div>
                <x-jet-label for="costBooking" value="{{ __('Costo') }}" />
                <x-jet-input id="costBooking" class="block mt-1 w-full" type="text" name="costBooking" value="{{$booking->costBooking}}" required
                    autofocus autocomplete="costBooking" />
            </div>
            
            <div class="flex items-center justify-end mt-3">
                <x-jet-button class="ml-3">
                    {{ __('Crear') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
