/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php"],
    theme: {
        extend: {
            screens: {
                xs: "390px",
                max: "2200px",
            },
            colors: {
                primary: {
                    400: "#",
                },
                secondary: {
                    400: "#",
                },
                accent: {
                    400: "#",
                },

                bgPrimary: "#",
                bgSecondary: "#",

                fontLight: "#ffffff",
                fontDark: "#222",
            },
            fontFamily: {
                heading: ["Montserrat", "sans-serif"],
                text: ["Montserrat", "sans-serif"],
            },
        },
    },
    plugins: [require("@tailwindcss/typography")],
};
