<!-- Codi de la pàgina -->
<template>
    <h1>hola</h1>

    <template>
  <table>
    <tr>
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
    </tr>
    <tr v-for="dispositivo in listar" :key="dispositivo.id">
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
        <button class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
          Restaurar
        </button>
      </td>
    </tr>
  </table>

</template>

<!-- Estils per a esta vista -->
<style scoped>

</style>

<!-- Scripts per a la vista -->
<script>

export default {
  data() {
    return {
      listar: [
        { id: 1, brand: 'Apple', model: 'iPhone X', mac_ethernet: '00:11:22:33:44:55', mac_wifi: 'AA:BB:CC:DD:EE:FF', type_device_id: 'Smartphone', description: 'iPhone X en excelentes condiciones', state: 'Activo', tag: 'A123', serial_number: '123456', user_id: 1 },
        { id: 2, brand: 'Samsung', model: 'Galaxy S21', mac_ethernet: '11:22:33:44:55:66', mac_wifi: 'BB:CC:DD:EE:FF:AA', type_device_id: 'Smartphone', description: 'Galaxy S21 en buen estado', state: 'Inactivo', tag: 'B456', serial_number: '234567', user_id: 2 }
      ]
    }
  }
}

</script>
