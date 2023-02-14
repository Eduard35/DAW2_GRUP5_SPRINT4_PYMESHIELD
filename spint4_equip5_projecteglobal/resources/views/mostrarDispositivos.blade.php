<!doctype html>

@extends('layouts.header')

@section('content')
<h1 class="text-center p-8 mt-2 text-3xl">Listado dispositivos</h1>
<div style="display:flex; justify-content:center">
<table class="container shadow-xl table-auto w-full rounded-lg bg-white mt-5 w-99 text-center">
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
        <th><button data-modal-target="crear" data-modal-toggle="crear" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="button">
          crear
        </button><button data-modal-target="eliminar" data-modal-toggle="eliminar" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">
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
        <td><button data-modal-target="modificar{{ $inventario->id }}" data-modal-toggle="modificar{{ $inventario->id }}" class="mt-2 bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 border border-yellow-700 rounded">
          Modificar
        </button>
        <button data-modal-target="eliminar{{ $inventario->id }}" data-modal-toggle="eliminar{{ $inventario->id }}" class="mb-2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">
          Eliminar
        </button>
        </td>
      </tr>
      @include ("modals/eliminarDispositivo")
      @include ("modals/modificarDispositivo")
      @include ("modals/eliminarDispositivo")
      @endforeach
@include ("modals/crearDispositivo")
    </tbody>
  </table>
</div>
<div class="flex justify-center mb-3">
  {{$dispositivos->links()}}
  </div>
@stop

<html>
