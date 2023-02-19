<!-- Main modal -->
<div id="modificar{{ $inventario->id }}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <form action="{{ route('dispositiu.update', $inventario->id) }}" method="POST">
              @method('PUT')
              @csrf
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white" style="border-top: 20px">
                    Modificar dispositiu
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modificar{{ $inventario->id }}">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                <div class="flex flex-row justify-around text-center">
                    <div style="margin-left:0px; margin-right:0px;">
                        <p>Marca</p>
                        <input class="border text-center" name="brand"placeholder="{{$inventario->brand}}" value="{{$inventario->brand}}"></input>
                        <p>MAC</p>
                        <input class="border text-center" name="mac_ethernet"placeholder="{{$inventario->mac_ethernet}}" value="{{$inventario->mac_ethernet}}"></input>
                        <p>Tipo</p>
                        <input class="border text-center" name="type_device_id"placeholder="{{$inventario->type_device_id}}" value="{{$inventario->type_device_id}}"></input>
                        <p>Estado</p>
                        
<button id="modificar{{ $inventario->id }}" data-dropdown-toggle="dropdownHelperRadio" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Estado dispositivo<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>

<!-- Dropdown menu -->
<div id="dropdownHelperRadio" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-60 dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 6119.5px, 0px);">
    <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="modificar{{ $inventario->id }}">
      <li>
        <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
          <div class="flex items-center h-5">
              <input id="helper-radio-4" name="helper-radio" type="radio" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
          </div>
          <div class="ml-2 text-sm">
              <label for="helper-radio-4" class="font-medium text-gray-900 dark:text-gray-300">
                <div>Correcto</div>
                <p id="helper-radio-text-4" class="text-xs font-normal text-gray-500 dark:text-gray-300">El dispositivo esta operativo i en funcionamiento</p>
              </label>
          </div>
        </div>
      </li>
      <li>
        <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
          <div class="flex items-center h-5">
              <input id="helper-radio-5" name="helper-radio" type="radio" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
          </div>
          <div class="ml-2 text-sm">
              <label for="helper-radio-5" class="font-medium text-gray-900 dark:text-gray-300">
                <div>Defectuos</div>
                <p id="helper-radio-text-5" class="text-xs font-normal text-gray-500 dark:text-gray-300">El dispositivo no esta operativo o no esta en funcionamiento</p>
              </label>
          </div>
        </div>
      </li>
      <li>
        <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
          <div class="flex items-center h-5">
              <input id="helper-radio-6" name="helper-radio" type="radio" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
          </div>
          <div class="ml-2 text-sm">
              <label for="helper-radio-6" class="font-medium text-gray-900 dark:text-gray-300">
                <div>En reparacion</div>
                <p id="helper-radio-text-6" class="text-xs font-normal text-gray-500 dark:text-gray-300">El dispositivo esta siendo reparado o en espera de reparacion</p>
              </label>
          </div>
        </div>
      </li>
    </ul>
</div>

                    </div>
                    <div style="margin-left:0px; margin-right:20px;">
                        <p>Model</p>
                        <input class="border text-center" name="model" placeholder="{{$inventario->model}}" value="{{$inventario->model}}"></input>
                        <p>Wifi</p>
                        <input class="border text-center" name="mac_wifi" placeholder="{{$inventario->mac_wifi}}" value="{{$inventario->mac_wifi}}"></input>
                        <p>Descripcion</p>
                        <input class="border text-center" name="description" placeholder="{{$inventario->description}}" value="{{$inventario->description}}"></input>
                        <p>Núm Serie</p>
                        <input class="border text-center" name="serial_number" placeholder="{{$inventario->serial_number}}" value="{{$inventario->serial_number}}"></input>
                    </div>
                </div>
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    
                </p>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
              <button data-modal-hide="modificar{{ $inventario->id }}" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Aceptar</button>
              <button data-modal-hide="modificar{{ $inventario->id }}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancelar</button>
            </div>
            </form>
        </div>
    </div>
  </div>