let video = document.getElementById("youtube-video");
let closeVideo = document.getElementById("close-button-youtube");
let overlay = document.getElementById("overlay-modal-video");
let cardVideos = document.querySelectorAll(".card-videos");
let playVideo = document.getElementById("video");

for (let i = 0; i < cardVideos.length; i++) {
	cardVideos[i].addEventListener('click', function () {
		let videoId = this.getAttribute("data-videoid");
		playVideo.innerHTML = "<iframe width='560' height='315' src='https://www.youtube.com/embed/" + videoId + "'" + "title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen class='w-3/4 h-auto aspect-video'></iframe>"
		video.classList.add("flex");
		video.classList.remove("hidden");
		overlay.classList.remove("hidden");
		overlay.classList.remove("opacity-0");
		overlay.classList.add("opacity-60");

	});

	closeVideo.addEventListener("click", function () {
		playVideo.innerHTML = "";
		video.classList.remove("flex");
		video.classList.add("hidden");
		overlay.classList.add("hidden");
		overlay.classList.add("opacity-0");
		overlay.classList.remove("opacity-60");
	});

}
