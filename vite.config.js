import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/sass/app.scss', 'resources/js/app.js', 'resources/assets/flowbite/dist/flowbite.js', 'resources/assets/flowbite/dist/flowbite.css', 'resources/assets/flowbite/dist/datepicker.js'],
            refresh: true,
        }),
    ],
})
