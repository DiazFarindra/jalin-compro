const splideVideos = new Splide('#splide-videos', {
	type: "loop",
	perPage: 1,
	perMove: 1,
	arrows: false,
	pagination: false,
	autoplay: true,
	gap: "1rem",
	speed: 2000,
	pauseOnHover: true,
	interval: 3000,
	drag: true,
	mediaQuery: "min",
	padding: {left: "2rem", right: "2rem"},
	breakpoints: {
		768: {
			perPage: 2,
			drag: true,
			padding: {left: "3rem", right: "3rem"},
		},
		1024: {
			perPage: 3,
			drag: false,
			autoplay: false,
			pauseOnHover: false,
			padding: {left: "0", right: "0"},
		},
	},
}).mount();

// let splideComment1 = new Splide('#splide-comment-1', {
// 	type: "loop",
// 	perPage: 3,
// 	perMove: 1,
// 	arrows: false,
// 	pagination: false,
// 	autoplay: true,
// 	gap: "1rem",
// 	speed: 2000,
// 	pauseOnHover: false,
// 	interval: 3000,
// 	drag: true,
// 	breakpoints: {
// 		767 : {
// 			perPage: 1,
// 			drag: true,
// 		},
// 		1023 : {
// 			perPage: 2,
// 			drag: true
// 		},
// 	},
// }).mount();

const splideComment1 = new Splide('#splide-comment-1', {
	type: "loop",
	// rewind: true,
	focus: "center",
	perPage: 2,
	perMove: 1,
	arrows: false,
	pagination: false,
	pauseOnHover: true,
	gap: "4rem",
	autoStart: true,
	autoScroll: {
		speed: -3,
	},
	breakpoints: {
		767: {
			perPage: 1,
		},
		1023: {
			perPage: 1,
		},
		1366: {
			gap: "4rem",
		},
	},
}).mount(window.splide.Extensions);

const splideComment2 = new Splide('#splide-comment-2', {
	type: "loop",
	// rewind: true,
	focus: "center",
	perPage: 2,
	perMove: 1,
	arrows: false,
	pagination: false,
	pauseOnHover: true,
	gap: "4rem",
	autoStart: true,
	autoScroll: {
		speed: 3,
	},
	breakpoints: {
		767: {
			perPage: 1,
		},
		1023: {
			perPage: 1,
		},
		1366: {
			gap: "4rem",
		},
	},
}).mount(window.splide.Extensions);

const splideWhyWorkInJalin = new Splide('#splide-why-work-in-jalin', {
	// type: "loop",
	perPage: 3,
	perMove: 1,
	arrows: true,
	pagination: false,
	autoplay: true,
	gap: "4rem",
	speed: 500,
	pauseOnHover: true,
	interval: 2500,
	classes: {
		arrows: 'splide__arrows your-class-arrows',
		arrow: 'splide__arrow your-class-arrow',
		prev: 'splide__arrow--prev your-class-prev',
		next: 'splide__arrow--next your-class-next',
	},
	breakpoints: {
		767: {
			perPage: 1,
		},
		1023: {
			perPage: 1,
		},
		1366: {
			gap: "2rem",
		},
		2000: {
			perPage: 3,
		},
	},
}).mount();

// const splideCounting = new Splide('#splide-counting', {
// 	type: "loop",
// 	perPage: 5,
// 	perMove: 1,
// 	arrows: false,
// 	pagination: false,
// 	autoplay: true,
// 	gap: "4rem",
// 	speed: 500,
// 	pauseOnHover: true,
// 	interval: 2500,
// 	mediaQuery: "min",
// 	breakpoints: {
// 		0: {
// 			perPage: 1,
// 			drag: true,
// 		},
// 		500: {
// 			perPage: 2,
// 			drag: true,
// 		},
// 		768: {
// 			perPage: 3,
// 			drag: true,
// 		},
// 		1024: {
// 			perPage: 5,
// 			drag: false,
// 		},
// 	},
// }).mount();
