<!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900">
                    Novo Paciente
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">

                <div>
                    <x-input-label for="nome" :value="__('Nome do Paciente')" />
                    <x-text-input id="nome" class="block mt-1 w-full" maxlength="60"
                                  type="text" name="nome" placeholder="ex: João da Silva"
                                  required autocomplete="nome" />

                    <x-input-error :messages="$errors->get('nome')" class="mt-2" />
                </div>

                <div class="flex space-x-4">
                    <div class="w-full">
                        <x-input-label for="cpf" :value="__('Número do CPF')" />
                        <x-text-input id="cpf" class="block mt-1 w-full" maxlength="11"
                                      type="text" name="cpf" placeholder="ex: 000.000.000-00"
                                      required autocomplete="cpf" />

                        <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
                    </div>

                    <div class="w-full">
                        <x-input-label for="cartao_sus" :value="__('Número do Cartão SUS')" />
                        <x-text-input id="cartao_sus" class="block mt-1 w-full" maxlength="15"
                                      type="text" name="cartao_sus" placeholder="ex: 000 0000 0000 0000"
                                      required autocomplete="cartao_sus" />

                        <x-input-error :messages="$errors->get('cartao_sus')" class="mt-2" />
                    </div>

                    <div class="w-full">
                        <x-input-label for="data_nascimento" :value="__('Data de Nascimento')" />
                        <x-text-input id="data_nascimento" class="block mt-1 w-full"
                                      type="date" name="data_nascimento"
                                      required autocomplete="data_nascimento" />

                        <x-input-error :messages="$errors->get('data_nascimento')" class="mt-2" />
                    </div>
                </div>

                <div class="flex space-x-4">
                    <div class="w-full">
                        <x-input-label for="endereco" :value="__('Endereço')" />
                        <x-text-input id="endereco" class="block mt-1 w-full"
                                      type="text" name="endereco" maxlength="150"
                                      placeholder="Av. da Saudade - 100, Consolação, Cidade do Leste"
                                      required autocomplete="endereco" />

                        <x-input-error :messages="$errors->get('endereco')" class="mt-2" />
                    </div>

                    <div class="w-auto">
                        <x-input-label for="telefone" :value="__('Contato')" />
                        <x-text-input id="telefone" class="block mt-1 w-full"
                                      type="text" name="telefone" maxlength="150"
                                      placeholder="(00) 0 0000 0000"
                                      required autocomplete="telefone" />

                        <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
                    </div>
                </div>

                <div class="flex items-center space-x-4">
                    <div class="w-full">
                        <x-input-label for="data_cadastro" :value="__('Data de Cadastro')" />
                        <x-text-input id="data_cadastro" class="block mt-1 w-full"
                                      type="date" name="data_cadastro"
                                      required autocomplete="data_cadastro" />

                        <x-input-error :messages="$errors->get('data_cadastro')" class="mt-2" />
                    </div>

                    <div class="w-full">
                        <x-input-label for="sexo" :value="__('Sexo')" class="mb-1"/>
                        <div class="border border-gray-300 px-3 py-2 rounded-md">
                            <div class="flex space-x-4">
                                <label for="masculino" class="flex items-center gap-2">
                                    <input type="radio" name="sexo" id="masculino" value="masculino">
                                    Masculino
                                </label>

                                <label for="feminino" class="flex items-center gap-2">
                                    <input type="radio" name="sexo" id="feminino" value="feminino">
                                    Feminino
                                </label>

                                {{--<label for="outro">
                                    <input type="radio" name="sexo" id="outro" value="outro">
                                    Outro
                                </label>--}}
                            </div>
                            <x-input-error :messages="$errors->get('sexo')" class="mt-2" />
                        </div>
                    </div>
                </div>

            </div>
            <!-- Modal footer -->
            <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                <button data-modal-hide="default-modal" type="button"
                        class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg
                        border border-gray-200 hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-4
                        focus:ring-gray-100">
                    Fechar
                </button>
                <button data-modal-hide="default-modal" type="button"
                        class="ms-3 text-white bg-button-primary focus:ring-4 focus:outline-none focus:ring-green-900
                        font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Salvar Informações
                </button>
            </div>
        </div>
    </div>
</div>
