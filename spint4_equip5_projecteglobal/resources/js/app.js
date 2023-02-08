import { createApp } from "vue/dist/vue.esm-bundler"

import App from "./components/Navbar.vue";
import RouterWeb from '../js/router/index'

import restaurar from "./components/restaurar.vue";

// prova
const app = createApp({})

app.use(RouterWeb)

app.mount("#app")
// Header
createApp(App).mount("#navbar");

