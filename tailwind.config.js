const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
	mode: 'jit',
	purge: ['./resources/**/*.{js,vue,php}'],
	darkMode: 'class',
	theme: {
		extend: {
			fontFamily: {
				sans: ["Inter", ...defaultTheme.fontFamily.sans],
			},
			colors: {
				...colors,
				dark: {
                    bg: "#151823",
                    "eval-1": "#222738",
                    "eval-2": "#2A2F42",
                    "eval-3": "#2C3142",
                },
			},
			boxShadow: {
				groadis: '0 0 6px 1px rgba(var(--groadis-color),.6)',
			},
		},
	},
	variants: {
		scrollbar: ['rounded', 'dark'],
	},
	plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
