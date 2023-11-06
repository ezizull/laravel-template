
export default {
    //   important: true,
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/tw-elements/dist/js/**/*.js"
    ],
    theme: {
        extend: {
            fontFamily: {
                'lato': ['Lato', 'sans-serif'],
                'crimson': ['Crimson Text', 'serif']
            },
        },
        screens: {
            'sm': '640px',
            'md': '768px',
            'lg': '1024px',
            'xl': '1280px',
            '2xl': '1536px',
            '3xl': '1792px',
            '4xl': '2048px',
        },
    },
    daisyui: {
        themes: [
            "winter",
            "night",

            {
                light: {
                    "primary": "#14b8a6",
                    "secondary": "#60a5fa",
                    "accent": "#facc15",
                    "neutral": "#d1d5db",
                    "base-100": "#e5e7eb",
                    "info": "#93c5fd",
                    "success": "#86efac",
                    "warning": "#fdba74",
                    "error": "#f87171",
                },
                dark: {
                    "primary": "#14b8a6",
                    "secondary": "#60a5fa",
                    "accent": "#facc15",
                    "neutral": "#374151",
                    "base-100": "#1f2937",
                    "info": "#93c5fd",
                    "success": "#86efac",
                    "warning": "#fdba74",
                    "error": "#f87171",
                }
            },
        ],
    },
    plugins: [
        require("@tailwindcss/typography"),
        require("daisyui"),
        require("tw-elements/dist/plugin.cjs"),
    ],
}

