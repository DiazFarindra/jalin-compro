let btnFilter = document.getElementById("filterButton");

btnFilter.addEventListener('click', () => {
	let filterBody = document.getElementById("filterBody");
	let filterButtonOpen = document.getElementById("filterButtonImg");
	let filterButtonClose = document.getElementById("filterButtonClose");
	if(filterBody.classList.contains("hidden")) {
		filterBody.classList.remove("hidden");
		filterBody.classList.add("flex");
		filterButtonOpen.classList.add("hidden");
		filterButtonClose.classList.remove("hidden");
	} else {
		filterBody.classList.remove("flex");
		filterBody.classList.add("hidden");
		filterButtonOpen.classList.remove("hidden");
		filterButtonClose.classList.add("hidden");
	}
})
