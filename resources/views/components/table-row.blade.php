<tr class="even:bg-gray-100">
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
    <td class="p-2 ps-4 flex justify-end">
        <img src="{{ asset('img/view-more-icon.svg')}}" alt="view more info" width="24">
    </td>

    {{-- informações completas do atendimento --}}
    <table class="w-full border border-gray-100">
        <thead style="visibility: collapse;">
            <tr>
                <th scope="col" class="w-[10%] ps-4 py-3"></th>
                <th scope="col" class="w-2/5 ps-4 py-3"></th>
                <th scope="col" class="w-1/5 ps-4 py-3"></th>
                <th scope="col" class="w-1/5 ps-4 py-3"></th>
                <th scope="col" class="px-4 py-3"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-gray-100"></td>
                <td colspan="4" class="m-0 p-0">
                    {{-- informações gerais --}}
                    <div class="py-4 ps-4 border-collapse border-gray-100 bg-gray-100">
                        <h6 class="font-semibold m-0">Informações</h6>
                    </div>

                    <div class="w-full flex mb-2 ps-4 border-r border-t  border-collapse border-gray-100" style="font-size: .95rem;">
                        <div class="w-1/2 flex flex-col  pt-4">
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
                        <div class="w-1/2 flex flex-col ps-4 pt-4">
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
                        <div class="w-1/2 flex flex-col  pt-4">
                            <span>
                                <span class="font-medium"> Nome da UBS: </span>
                                <span class="text-gray-600"> UBS Largo Dom João </span>
                            </span>
                        </div>
                        <div class="w-1/2 flex flex-col ps-4 pt-4">
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
                        <div class="w-1/2 flex flex-col  pt-4">
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
                        <div class="w-1/2 flex flex-col ps-4 pt-4">
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
                </td>
            </tr>
        </tbody>
    </table>
</tr>

