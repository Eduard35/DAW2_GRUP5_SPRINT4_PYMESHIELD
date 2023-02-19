import { createApp } from "vue/dist/vue.esm-bundler"

import Header from "./components/Navbar.vue";
import RouterWeb from '../js/router/index'

import restaurar from "./components/restaurar.vue";
import swiper from './components/swiper.vue'
import buscador from "./components/buscador.vue";

// prova
const app = createApp({})

app.use(RouterWeb)
app.component('swiper', swiper)
app.component('buscador', buscador)
app.mount("#app")
// Header
createApp(Header).mount("#navbar");

