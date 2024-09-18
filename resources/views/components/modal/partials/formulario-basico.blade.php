{{-- info paciente--}}
<h3 class="px-5 py-2 text-md font-semibold text-gray-900 bg-gray-200 border-b border-t border-gray-300">
    Informações
</h3>
<div class="p-5 space-y-4">
    <div>
        <x-input-label for="nome" :value="__('Nome')" />
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
                          type="text" name="cartao_sus" placeholder="ex:000 0000 0000 0000"
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
                          placeholder="(00) 00000 0000"
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
                    <label for="masculino" class="flex items-center gap-2 text-sm">
                        <input type="radio" name="sexo" id="masculino" value="masculino">
                        Masculino
                    </label>

                    <label for="feminino" class="flex items-center gap-2 text-sm">
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

{{-- UBS--}}
<h3 class="px-5 py-2 text-md font-semibold text-gray-900 bg-gray-200 border-b border-t border-gray-300">
    Unidade Básica de Saúde
</h3>
<div class="p-5 space-y-4">
    <div class="flex space-x-4">
        <div class="w-full">
            <x-input-label for="ubs" :value="__('Nome da UBS')" />
            <x-text-input id="ubs" class="block mt-1 w-full"
                          type="text" name="ubs" maxlength="60"
                          placeholder="Digite o nome da UBS"
                          required autocomplete="ubs" />

            <x-input-error :messages="$errors->get('ubs')" class="mt-2" />
        </div>

        <div class="w-full">
            <x-input-label for="acs" :value="__('ACS Responsável')" />
            <x-text-input id="acs" class="block mt-1 w-full"
                          type="text" name="acs" maxlength="60"
                          placeholder="Digite o nome"
                          required autocomplete="acs" />

            <x-input-error :messages="$errors->get('ubs')" class="mt-2" />
        </div>
    </div>
</div>

{{-- Condições de Saúde--}}
<h3 class="px-5 py-2 text-md font-semibold text-gray-900 bg-gray-200 border-b border-t border-gray-300">
    Condições de Saúde
</h3>
<div class="p-5 space-y-4">
    <div class="flex space-x-4">
        <div class="w-full">
            <x-input-label for="diagnostico" :value="__('Diagnóstico Clínico')" />
            <textarea id="diagnostico" class="block mt-1 w-full border-gray-300 focus:border-[#186f65] focus:ring-[#186f65] rounded-md shadow-sm p-2 text-sm"
                      name="diagnostico" placeholder="Digite o diagnóstico clínico"
                      required autocomplete="diagnostico"></textarea>

            <x-input-error :messages="$errors->get('diagnostico')" class="mt-2" />
        </div>

        <div class="w-full">
            <x-input-label for="comorbidades" :value="__('Comorbidades associadas')" />
            <textarea id="comorbidades" class="block mt-1 w-full border-gray-300 focus:border-[#186f65] focus:ring-[#186f65] rounded-md shadow-sm p-2 text-sm"
                      name="comorbidades" placeholder="Digite as comorbidades associadas"
                      required autocomplete="comorbidades"></textarea>

            <x-input-error :messages="$errors->get('comorbidades')" class="mt-2" />
        </div>
    </div>

    <div class="flex space-x-4">
        <div class="w-full">
            <x-input-label for="ultima_internacao" :value="__('Última Internação')" />
            <x-text-input id="ultima_internacao" class="block mt-1 w-full"
                          type="date" name="ultima_internacao"
                          required autocomplete="ultima_internacao" />

            <x-input-error :messages="$errors->get('ultima_internacao')" class="mt-2" />
        </div>

        <div class="w-full">
            <x-input-label for="medico_responsavel" :value="__('Médico Responsavel')" />
            <x-text-input id="medico_responsavel" class="block mt-1 w-full" maxlength="60"
                          type="text" name="medico_responsavel" placeholder="ex: José da Silva"
                          required autocomplete="medico_responsavel" />

            <x-input-error :messages="$errors->get('medico_responsavel')" class="mt-2" />
        </div>
    </div>

    <div class="w-full">
        <x-input-label for="prioridade" :value="__('Nível de Prioridade')" class="mb-1"/>
        <div class="border border-gray-300 px-3 py-2 rounded-md">
            <div class="flex space-x-4">
                <label for="baixa" class="flex items-center gap-2 text-green-600 text-sm">
                    <input type="radio" name="prioridade" id="baixa_prioridade" value="baixa">
                    Baixa
                </label>

                <label for="média" class="flex items-center gap-2 text-yellow-400 text-sm">
                    <input type="radio" name="prioridade" id="media_prioridade" value="media">
                    Média
                </label>

                <label for="alta" class="flex items-center gap-2 text-red-600 text-sm">
                    <input type="radio" name="prioridade" id="alta_prioridade" value="alta">
                    Alta
                </label>
            </div>
            <x-input-error :messages="$errors->get('prioridade')" class="mt-2" />
        </div>
    </div>
</div>
