/** @type {import('tailwindcss').Config} */

const plugin = require('tailwindcss/plugin')

// Rotate Y utilities
const rotateY = plugin(function ({ addUtilities, addVariant }) {
  addUtilities({
    '.rotate-y-20': {
      transform: 'rotateY(20deg)',
    },
    '.rotate-y-40': {
      transform: 'rotateY(40deg)',
    },
    '.rotate-y-60': {
      transform: 'rotateY(60deg)',
    },
    '.rotate-y-80': {
      transform: 'rotateY(80deg)',
    },
    '.rotate-y-100': {
      transform: 'rotateY(100deg)',
    },
    '.rotate-y-120': {
      transform: 'rotateY(120deg)',
    },
    '.rotate-y-140': {
      transform: 'rotateY(140deg)',
    },
    '.rotate-y-160': {
      transform: 'rotateY(160deg)',
    },
    '.rotate-y-180': {
      transform: 'rotateY(180deg)',
    },
  }),
  addVariant ('hover', '&:hover')
})


module.exports = {
	content: [
		"./application/views/**/*.{php,js}",
		"./assets/js/**/*.js",
	],
	theme: {
		screens: {
			"xs": "375px",
			'sm': '640px',
			'md': '768px',
			'lg': '1024px',
			'xl': '1280px',
			'2xl': '1536px',
			'3xl': '1700px',
			'4xl': '1920px',
		},
		extend: {
			fontFamily: {
				"montserrat": ["Montserrat", "sans-serif"],
				"nunito": ["Nunito", "sans-serif"],
			},
			colors: {
				"primary": "#DB4231",
				"secondary": "#204F9D",
				"blue-accent": "#E9EDF5",
				"blue-accent-2": "#B8C7E0",
				"blue-accent-3": "#7995C4",
				"red-accent-3": "#FBECEA",
				"custom-gray": "#D4D4D4",
			},
			borderRadius: {
				"4xl": "2rem",
				"5xl": "2.5rem",
				"6xl": "3rem",
				"7xl": "4rem",
				"8xl": "5rem",
			},
			zIndex: {
				"100": "100",
				"1000": "1000",
			},
			height: {
				"LGModal": "80vh",
				"12vh": "12vh",
				"13vh": "13vh",
				"88vh": "88vh",
				"70vh": "70vh",
				"60vh": "60vh",

			},
		},
	},
	plugins: [rotateY],
}
