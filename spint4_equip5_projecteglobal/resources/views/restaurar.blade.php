@extends('layouts.header')

@section('title', 'Restaurar')

@section('content')

<div id="app">


    <h1 class="text-center p-2 mt-2 text-3xl">Restaurar</h1>


    <div class="flex justify-center -m-1.5">
        <table
            class="container shadow-xl table-auto w-full rounded-lg border-2 border-orange-500 bg-white mt-5 w-99 text-center">
            <thead class="bg-orange-500 text-white">
                <tr>
                    <th>Marca</th>
                    <th>Model</th>
                    <th>MAC</th>
                    <th>MAC_Wifi</th>
                    <th>Tipo</th>
                    <th>Descripcion</th>
                    <th>Estado</th>
                    <th>Etiqueta</th>
                    <th>Núm Serie</th>
                    <th>Usuario</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listar as $dispositivo)
                    <tr class="bg-orange-100 border-b hover:bg-orange-300">
                        <td>{{ $dispositivo->brand }}</td>
                        <td>{{ $dispositivo->model }}</td>
                        <td>{{ $dispositivo->mac_ethernet }}</td>
                        <td>{{ $dispositivo->mac_wifi }}</td>
                        <td>{{ $dispositivo->type_device_id }}</td>
                        <td>{{ $dispositivo->description }}</td>
                        <td>{{ $dispositivo->state }}</td>
                        <td>{{ $dispositivo->tag }}</td>
                        <td>{{ $dispositivo->serial_number }}</td>
                        <td>{{ $dispositivo->user_id }}</td>
                        <td><button data-modal-target="restaurar{{ $dispositivo->id }}" data-modal-toggle="restaurar{{ $dispositivo->id }}"
                                class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Restaurar
                            </button>
                    </tr>
                    @include ('modals/restaurarDispositivo')
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
        <router-view />
    </div>

</div>
@endsection
