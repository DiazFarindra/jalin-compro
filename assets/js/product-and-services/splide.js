let splideProducts = document.getElementsByClassName("splide-products");

for (let i = 0; i < splideProducts.length; i++) {

	new Splide(splideProducts[i], {
			type: "slide",
			perPage: 1,
			perMove: 1,
			arrows: false,
			pagination: false,
			autoplay: true,
			speed: 2000,
			pauseOnHover: true,
			interval: 3000,
			mediaQuery: 'min',
			breakpoints: {
				0 : {
					perPage: 1,
					gap: "1rem",
					padding: {left: "2rem", right: "2rem"},
				},
				768 : {
					perPage: 2,
					gap: "1rem",
					padding: {left: "3rem", right: "3rem"},
				},
				1024 : {
					type: "slide",
					autoplay: false,
					drag: false,
					perPage: 4,
					gap: "1rem",
					padding: {left: "0", right: "0"},
				},
				1280 : {
					gap: "2rem",
				},
				1500 : {
					gap: "4rem"
				}
			},
	}).mount();

}


// let splideSwitching = new Splide('#splide-switching', {
// 	type: "slide",
// 	rewind: true,
// 	perPage: 1,
// 	perMove: 1,
// 	arrows: false,
// 	pagination: false,
// 	autoplay: true,
// 	speed: 2000,
// 	pauseOnHover: true,
// 	interval: 3000,
// 	mediaQuery: 'min',
// 	breakpoints: {
// 		0 : {
// 			perPage: 1,
// 			gap: "1rem",
// 			padding: {left: "2rem", right: "2rem"},
// 		},
// 		768 : {
// 			perPage: 2,
// 			gap: "1rem",
// 			padding: {left: "3rem", right: "3rem"},
// 		},
// 		1024 : {
// 			type: "slide",
// 			autoplay: false,
// 			drag: false,
// 			perPage: 4,
// 			gap: "1rem",
// 			padding: {left: "0", right: "0"},
// 		},
// 		1280 : {
// 			gap: "2rem",
// 		},
// 		1500 : {
// 			gap: "4rem"
// 		}
// 	},
// }).mount();

// let splideDigital = new Splide('#splide-digital', {
// 	type: "slide",
// 	perPage: 1,
// 	perMove: 1,
// 	arrows: false,
// 	pagination: false,
// 	autoplay: true,
// 	speed: 2000,
// 	pauseOnHover: true,
// 	interval: 3000,
// 	mediaQuery: 'min',
// 	breakpoints: {
// 		0 : {
// 			perPage: 1,
// 			gap: "1rem",
// 			padding: {left: "2rem", right: "2rem"},
// 		},
// 		768 : {
// 			perPage: 2,
// 			gap: "1rem",
// 			padding: {left: "3rem", right: "3rem"},
// 		},
// 		1024 : {
// 			type: "slide",
// 			autoplay: false,
// 			drag: false,
// 			perPage: 4,
// 			gap: "1rem",
// 			padding: {left: "0", right: "0"},
// 		},
// 		1280 : {
// 			gap: "2rem",
// 		},
// 		1500 : {
// 			gap: "4rem"
// 		}
// 	},
// }).mount();

// let splideManagedService = new Splide('#splide-managed-service', {
// 	type: "slide",
// 	perPage: 1,
// 	perMove: 1,
// 	arrows: false,
// 	pagination: false,
// 	autoplay: true,
// 	speed: 2000,
// 	pauseOnHover: true,
// 	interval: 3000,
// 	mediaQuery: 'min',
// 	breakpoints: {
// 		0 : {
// 			perPage: 1,
// 			gap: "1rem",
// 			padding: {left: "2rem", right: "2rem"},
// 		},
// 		768 : {
// 			perPage: 2,
// 			gap: "1rem",
// 			padding: {left: "3rem", right: "3rem"},
// 		},
// 		1024 : {
// 			type: "slide",
// 			autoplay: false,
// 			drag: false,
// 			perPage: 4,
// 			gap: "1rem",
// 			padding: {left: "0", right: "0"},
// 		},
// 		1280 : {
// 			gap: "2rem",
// 		},
// 		1500 : {
// 			gap: "4rem"
// 		}
// 	},
// }).mount();
