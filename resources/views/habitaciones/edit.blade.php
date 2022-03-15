<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo"></x-slot>

        <x-jet-validation-errors class="mb-1" />

        <form method="POST" action="{{ route('updateRoom',$room->id) }}">
            @csrf

            <div>
                <x-jet-label for="number" value="{{ __('Numero') }}" />
                <x-jet-input id="number" class="block mt-1 w-full" type="text" name="number" value="{{$room->number}}" required
                    autofocus autocomplete="number" />
            </div>

            <div class="mt-1">
                <x-jet-label for="type" value="{{ __('Tipo') }}" />
                <select id="type" class="block mt-1 w-full" type="text" name="type" required autofocus
                    autocomplete="type">
                    <option selected>{{$room->type}}</option>
                    <option value="Secilla">Sencilla</option>
                    <option value="Doble">Doble</option>
                    <option value="Cuadruple">Cuadruple</option>
                </select>
            </div>

            <div class="mt-2">
                                <x-jet-label for="available" value="{{ __('Disponibilidad') }}" />
                <select id="available" class="block mt-1 w-full" type="text" name="available" required autofocus
                    autocomplete="available">
                    <option selected>{{$room->available}}</option>
                    <option value="Disponible">Disponible</option>
                    <option value="No disponible">No disponible</option>                                        
                </select>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-2">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>',
                                'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>',
                            ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-3">
                <x-jet-button class="ml-3">
                    {{ __('Actualizar') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
