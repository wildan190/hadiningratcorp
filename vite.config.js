import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0',
        hmr: {
            host: '9000-firebase-hadiningratcorp-1760776594388.cluster-ejd22kqny5htuv5dfowoyipt52.cloudworkstations.dev',
        },
    },
});
