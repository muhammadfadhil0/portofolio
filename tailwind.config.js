/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./**/*.html", // Tambahkan ini kalau file kamu .html
        "./storage/framework/views/*.php", // Tambahkan ini untuk Laravel
    ],
    darkMode: "class", // Ini yang penting!
    theme: {
        extend: {},
    },
    plugins: [],
};
