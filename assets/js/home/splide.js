let splideMember = new Splide('#splide-member', {
	type: "loop",
	perPage: 3,
	perMove: 1,
	arrows: false,
	pagination: false,
	autoplay: true,
	gap: "4rem",
	speed: 2000,
	pauseOnHover: false,
	interval: 3000,
	breakpoints: {
		767: {
			perPage: 3,
		},
		1366: {
			gap: "3rem",
		},
		2000: {
			perPage: 5,
			gap: "6rem"
		},
	},
}).mount();

let splideWhyUs = new Splide('#splide-why-us', {
	type: "slide",
	rewind: true,
	perPage: 1,
	perMove: 1,
	arrows: true,
	pagination: false,
	autoplay: true,
	gap: "1rem",
	speed: 1000,
	pauseOnHover: false,
	pauseOnFocus: true,
	interval: 4000,
	drag: true,
	padding: { left: "2rem", right: "2rem" },
	mediaQuery: "min",
	classes: {
		arrows: 'splide__arrows your-class-arrows',
		arrow: 'splide__arrow your-class-arrow',
		prev: 'splide__arrow--prev your-class-prev',
		next: 'splide__arrow--next your-class-next',
	},
	breakpoints: {
		500: {
			padding: { left: "4rem", right: "4rem" },
		},
		640: {
			padding: { left: "6rem", right: "6rem" },
		},
		768: {
			perPage: 3,
			drag: false,
			padding: { left: "0", right: "0" },
			autoplay: false,
			arrows: false,
		},
	},
}).mount();

let splideVideos = new Splide('#splide-videos', {
	type: "loop",
	rewind: true,
	perPage: 1,
	perMove: 1,
	arrows: true,
	pagination: false,
	autoplay: true,
	gap: "1rem",
	speed: 2000,
	pauseOnHover: false,
	interval: 4000,
	drag: true,
	padding: { left: "2rem", right: "2rem" },
	mediaQuery: "min",
	classes: {
		arrows: 'splide__arrows your-class-arrows',
		arrow: 'splide__arrow your-class-arrow',
		prev: 'splide__arrow--prev your-class-prev',
		next: 'splide__arrow--next your-class-next',
	},
	breakpoints: {
		500: {
			padding: { left: "4rem", right: "4rem" },
		},
		640: {
			padding: { left: "6rem", right: "6rem" },
		},
		768: {
			perPage: 2,
			drag: true,
			padding: { left: "4rem", right: "4rem" }
		},
		1024: {
			perPage: 3,
			drag: false,
			padding: { left: "0", right: "0" },
			autoplay: false,
			arrows: false,
		},
	},
}).mount();

let splideMomen = new Splide('#splide-momen', {
	type: "loop",
	rewind: "true",
	perPage: 1,
	perMove: 1,
	arrows: true,
	pagination: false,
	autoplay: true,
	gap: "1rem",
	speed: 1000,
	pauseOnHover: false,
	interval: 4000,
	padding: { left: "2rem", right: "2rem" },
	drag: true,
	mediaQuery: "min",
	classes: {
		arrows: 'splide__arrows your-class-arrows',
		arrow: 'splide__arrow your-class-arrow',
		prev: 'splide__arrow--prev your-class-prev',
		next: 'splide__arrow--next your-class-next',
	},
	breakpoints: {
		500: {
			padding: { left: "4rem", right: "4rem" },
		},
		640: {
			padding: { left: "6rem", right: "6rem" },
		},
		768: {
			perPage: 2,
			drag: true,
			padding: { left: "4rem", right: "4rem" }
		},
		1024: {
			perPage: 3,
			drag: false,
			padding: { left: "0", right: "0" },
			autoplay: false,
			arrows: false,
		},
	},
}).mount();

let splideModal = new Splide('#splide-modal', {
	type: "loop",
	perPage: 1,
	perMove: 1,
	arrows: false,
	autoplay: true,
	speed: 2000,
	pauseOnHover: false,
	interval: 3000,
	breakpoints: {
		height: '6rem',
	},
}).mount();

let splideModalMobile = new Splide('#splide-modal-mobile', {
	type: "loop",
	perPage: 1,
	perMove: 1,
	arrows: false,
	autoplay: true,
	speed: 2000,
	pauseOnHover: false,
	interval: 3000,
	breakpoints: {
		height: '6rem',
	},
}).mount();

