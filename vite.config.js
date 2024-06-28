import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",

                //admin css
                "resources/plugins/fontawesome-free/css/all.min.css",
                "resources/plugins/overlayScrollbars/css/OverlayScrollbars.min.css",
                "resources/dist/css/adminlte.min.css",
                //data table
                "resources/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css",
                "resources/plugins/datatables-responsive/css/responsive.bootstrap4.min.css",
                "resources/plugins/datatables-buttons/css/buttons.bootstrap4.min.css",
                //admin js
                "resources/plugins/jquery/jquery.min.js",
                "resources/plugins/bootstrap/js/bootstrap.bundle.min.js",
                "resources/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js",
                "resources/dist/js/adminlte.js",
                //data table
                "resources/plugins/datatables/jquery.dataTables.min.js",
                "resources/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js",
                "resources/plugins/datatables-responsive/js/dataTables.responsive.min.js",
                "resources/plugins/datatables-responsive/js/responsive.bootstrap4.min.js",
                "resources/plugins/datatables-buttons/js/dataTables.buttons.min.js",
                "resources/plugins/datatables-buttons/js/buttons.bootstrap4.min.js",
                "resources/plugins/jszip/jszip.min.js",
                "resources/plugins/pdfmake/pdfmake.min.js",
                "resources/plugins/pdfmake/vfs_fonts.js",
                "resources/plugins/datatables-buttons/js/buttons.html5.min.js",
                "resources/plugins/datatables-buttons/js/buttons.print.min.js",
                "resources/plugins/datatables-buttons/js/buttons.colVis.min.js",
            ],
            refresh: true,
        }),
    ],
});
