const sidebar = document.getElementById("sidebar");
const sidebarOverlay = document.getElementById("sidebar-overlay");
const humburgerMenu = document.getElementById("humburger-menu");
const closeButtonSidebar = document.getElementById("close-button-sidebar");
const navbarItems = document.querySelectorAll(".navbar-item");

window.addEventListener("scroll", () => {
	const header = document.getElementById("header");
	const hero = document.getElementById("hero");
	const navbar = document.getElementById("navbar");
	const jalinLogo = document.getElementById("jalin-logo");
	let clientHeight = window.innerHeight;
	let clinetHeightQuarter = 0.25 * clientHeight;
	let headerScroll = document.getElementById("body").getBoundingClientRect().top;
	let navbarFixed = clinetHeightQuarter + headerScroll;

	if (navbarFixed < 0) {
		navbar.classList.add("fixed");
		navbar.classList.add("top-0");
		navbar.classList.add("left-0");
		navbar.classList.add("bg-white");
		navbar.classList.add("text-black");
		navbar.classList.add("h-13vh");
		navbar.classList.remove("h-12vh");
		jalinLogo.classList.remove("4xl:w-40");
		jalinLogo.classList.remove("4xl:h-40");
		jalinLogo.classList.add("4xl:w-32");
		jalinLogo.classList.add("4xl:h-32");
		jalinLogo.classList.remove("xl:w-28");
		jalinLogo.classList.remove("xl:h-28");
		jalinLogo.classList.add("xl:w-24");
		jalinLogo.classList.add("xl:h-24");
		console.log(jalinLogo.classList);
		for (let i = 0; i < navbarItems.length; i++) {
			navbarItems[i].classList.remove("after:border-white");
			navbarItems[i].classList.add("after:border-black");
		}
	} else {
		navbar.classList.remove("fixed");
		navbar.classList.remove("top-0");
		navbar.classList.remove("left-0");
		navbar.classList.remove("bg-white");
		navbar.classList.remove("text-black");
		navbar.classList.remove("h-13vh");
		navbar.classList.add("h-12vh");
		jalinLogo.classList.remove("4xl:w-32");
		jalinLogo.classList.remove("4xl:h-32");
		jalinLogo.classList.add("4xl:w-40");
		jalinLogo.classList.add("4xl:h-40");
		jalinLogo.classList.remove("xl:w-24");
		jalinLogo.classList.remove("xl:h-24");
		jalinLogo.classList.add("xl:w-28");
		jalinLogo.classList.add("xl:h-28");
		for (let i = 0; i < navbarItems.length; i++) {
			navbarItems[i].classList.remove("after:border-black");
			navbarItems[i].classList.add("after:border-white");
		}
	}
})

humburgerMenu.addEventListener("click", openSidebar);
closeButtonSidebar.addEventListener("click", closeSidebar);

function openSidebar() {
	sidebar.classList.remove("translate-x-full");
	humburgerMenu.classList.add("hidden");
	setTimeout(() => {
		sidebarOverlay.classList.add("opacity-40")
		sidebarOverlay.classList.remove("opacity-0")
	}, 400);
}

function closeSidebar() {
	sidebarOverlay.classList.remove("opacity-40")
	sidebarOverlay.classList.add("opacity-0")
	setTimeout(() => {
		sidebar.classList.add("translate-x-full");
		humburgerMenu.classList.remove("hidden");
	}, 300);
}


const dropdownMenu = document.querySelectorAll(".dropdown-menu");
const dropdownItems = document.querySelectorAll(".dropdown-items");
const arrowIcon = document.querySelectorAll(".arrow-icon");

for (let i = 0; i < dropdownMenu.length; i++) {
	dropdownMenu[i].addEventListener("click", function () {

		let validate = dropdownItems[i].classList.contains("hidden");
		if (validate) {
			dropdownItems[i].classList.remove("hidden");
			dropdownItems[i].classList.add("flex");
			console.log(arrowIcon);
			arrowIcon[i].classList.add("rotate-180");
			setTimeout(() => {
				dropdownItems[i].classList.remove("opacity-0");
			}, 100);
		} else {
			dropdownItems[i].classList.add("opacity-0");
			setTimeout(() => {
				arrowIcon[i].classList.remove("rotate-180");
				dropdownItems[i].classList.remove("flex");
				dropdownItems[i].classList.add("hidden");
			}, 100);
		}

	});
}

