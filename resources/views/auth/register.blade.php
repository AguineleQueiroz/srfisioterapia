<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nome')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                          :value="old('name')" required autofocus autocomplete="name" placeholder="Jhon Doe"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                          :value="old('email')" required autocomplete="email" placeholder="jhondoe@email.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex gap-4">
            <!-- CPF -->
            <div class="mt-4 w-full">
                <x-input-label for="cpf" :value="__('CPF')" />
                <x-text-input id="cpf" class="block mt-1 w-full" type="text" name="cpf"
                              :value="old('cpf')" required autocomplete="cpf" placeholder="000.000.000-00" />
                <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
            </div>

            <!-- COFFITO -->
            <div class="mt-4 w-full">
                <x-input-label for="coffito" :value="__('COFFITO')" />
                <x-text-input id="coffito" class="block mt-1 w-full" type="text" name="coffito"
                              :value="old('coffito')" required autocomplete="coffito" placeholder="000000-X" />
                <x-input-error :messages="$errors->get('coffito')" class="mt-2" />
            </div>
        </div>

        <!-- Telefone -->
        <div class="mt-4 w-full">
            <x-input-label for="telefone" :value="__('Telefone')" />
            <x-text-input id="telefone" class="block mt-1 w-full" type="text" name="telefone"
                          :value="old('telefone')" required autocomplete="telefone" placeholder="(00)00000-0000" />
            <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
        </div>

        <!-- Endereço -->
        <div class="mt-4">
            <x-input-label for="endereco" :value="__('Endereço')" />
            <x-text-input id="endereco" class="block mt-1 w-full" type="text" name="endereco"
                          :value="old('endereco')" required autocomplete="endereco" placeholder="Av. Madureira, 00" />
            <x-input-error :messages="$errors->get('endereco')" class="mt-2" />
        </div>

        <div class="flex gap-4">
            <!-- Cidade -->
            <div class="mt-4 w-full">
                <x-input-label for="cidade" :value="__('Cidade')"/>
                <select name="cidade" id="cidade"
                        class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <option disabled selected>Sua cidade</option>
                    @foreach( $cidades as $key => $cidade)
                        <option value="{{ $cidade->name }}">{{ $cidade->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Atenção -->
            <div class="mt-4 w-full">
                <x-input-label for="atencao" :value="__('Atenção')"/>
                <select name="atencao" id="atencao"
                        class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <option disabled selected>Sua atenção</option>
                    <option value="basica">Outros</option>
                    <option value="primaria">Primária</option>
                    <option value="secundaria">Secundária</option>
                </select>
            </div>
        </div>

        <div class="flex gap-4">
            <!-- Password -->
            <div class="mt-4 w-full">
                <x-input-label for="password" :value="__('Senha')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" placeholder="********" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4 w-full">
                <x-input-label for="password_confirmation" :value="__('Confirmar Senha')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" placeholder="********" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Já tem uma conta?') }}
            </a>

            <x-primary-button class="ms-4 py-3">
                {{ __('Registrar-se') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
