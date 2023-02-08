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
        </tr>
    </thead>
    <tbody class="">
    @foreach ($dispositivosInventario as $inventario)

      <tr class="bg-orange-100 border-b hover:bg-orange-300">
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
  <navigation-pagination :paginatedData="dispositivosInventario"></navigation-pagination>
</div>

<script>
import NavigationPagination from './NavigationPagination.vue'

export default {
  components: {
    NavigationPagination
  },
  data() {
    return {
      paginatedData: [],
      currentPage: 1
    }
  },
  methods: {
    changePage(page) {
      this.currentPage = page
    }
  },
  computed: {
    paginatedData() {
      return this.dispositivosInventario.slice((this.currentPage - 1) * 10, this.currentPage * 10)
    }
  }
}
</script>
@stop

<html>
