<!doctype html>

@extends('layouts.header')

@section('content')

<h1 class="text-center p-8 mt-2 text-3xl">Inventario dispositivos</h1>

<div class="flex justify-center rounded-lg">
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
      </tr>
    </thead>
    <tbody>
      <tr class="bg-orange-100 border-b hover:bg-orange-300">
        <td>34654</td>
        <td>Portatil Razer Blade 15</td>
        <td>A01B01CD00E</td>
        <td>34654</td>
        <td>34654</td>
        <td>34654</td>
        <td>34654</td>
        <td>34654</td>
      </tr>
      <tr class="bg-orange-200 border-b hover:bg-orange-300">
        <td>34655</td>
        <td>Portatil Razer Blade 14</td>
        <td>A02B02CD01E</td>
        <td>34654</td>
        <td>34654</td>
        <td>34654</td>
        <td>34654</td>
        <td>34654</td>
      </tr>
      <tr class="bg-orange-100 border-b hover:bg-orange-300">
        <td>34656</td>
        <td>Portatil Razer Blade 17</td>
        <td>A12B062W98Z</td>
        <td>34654</td>
        <td>34654</td>
        <td>34654</td>
        <td>34654</td>
        <td>34654</td>
      </tr>
    </tbody>
  </table>
</div>

@stop

<html>
