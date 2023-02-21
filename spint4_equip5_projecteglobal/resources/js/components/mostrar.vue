!-- Codi de la pàgina -->
<template>

    <div class="flex justify-center -m-1.5">
        <table
            class="container shadow-xl table-auto w-full rounded-lg border-2 border-orange-500 bg-white mt-5 w-99 text-center">
            <tr>
                <thead class="bg-orange-500 text-white">
                <tr>
                    <th></th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>MAC</th>
                    <th>WiFi</th>
                    <th>Tipo</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                    <th>Núm Serie</th>
                    <th></th>
                    <th><button data-modal-target="crear" data-modal-toggle="crear" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="button">
                        crear
                    </button><button data-modal-target="eliminar" data-modal-toggle="eliminar" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">
                        Eliminar
                    </button>
                    </th>
                </tr>
            </thead>
            </tr>
            <tr v-for="inventario in listar" :key="inventario.id" class="bg-orange-100 border-b hover:bg-orange-300">
                <td>{{ inventario.brand }}</td>
                <td>{{ inventario.model }}</td>
                <td>{{ inventario.mac_ethernet }}</td>
                <td>{{ inventario.mac_wifi }}</td>
                <td>{{ inventario.type_device_id }}</td>
                <td>{{ inventario.description }}</td>
                <td>{{ inventario.state }}</td>
                <td>{{ inventario.tag }}</td>
                <td>{{ inventario.serial_number }}</td>
                <td>{{ inventario.user_id }}</td>
                <td>
                    <button data-modal-target="modificar{{ $inventario->id }}" data-modal-toggle="modificar{{ $inventario->id }}" class="mt-2 bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 border border-yellow-700 rounded">
                        Modificar
                    </button>
                    <button data-modal-target="eliminar{{ $inventario->id }}" data-modal-toggle="eliminar{{ $inventario->id }}" class="mb-2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">
                        Eliminar
                    </button>
                </td>
            </tr>
        </table>
    </div>

</template>

<!-- Estils per a esta vista -->
<style scoped>

</style>

<!-- Scripts per a la vista -->
<script>

export default {
    data() {
        return {
            listar
        }
    }
}

</script>