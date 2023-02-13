<!doctype html>

@extends('layouts.header')

@section('content')
<h1 class="text-center p-8 mt-2 text-3xl">Listado dispositivos</h1>
<div style="display:flex; justify-content:center">
<table class="table-auto rounded-lg border-2 border-orange-500 bg-white m-5 text-center">
    <thead class="bg-orange-500 text-white">
      <tr>
        <th></th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>MAC</th>
        <th>Wifi</th>
        <th>Tipo</th>
        <th>Descripcion</th>
        <th>Estado</th>
        <th>Núm Serie</th>
        <th><button onclick="showModal()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="button">
          crear
        </button><button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">
          Eliminar
        </button>
      </tr>
    </thead>
    <tbody>
      @foreach ($dispositivos as $inventario)
      <tr class="bg-orange-100 hover:bg-orange-300">
        <td>
            <input id="checkbox" type="checkbox">
        </td>
        <td>{{$inventario->brand}}</td>
        <td>{{$inventario->model}}</td>
        <td>{{$inventario->mac_ethernet}}</td>
        <td>{{$inventario->mac_wifi}}</td>
        <td>{{$inventario->type_device_id}}</td>
        <td>{{$inventario->description}}</td>
        <td>{{$inventario->state}}</td>
        <td>{{$inventario->serial_number}}</td>
        <td><button class="mt-2 bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 border border-yellow-700 rounded">
          Modificar
        </button>
        <button class="mb-2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">
          Eliminar
        </button>
        </td>
      </tr>
      @endforeach
@include ("modals/crearDispositivo")
    </tbody>
  </table>
</div>
<div class="flex justify-center mb-3">
  {{$dispositivos->links()}}
  </div>

  <script>
    function showModal() {
      // set the modal menu element
      const $targetEl = document.getElementById('modalEl');

      // options with default values
      const options = {
        placement: 'bottom-right',
        backdrop: 'dynamic',
        backdropClasses: 'bg-gray-50 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40'
    }
    
  </script>
@stop

<html>
