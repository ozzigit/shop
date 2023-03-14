import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/sass/app.scss",
                "resources/js/app.js",
                "resources/js/Admin/app.js",
                "resources/js/Admin/table.js",
                "resources/js/Admin/datetimepicker.js",
                "resources/js/Admin/vectormap.js",
                "resources/js/Admin/chartjs-dashboard.js",
                "resources/css/Admin/classic.css",
                "resources/css/Admin/dark.css",
                "resources/css/Admin/light.css",
                "resources/css/Admin/modern.css",
            ],
            refresh: true,
        }),
    ],
});
