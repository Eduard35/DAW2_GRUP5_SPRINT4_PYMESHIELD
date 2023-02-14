<!-- Codi de la pàgina -->
<template>

    <div class="flex justify-center -m-1.5">
        <table
            class="container shadow-xl table-auto w-full rounded-lg border-2 border-orange-500 bg-white mt-5 w-99 text-center">
            <tr>
                <thead class="bg-orange-500 text-white">
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>MAC Ethernet</th>
                    <th>MAC WiFi</th>
                    <th>Tipo</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                    <th>Etiqueta</th>
                    <th>Núm Serie</th>
                    <th>Usuario</th>
                    <th></th>
                </thead>
            </tr>
            <tr v-for="dispositivo in listar" :key="dispositivo.id" class="bg-orange-100 border-b hover:bg-orange-300">
                <td>{{ dispositivo.brand }}</td>
                <td>{{ dispositivo.model }}</td>
                <td>{{ dispositivo.mac_ethernet }}</td>
                <td>{{ dispositivo.mac_wifi }}</td>
                <td>{{ dispositivo.type_device_id }}</td>
                <td>{{ dispositivo.description }}</td>
                <td>{{ dispositivo.state }}</td>
                <td>{{ dispositivo.tag }}</td>
                <td>{{ dispositivo.serial_number }}</td>
                <td>{{ dispositivo.user_id }}</td>
                <td>
                    <button
                        class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Restaurar
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
