<tr class="border border-gray-100" id="atendimento_{{$key}}">
    {{-- visible content --}}
    <td class="p-2 ps-4 flex justify-start">
        <img src="{{ asset('img/circle-red.svg')}}" alt="circle red" width="18">
    </td>
    <td class="p-2 ps-4 text-start">
        Jhon Doe Smith
    </td>
    <td class="p-2 ps-4 text-start">
        12398707601
    </td>
    <td class="p-2 ps-4 text-start">
        18/10/2024
    </td>
    <td class="p-2 px-4 flex justify-end">
        <img id="details_icon"
            src="{{ asset('img/view-more-icon.svg')}}"
            alt="view more info" width="24"
            class="cursor-pointer"
            onclick="mostrarDetalhes('atendimento_{{$key}}')"
        >
    </td>
</tr>
{{-- detalhes completos do atendimento --}}
<tr id="atendimento_{{$key}}_details" class="details hidden">
    <td class="border border-gray-100"></td>
    <td colspan="4" class="m-0 p-0">
        {{-- informações gerais --}}
        <div class="py-4 ps-4 border-collapse border-gray-100 bg-gray-100">
            <h6 class="font-semibold m-0">Informações</h6>
        </div>

        <div class="w-full flex mb-2 ps-4 border-r border-t  border-collapse border-gray-100">
            <div class="w-1/2 flex flex-col  pt-4 pe-4">
                <span>
                    <span class="font-medium"> Sexo: </span>
                    <span class="text-gray-600"> Masculino </span>
                </span>
                <span>
                    <span class="font-medium"> Data de Nascimento: </span>
                    <span class="text-gray-600"> 15/08/1994 </span>
                </span>
                <span>
                    <span class="font-medium"> Idade: </span>
                    <span class="text-gray-600"> 30 anos </span>
                </span>
                <span>
                    <span class="font-medium"> Endereço: </span>
                    <span class="text-gray-600"> Av. da Saudade - 45, Consolação </span>
                </span>
                <span>
                    <span class="font-medium"> Cartão SUS: </span>
                    <span class="text-gray-600"> 12345678912345698</span>
                </span>
            </div>
            <div class="w-1/2 flex flex-col ps-4 pt-4 pe-4">
                <span>
                    <span class="font-medium"> Contato: </span>
                    <span class="text-gray-600"> Masculino </span>
                </span>
                <span>
                    <span class="font-medium"> Data de Cadastro: </span>
                    <span class="text-gray-600"> 13/09/2024 </span>
                </span>
                <span>
                    <span class="font-medium"> Responsável pelo Cadastro: </span>
                    <span class="text-gray-600"> Stephany Souza </span>
                </span>
            </div>
        </div>
        {{-- info da unidade basica --}}
        <div class="py-4 ps-4 border-t border-collapse border-gray-100 bg-gray-100">
            <h6 class="font-semibold m-0">Unidade Básica de Saúde</h6>
        </div>

        <div class="w-full flex mb-2 ps-4 border-r border-t  border-collapse border-gray-100" style="font-size: .95rem;">
            <div class="w-1/2 flex flex-col  pt-4 pe-4">
                <span>
                    <span class="font-medium"> Nome da UBS: </span>
                    <span class="text-gray-600"> UBS Largo Dom João </span>
                </span>
            </div>
            <div class="w-1/2 flex flex-col ps-4 pt-4 pe-4">
                <span>
                    <span class="font-medium"> ACS Responsável: </span>
                    <span class="text-gray-600"> Sigürdisunm Octavius </span>
                </span>
            </div>
        </div>
        {{-- condiçoes de saude do paciente --}}
        <div class="py-4 ps-4 border-t border-collapse border-gray-100 bg-gray-100">
            <h6 class="font-semibold m-0">Condições de Saúde</h6>
        </div>

        <div class="w-full flex mb-2 ps-4 border-r border-t  border-collapse border-gray-100" style="font-size: .95rem;">
            <div class="w-1/2 flex flex-col  pt-4 pe-4">
                <span>
                    <span class="font-medium"> Diagnóstico clínico: </span>
                    <p class="text-gray-600"> is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
                        an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </span>
                <span class="mt-2">
                    <span class="font-medium"> Última internação: </span>
                    <span class="text-gray-600"> 29/06/2024 </span>
                </span>
            </div>
            <div class="w-1/2 flex flex-col ps-4 pt-4 pe-4">
                <span>
                    <span class="font-medium"> Comorbidades associadas: </span>
                    <p class="text-gray-600"> is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
                        an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </span>
                <span class="mt-2">
                    <span class="font-medium"> Médico responsável: </span>
                    <span class="text-gray-600"> Paul Gabanes </span>
                </span>
            </div>
        </div>

        {{-- operações --}}
        <div class="w-full flex justify-end ps-4 border-r border-t border-b border-collapse border-gray-100 space-x-8 pb-6 pt-12 pe-2">
            {{-- editar atendimento --}}
            <a href=""
                class="inline-flex items-center px-4 py-2 bg-white border
                    border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50
                    focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out
                    duration-150 py-3  text-gray-700">
                {{ __('Editar') }}
            </a>

            {{-- registrar ficha --}}
            <x-secondary-button
                class="py-3 bg-button-primary text-white border-transparent" data-toggle="modal" data-target="#modalNovoPaciente">
                {{ __('Adicionar Ficha') }}
            </x-secondary-button>

            {{-- lista fichas do paciente --}}
            <a href=""
                class="inline-flex items-center px-4 py-2 bg-white border
                    border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50
                    focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out
                    duration-150 py-3">
                {{ __('Fichas do Paciente') }}
            </a>

            {{-- encaminhar ficha do paciente --}}
            <div>
                <form action="" method="post">
                    @csrf
                    <input type="hidden" name="atendimento_id" value="">
                    <div class="flex justify-end items-center">

                        <select name="encaminhamento"
                                class="cursor-pointer inline-flex items-center px-4 py-2 bg-white rounded-l-md
                                    border-gray-300 font-semibold text-xs text-gray-700 tracking-widest shadow-sm hover:bg-gray-50
                                    focus:ring-0 focus:border-[#186f65] focus:ring-[#186f65] disabled:opacity-25 transition ease-in-out
                                    duration-150 py-3">

                            <option value="atencao_primario">Atenção Primária</option>
                            <option value="atencao_secundario">Atenção Secundária</option>

                        </select>

                        <x-primary-button
                            class="py-3 bg-button-primary rounded-none rounded-r-md border-[#186f65]">
                            {{ __('Encaminhar') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </td>
</tr>
