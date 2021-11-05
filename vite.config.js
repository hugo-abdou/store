/** @format */
import vue from "@vitejs/plugin-vue";
const { resolve } = require("path");
const Dotenv = require("dotenv");

Dotenv.config();

const ASSET_URL = process.env.ASSET_URL || "";

export default ({ command }) => ({
    plugins: [vue()],

    root: "resources",
    base: command === "build" ? `${ASSET_URL}/dist` : `${ASSET_URL}/`,

    build: {
        outDir: resolve(__dirname, "public/dist"),
        emptyOutDir: true,
        manifest: true,
        target: "es2018",
        rollupOptions: {
            input: "/js/app.js",
        },
    },

    resolve: {
        alias: {
            "@": resolve(__dirname, "./resources/js/"),
        },
    },
    server: {
        strictPort: true,
        port: 3000,
    },
});
