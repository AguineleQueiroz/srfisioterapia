<x-app-layout>
    {{--<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Atendimentos') }}
        </h2>
    </x-slot>--}}

    {{-- subheader--}}
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-between p-6 text-gray-900">
                    {{-- search input --}}
                    <div class="w-1/4 block">
                        <form action="{{ route('dashboard') }}" method="GET">
                            <label for="searchInput3"></label>
                            <input type="text" id="searchInput3" name="search"
                                   class="border-gray-300 rounded-md px-3 py-2 w-full bg-white border shadow-sm border-slate-300
                                placeholder-slate-400 focus:outline-none focus:border-[#186f65] focus:ring-[#186f65] block
                                w-full rounded-md sm:text-sm focus:ring-1 focus:ring-opacity-50" placeholder="Buscar por nome ou CPF...">

                            <button class="hidden" type="submit">Search</button>
                        </form>

                    </div>

                    {{-- switch de filtragem de atendimentos --}}
                    <div class="flex items-center">
                        <label class="inline-flex items-center cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer">
                            <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none
                                peer-focus:ring-[#186f65] rounded-full peer
                                peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full
                                peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px]
                                after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full
                                after:h-5 after:w-5 after:transition-all peer-checked:bg-[#186f65]">
                            </div>
                            <span class="ms-3 text-sm font-medium text-gray-600">Ver somente meus atendimentos</span>
                        </label>
                    </div>

                    {{-- register button --}}
                    <x-primary-button class="ms-3 py-3 bg-button-primary" data-toggle="modal" data-target="#modalNovoPaciente">
                        {{ __('Novo Paciente') }}
                    </x-primary-button>
                    <!-- Modal -->
                </div>
            </div>
        </div>
    </div>
    {{--content--}}
    <div class="pb-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="min-w-full divide-y divide-gray-200">
                        {{-- t-header --}}
                        <thead class="bg-gray-100">
                            <tr>
                                <th scope="col" class="w-[10%] ps-4 py-3 text-start text-xs font-semibold text-gray-700 uppercase">
                                    Prioridade
                                </th>
                                <th scope="col" class="w-2/5 ps-4 py-3 text-start text-xs font-semibold text-gray-700 uppercase">
                                    Nome
                                </th>
                                <th scope="col" class="w-1/5 ps-4 py-3 text-start text-xs font-semibold text-gray-700 uppercase">
                                    CPF
                                </th>
                                <th scope="col" class="w-1/5 ps-4 py-3 text-start text-xs font-semibold text-gray-700 uppercase">
                                    Data
                                </th>
                                <th scope="col" class="px-4 py-3 text-xs font-semibold text-gray-700 uppercase flex justify-end">
                                    Ver mais
                                </th>
                            </tr>
                        </thead>
                        {{-- t-body --}}
                        <tbody class="bg-white">
                            @for($index = 0; $index < 1; $index++)
                                @include('components.table-row')
                            @endfor
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
