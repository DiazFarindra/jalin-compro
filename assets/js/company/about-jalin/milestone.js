let milestoneCard = document.getElementById("milestoneCard");
let milestoneOverlay = document.getElementById("milestoneOverlay");
let buttonExpand = document.getElementById("buttonExpandMilestone");

buttonExpand.addEventListener("click", () => {
	if (milestoneCard.classList.contains("h-screen")) {
		milestoneCard.classList.remove("h-screen");
		milestoneCard.classList.add("h-full");
		milestoneOverlay.classList.add("hidden");
		buttonExpand.innerHTML = "Tutup Milestone"
	} else {
		milestoneCard.classList.remove("h-full");
		milestoneCard.classList.add("h-screen");
		milestoneOverlay.classList.remove("hidden");
		buttonExpand.innerHTML = "Lihat Semua Milestone"
	}
})
