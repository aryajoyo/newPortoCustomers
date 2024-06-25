import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',

                //admin css
                'resources/plugins/fontawesome-free/css/all.min.css',
                'resources/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
                'resources/dist/css/adminlte.min.css',
                //admin js
                'resources/plugins/jquery/jquery.min.js',
                'resources/plugins/bootstrap/js/bootstrap.bundle.min.js',
                'plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
                'resources/dist/js/adminlte.js'
            ],
            refresh: true,
        }),
    ],
});
