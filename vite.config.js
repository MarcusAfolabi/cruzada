import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'public/css/plugins.css',
                'public/css/style.css',
                'public/js/jquery.js',
                'public/js/functions.js',
                'public/js/plugins.js',
            ],
            refresh: true,
        }),
    ],
});
