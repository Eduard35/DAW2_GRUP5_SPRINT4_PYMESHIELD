import { createRouter, createWebHistory } from "vue-router"

const Restaurar = () => import('../components/restaurar.vue')

const routes = [
    {
        path: '/restaurar',
        name: 'Restaurar',
        component: Restaurar
    }
]

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes
})

export default router;