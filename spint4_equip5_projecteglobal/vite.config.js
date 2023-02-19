import { defineConfig } from 'vite';
import tailwindcss from 'tailwindcss';
import laravel from 'laravel-vite-plugin';
import vue from "@vitejs/plugin-vue";

export default defineConfig({
    server: {
        hmr: {
            host: 'localhost',
        },
    },
    plugins: [
        vue({
            template: {
                compilerOptions: {
                  isCustomElement: (tag) => ['swiper-slide', 'swiper-container'].includes(tag),
                }
              }
        }),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            preprocessors:{
                '**/*.css': [tailwindcss],
                '**/*.scss': [tailwindcss],
            },
            refresh: true,
        }),
    ],
});
