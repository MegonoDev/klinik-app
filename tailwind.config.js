const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
        ,
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
                publicSans: ["Public Sans", "sans-serif"],
            },
            colors: {
                primary: "#696cff",
                light_primary: "#E7E7FF",
                secondary: "#8592a3",
                success: "#71dd37",
                info: "#03c3ec",
                warning: "#ffab00",
                danger: "#ff3e1d",
                light: "#fcfdfd",
                dark: "#233446",
            },
        },
    },

    plugins: [require("@tailwindcss/forms"), require("flowbite/plugin")],
};
