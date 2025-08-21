import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
// import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/sass/app.scss",
                "resources/css/app.css",
                "resources/js/app.js",
            ],
            refresh: true,
        }),
        // tailwindcss(),        
    ],

    build: {
        rollupOptions: {
            output: {
                manualChunks: {
                    jquery: ["jquery"],
                    bootstrap: ["bootstrap"],
                    sweetalert2: ["sweetalert2"],
                    select2: ["select2"],
                    flatpickr: ["flatpickr"],
                    fileinput: ["bootstrap-fileinput"],
                    fullcalendar: [
                        "@fullcalendar/core",
                        "@fullcalendar/interaction",
                        "@fullcalendar/bootstrap5",
                        "@fullcalendar/multimonth",
                        "@fullcalendar/timegrid",
                        "@fullcalendar/daygrid",
                        "@fullcalendar/list",
                    ],
                },
            },
        },
    },
});
