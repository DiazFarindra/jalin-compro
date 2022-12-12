let closeButtonModal = document.getElementById("close-button-modal");

closeButtonModal.addEventListener("click", closeModal);

function closeModal() {
	let overlayModal = document.getElementById("overlay-modal");
	let modal = document.getElementById("modal");
	let body = document.getElementById("body");
	overlayModal.classList.add("duration-500");
	overlayModal.classList.add("opacity-0");
	overlayModal.classList.remove("opacity-60");
	modal.classList.add("duration-500");
	modal.classList.add("opacity-0");
	setTimeout(function () {
		overlayModal.classList.add("hidden");
		modal.classList.add("hidden");
		body.classList.remove("overflow-y-hidden");
	}, 500)
}
