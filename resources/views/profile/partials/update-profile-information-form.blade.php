<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Atualize as informações de perfil e endereço de e-mail da sua conta.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Clique aqui para reenviar o e-mail de verificação.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('Um novo link de verificação foi enviado para seu endereço de e-mail.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="w-full flex gap-4">
            <div class="w-full">
                <x-input-label for="cpf" :value="__('CPF')"/>
                <x-text-input id="cpf" name="cpf" type="text" class="mt-1 block w-full" :value="old('cpf', $user->cpf)"
                              required autofocus autocomplete="cpf"/>
                <x-input-error class="mt-2" :messages="$errors->get('cpf')"/>
            </div>

            <div class="w-full">
                <x-input-label for="coffito" :value="__('COFFITO')"/>
                <x-text-input id="coffito" name="coffito" type="text" class="mt-1 block w-full"
                              :value="old('coffito', $user->coffito)"
                              required autofocus autocomplete="coffito" placeholder="000000-X"/>
                <x-input-error class="mt-2" :messages="$errors->get('coffito')"/>
            </div>

            <div class="w-full">
                <x-input-label for="telefone" :value="__('Telefone')"/>
                <x-text-input id="telefone" name="telefone" type="text" class="mt-1 block w-full"
                              :value="old('telefone', $user->telefone)"
                              required autofocus autocomplete="telefone"/>
                <x-input-error class="mt-2" :messages="$errors->get('telefone')"/>
            </div>
        </div>

        <div class="w-full">
            <x-input-label for="endereco" :value="__('Endereço')"/>
            <x-text-input id="endereco" name="endereco_prof" type="text" class="mt-1 block w-full"
                          :value="old('endereco', $user->endereco)"
                          required autofocus autocomplete="endereco"/>
            <x-input-error class="mt-2" :messages="$errors->get('endereco')"/>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="bg-button-primary">{{ __('Salvar') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
