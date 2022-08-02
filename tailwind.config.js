/** @type {import('tailwindcss').Config} */

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        backgroundImage: {},
        screens: {
            vs: "320px",
            sm: "640px",
            md: "800px",
            lg: "1024px",
            xl: "1280px",
            "2xl": "1536px",
            "4xl": "1800px",
        },
        colors: {
            gray: "#979797",
            "gray-sl": "#EDEDED",
            white: "#FFFFFF",
            yellow: "#FBFF22",
            sport: "#E2E2E2",
            lammo: "#F5F5F5",
            red: "#FF0000",
            blue: "#0000EE",
        },
        fontFamily: {
            roboto: ["Roboto", "sans-serif"],
            merriweather: ["Merriweather", "serif"],
            bitter: ["Bitter", "serif"],
        },
        extend: {
            spacing: {
                76: "19rem",
                88: "22rem",
                100: "25rem",
                108: "27rem",
                112: "28rem",
                120: "30rem",
                128: "32rem",
                144: "36rem",
                148: "37rem",
                160: "40rem",
                168: "42rem",
                184: "46rem",
                256: "64rem",
                276: "69rem",
            },
            fontWeight: {
                extrablack: 1200,
            },

            letterSpacing: {
                tightest: "-.075em",
            },

            borderRadius: {
                "4xl": "2rem",
            },
        },
        plugins: [require("@tailwindcss/line-clamp")],
    },
};
