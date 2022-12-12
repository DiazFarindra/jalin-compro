let closeButtonModal = document.getElementById("close-button-modal");
let closeButtonModalMobile = document.getElementById("close-button-modal-mobile");

closeButtonModal.addEventListener("click", closeModal);
closeButtonModalMobile.addEventListener("click", closeModalMobile);

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
		modal.classList.add("md:hidden");
		body.classList.remove("overflow-y-hidden");
	}, 500)
}

function closeModalMobile() {
	let overlayModalMobile = document.getElementById("overlay-modal");
	let modalMobile = document.getElementById("modal-mobile");
	let body = document.getElementById("body");
	overlayModalMobile.classList.add("duration-500");
	overlayModalMobile.classList.add("opacity-0");
	overlayModalMobile.classList.remove("opacity-60");
	modalMobile.classList.add("duration-500");
	modalMobile.classList.add("opacity-0");
	setTimeout(function () {
		overlayModalMobile.classList.add("hidden");
		modalMobile.classList.add("hidden");
		modalMobile.classList.add("md:hidden");
		body.classList.remove("overflow-y-hidden");
	}, 500)
}
