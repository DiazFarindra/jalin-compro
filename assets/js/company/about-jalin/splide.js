let splideMember = new Splide('#splide-visi', {
	type: "fade",
	rewind: "true",
	perPage: 1,
	perMove: 1,
	arrows: false,
	pagination: true,
	autoplay: true,
	speed: 2000,
	pauseOnHover: true,
	interval: 3000,
	classes: {
		pagination: 'splide__pagination your-class-pagination',
		page      : 'splide__pagination__page your-class-page',
  },
}).mount();
