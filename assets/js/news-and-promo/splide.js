let splideOtherNews = new Splide('#splide-other', {

	type: "slide",

	perPage: 3,

	perMove: 1,

	arrows: false,

	pagination: false,

	autoplay: false,

	gap: "1rem",

	speed: 2000,

	pauseOnHover: false,

	interval: 3000,

	drag: false,

	breakpoints: {

		767 : {

			perPage: 1,

			drag: true,

		},

		1023 : {

			perPage: 2,

			drag: true

		},

	},

}).mount();

let splideVisi = new Splide('#splide-visi', {

	type: "slide",

	perPage: 1,

	perMove: 1,

	arrows: false,

	pagination: false,

	autoplay: false,

	gap: "0",

	speed: 2000,

	pauseOnHover: false,

	interval: 3000,

	drag: false,

	breakpoints: {

		767 : {

			perPage: 1,

			drag: true,

		},

		1023 : {

			perPage: 2,

			drag: true

		},

	},

}).mount();

