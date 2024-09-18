<!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 rounded-t">
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
            <div class="p-0">
                {{-- formulario da atenção básica --}}
                @include('components.modal.partials.formulario-basico')

                {{-- formulario da atenção primaria  --}}
                @include('components.modal.partials.formulario-primario')

                {{-- formulario da atenção secundaria  --}}
                @include('components.modal.partials.formulario-secundario')
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
