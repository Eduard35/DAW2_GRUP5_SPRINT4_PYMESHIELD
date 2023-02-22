import { createRouter, createWebHistory } from "vue-router"

const Restaurar = () => import('../components/restaurar.vue')
const ImageForm = () => import('../components/image-form.vue')
const Buscador = () => import('../components/buscador.vue')


const routes = [
    {
        path: '/restaurar',
        name: 'Restaurar',
        component: Restaurar
    },
    {
        path: '/imagenes',
        name: 'ImageForm',
        component: ImageForm
    },
    {
        path: '/dispositivo/:id',
        name: 'ImageForm',
        component: ImageForm
    },
    {
        path: '/inventario',
        name: 'Buscador',
        component: Buscador
    },
]

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes
})

export default router;