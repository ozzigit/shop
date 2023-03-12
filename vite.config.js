import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/Admin/app.js',
                // 'resources/js/Admin/settings.js',
                'resources/css/Admin/classic.css',
                'resources/css/Admin/dark.css',
                'resources/css/Admin/light.css',
                'resources/css/Admin/modern.css'
            ],
            refresh: true,
        }),
    ],
});
