<!doctype html>

@extends('layouts.header')

@section('content')

<h1 class="text-center p-2 mt-2 text-3xl">Inventario dispositivos</h1>

<div class="flex justify-center mb-6">
<table class="container shadow-xl table-auto w-full rounded-lg border-2 border-orange-500 bg-white mt-5 w-99 text-center">
    <thead class="bg-orange-500 text-white">
      <tr>
        <th>Marca</th>
        <th>Model</th>
        <th>MAC</th>
        <th>Wifi</th>
        <th>Tipo</th>
        <th>Descripcion</th>
        <th>Estado</th>
        <th>Núm Serie</th>
        Model</tr>
    </thead>
    <tbody class="">
    @foreach ($dispositivosInventario as $inventario)

      <tr class="bg-orange-100 border-b hover:bg-orange-300" v-for="(item, index) in paginatedData" :key="index">
        <td>{{$inventario->brand}}</td>
        <td>{{$inventario->model}}</td>
        <td>{{$inventario->mac_ethernet}}</td>
        <td>{{$inventario->mac_wifi}}</td>
        <td>{{$inventario->type_device_id}}</td>
        <td>{{$inventario->description}}</td>
        <td>{{$inventario->state}}</td>
        <td>{{$inventario->serial_number}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

@stop

<html>
