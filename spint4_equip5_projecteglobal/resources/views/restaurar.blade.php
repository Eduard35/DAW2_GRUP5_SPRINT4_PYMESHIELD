@extends('layouts.header')

@section('title', 'Restaurar')

@section('content')

    <h1 class="text-center p-2 mt-2 text-3xl">Restaurar</h1>

    <ul>
        @foreach ($listar as $dispositivo)
            <li>{{ $dispositivo->brand }}</li>
            <li>{{ $dispositivo->model }}</li>
            <li>{{ $dispositivo->mac_ethernet }}</li>
            <li>{{ $dispositivo->mac_wifi }}</li>
            <li>{{ $dispositivo->type_device_id }}</li>
            <li>{{ $dispositivo->description }}</li>
            <li>{{ $dispositivo->state }}</li>
            <li>{{ $dispositivo->tag }}</li>
            <li>{{ $dispositivo->serial_number }}</li>
            <li>{{ $dispositivo->user_id }}</li>
        @endforeach
    </ul>


    <div class="flex justify-center -m-1.5">
        <table
            class="container shadow-xl table-auto w-full rounded-lg border-2 border-orange-500 bg-white mt-5 w-99 text-center">
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
            </tbody>
        </table>
    </div>
    {{-- <div id="app">
    <restaurar/> --}}
    </div>

@endsection
