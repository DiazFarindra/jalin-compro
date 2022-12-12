window.addEventListener("scroll", () => {
	let sectionCounting = document.getElementById("counting");
	let screenHeight = window.innerHeight;
	let sectionCountingScroll = sectionCounting.getBoundingClientRect().top;
	let startCounting = sectionCountingScroll - screenHeight;
	if (startCounting < 0) {
		const counts = document.querySelectorAll(".count");
		counts.forEach(count => {
			const finalCount = +count.getAttribute("data-count");
			let c = +count.innerText;
			const updateCount = setInterval(() => {
				if (c < finalCount) {
					count.innerText = c += 1;
				} else {
					clearInterval(updateCount);
					count.innerText = count.getAttribute("data-count");
				}
			}, 20);
		});
	}
})
