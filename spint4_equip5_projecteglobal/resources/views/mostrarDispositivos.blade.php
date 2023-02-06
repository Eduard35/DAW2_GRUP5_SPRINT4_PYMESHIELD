<!doctype html>

@extends('layouts.header')

@section('content')
<h1 class="text-center p-8 mt-2 text-3xl">Listado dispositivos</h1>
<div style="display:flex; justify-content:center">
<table class="container table-auto w-full rounded-lg border-2 border-orange-500 bg-white mt-5 w-99 text-center">
    <thead class="bg-orange-500 text-white">
      <tr>
        <th></th>
        <th>Marca</th>
        <th>Model</th>
        <th>MAC</th>
        <th>Wifi</th>
        <th>Tipo</th>
        <th>Descripcion</th>
        <th>Estado</th>
        <th>Núm Serie</th>
        <th><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
          crear
        </button><button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">
          Eliminar
        </button>
      </tr>
    </thead>
    <tbody>
      <tr class="bg-orange-100">
        <td>
            <input id="checkbox" type="checkbox">
        </td>
        <td>RAZER</td>
        <td>Portatil Razer Blade 15</td>
        <td>A01B01CD00E</td>
        <td>34654</td>
        <td>34654</td>
        <td>34654</td>
        <td>34654</td>
        <td>34654</td>
        <td><button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 border border-yellow-700 rounded">
          Modificar
        </button>
        </button><button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">
          Eliminar
        </button>
        </td>
      </tr>
      <tr class="bg-orange-100">
        <td>
          <input id="checkbox" type="checkbox" class="text-">
        </td>
        <td>RAZER</td>
        <td>Portatil Razer Blade 14</td>
        <td>A02B02CD01E</td>
        <td>34654</td>
        <td>34654</td>
        <td>34654</td>
        <td>34654</td>
        <td>34654</td>
        <td><button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 border border-yellow-700 rounded">
          Modificar
        </button>
        </button><button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">
          Eliminar
        </button>
      </td>
      </tr>
      <tr class="bg-orange-100">
        <td>
          <input id="checkbox" type="checkbox">
        </td>
        <td>RAZER</td>
        <td>Portatil Razer Blade 17</td>
        <td>A12B062W98Z</td>
        <td>34654</td>
        <td>34654</td>
        <td>34654</td>
        <td>34654</td>
        <td>34654</td>
        <td><button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 border border-yellow-700 rounded">
          Modificar
        </button>
        </button><button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">
          Eliminar
        </button>
      </td>
      </tr>
    </tbody>
  </table>
</div>
@stop

<html>
