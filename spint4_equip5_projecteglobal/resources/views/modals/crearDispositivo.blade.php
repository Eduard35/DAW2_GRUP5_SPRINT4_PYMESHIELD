<!-- Main modal -->
      <div id="crear" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto">
            <!-- Modal content -->
            <!-- form on dintre estan els inputs i fem submit per a enviar -->
            <form action="{{ route('lesdadesispositiu.crear') }}" method="POST">
                @csrf
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white" style="border-top: 20px">
                        Crear el nou dispositiu
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="crear">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    <div class="flex flex-row justify-around text-center">
                        <div style="margin-left:0px; margin-right:0px;">
                            <p>Marca</p>
                            <input class="border text-center" name="brand" placeholder="Razer"></input>
                            <p>MAC</p>
                            <input class="border text-center" name="mac_ethernet" placeholder="00:1B:44:11:3A:B7"></input>
                            <p>Tipo</p>
                            <input class="border text-center" name="type_device_id" placeholder="Poratil"></input>
                            <p>Estado</p>
                            <input class="border text-center" name="state" placeholder="Correcteo-Defectuoso-En reparacion"></input>
                        </div>
                        <div style="margin-left:0px; margin-right:20px;">
                            <p>Model</p>
                            <input class="border text-center" name="model" placeholder="Blade 15"></input>
                            <p>Wifi</p>
                            <input class="border text-center" name="mac_wifi" placeholder="00:1B:44:11:3A:B7"></input>
                            <p>Descripcion</p>
                            <input class="border text-center" name="description" placeholder="Comprat al 2020, cop a la dreta..."></input>
                            <p>Núm Serie</p>
                            <input class="border text-center" name="serial_number" placeholder="BY17WWAAAA00001"></input>
                        </div>
                    </div>
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">

                    </p>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <!-- submit del formulari -->
                    <button data-modal-hide="crear" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Aceptar</button>
                    <!-- simplement cancela -->
                    <button data-modal-hide="crear" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancelar</button>
                </div>
            </div>
            </form>
        </div>
      </div>
