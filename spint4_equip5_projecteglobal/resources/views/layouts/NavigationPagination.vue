<template>
    <nav>
      <ul class="pagination">
        <li v-if="paginatedData.current_page > 1">
          <a @click="changePage(paginatedData.current_page - 1)">
            Anterior
          </a>
        </li>
        <li v-for="page in pagesNumber" :key="page">
          <a @click="changePage(page)" :class="{ 'is-current': paginatedData.current_page === page }">
            {{ page }}
          </a>
        </li>
        <li v-if="paginatedData.current_page < paginatedData.last_page">
          <a @click="changePage(paginatedData.current_page + 1)">
            Siguiente
          </a>
        </li>
      </ul>
    </nav>
  </template>
  <script>
  export default {
    props: ['paginatedData'],
    computed: {
      pagesNumber() {
        return Array.from(Array(this.paginatedData.last_page).keys()).map(i => i + 1)
      }
    },
    methods: {
      changePage(page) {
        this.$emit('change-page', page)
      }
    }
  }
  </script>