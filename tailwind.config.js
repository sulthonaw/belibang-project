import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                poppins: ["Poppins", "sans-serif"],
            },
            colors: {
                "belibang-black": "#121212",
                "belibang-grey": "#A0A0A0",
                "belibang-light-grey": "#D0D0D0",
                "belibang-dark-grey": "#414141",
                "belibang-darker-grey": "#1E1E1E",
            },
            keyframes: {
                slide: {
                    "0%": { transform: "translateX(0%)" },
                    "100%": { transform: "translateX(-100%)" },
                },
                slideToR: {
                    "0%": { transform: "translateX(-100%)" },
                    "100%": { transform: "translateX(0%)" },
                },
                slideToT: {
                    "0%": { transform: "translateY(0%)" },
                    "100%": { transform: "translateY(-100%)" },
                },
                slideToB: {
                    "0%": { transform: "translateY(-100%)" },
                    "100%": { transform: "translateY(0%)" },
                },
            },
        },
    },

    plugins: [forms],
};
