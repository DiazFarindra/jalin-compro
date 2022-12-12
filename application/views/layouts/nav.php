<nav class="nav top-0 absolute sm:absolute md:relative lg:absolute left-0 w-full py-0 lg:py-4 <?= $navbarTextColor; ?> z-40">
	<section id="sidebar" class="w-full h-screen fixed top-0 right-0 flex justify-end z-40 translate-x-full duration-500 text-white">
		<section id="sidebar-overlay" class="sidebar-overlay w-full h-screen fixed top-0 left-0 bg-black opacity-0 duration-500"></section>
		<section class="sidebar-content w-3/4 h-screen bg-secondary z-30 px-5 py-4">
			<div class="sidebar-title flex justify-between items-center">
				<div class="sidebar-brand">
					<a href="<?= base_url() ?>">
						<img id="jalin-logo-sidebar" src="<?= base_url("assets/img/home/jalin-white.webp") ?>" alt="jalin-logo-white" width="64" height="64" class="w-20 h-20 md:w-24 md:h-24 lg:w-24 lg:h-24 xl:w-28 xl:h-28 4xl:w-40 4xl:h-40 sm:w-16 sm:h-16">
					</a>
				</div>
				<div id="close-button-sidebar">
					<button class="close-button cursor-pointer"><i class="fa-solid fa-xmark text-xl"></i></button>
				</div>
			</div>
			<div class="sidebar-menu text-right mt-5 font-nunito">
				<ul class="w-full flex flex-col gap-y-5 duration-500">
					<li>
						<a href="<?= base_url("") ?>">Beranda</a>
					</li>
					<li>
						<a href="#" class="dropdown-menu flex justify-end">
							<div class="arrow-icon duration-200"><i class="fa-solid fa-angle-down px-3"></i></div> Perusahaan
						</a>
						<ul class="w-full flex-col gap-y-5 pt-5 dropdown-items hidden opacity-0 duration-300">
							<li class="w-full">
								<a href="<?= base_url("id-id/perusahaan/tentang-jalin") ?>" class="text-gray-100 block">Tentang Jalin</a>
							</li>
							<li class="w-full">
								<a href="<?= base_url("id-id/perusahaan/manajemen") ?>" class="text-gray-100 block">Manajemen</a>
							</li>
							<li class="w-full">
								<a href="<?= base_url("id-id/perusahaan/faq") ?>" class="text-gray-100 block">FAQ</a>
							</li>
							<li class="w-full">
								<a href="<?= base_url("id-id/perusahaan/syarat-dan-ketentuan") ?>" class="text-gray-100 block">Syarat Dan Ketentuan</a>
							</li>
							<!-- <li class="w-full">
								<a href="<?= base_url("id-id/perusahaan/hubungan-investor") ?>" class="text-gray-100 block">Hubungan Investor</a>
							</li> -->
						</ul>
					</li>
					<li>
						<a href="#" class="dropdown-menu flex justify-end">
							<div class="arrow-icon duration-200"><i class="fa-solid fa-angle-down px-3"></i></div> Produk & Layanan
						</a>
						<ul class="w-full flex-col gap-y-5 pt-5 dropdown-items hidden opacity-0 duration-200">
							<li class="w-full">
								<a href="<?= base_url("id-id/produk-dan-layanan") ?>" class="text-gray-100 block">Produk & Layanan</a>
							</li>
							<li class="w-full">
								<a href="https://playbook.jalin.co.id" class="text-gray-100 block">Jalin Playbook</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" class="dropdown-menu flex justify-end">
							<div class="arrow-icon duration-200"><i class="fa-solid fa-angle-down px-3"></i></div> Berita & Promo
						</a>
						<ul class="w-full flex-col gap-y-5 pt-5 dropdown-items hidden opacity-0 duration-200">
							<li class="w-full">
								<a href="<?= base_url("id-id/berita") ?>" class="text-gray-100 block">Berita</a>
							</li>
							<li class="w-full">
								<a href="<?= base_url("id-id/promo") ?>" class="text-gray-100 block">Promo</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?= base_url("id-id/karir") ?>">Karir</a>
					</li>
					<li>
						<a href="<?= base_url("id-id/hubungi-kami") ?>">Hubungi Kami</a>
					</li>
				</ul>
			</div>
		</section>
	</section>
	<section id="navbar" class="h-auto w-full duration-500 z-30 px-5 py-3 sm:px-10 md:px-5 lg:px-10 xl:px-16 sm:py-2">
		<section class="navbar w-full h-full flex justify-between items-center container">
			<section id="navbar-brand">
				<a href="<?= base_url() ?>">
					<img id="jalin-logo" src="<?= base_url("assets/img/home/jalin.webp") ?>" alt="jalin-logo" width="64" height="64" class="w-24 h-24 md:w-28 md:h-28 lg:w-24 lg:h-24 xl:w-28 xl:h-28 4xl:w-40 4xl:h-40 sm:w-24 sm:h-24">
				</a>
			</section>
			<button id="humburger-menu" class="relative z-30 w-auto h-full lg:hidden flex items-center">
				<section class="h-auto flex items-center lg:hidden">
					<i class="fa-solid fa-bars text-2xl text-secondary peer"></i>
				</section>
			</button>
			<section id="navbar-menu" class="hidden lg:block">
				<ul class="h-full flex items-center space-x-3 lg:space-x-3 xl:space-x-10">
					<li>
						<a href="<?= base_url("") ?>" class="text-base md:text-sm lg:text-base 4xl:text-xl whitespace-nowrap hover:bg-secondary hover:text-white px-2 py-1 rounded-lg">Beranda</a>
					</li>
					<li class="relative group py-2">
						<a href="#" class="group text-base md:text-sm lg:text-base 4xl:text-xl whitespace-nowrap hover:bg-secondary hover:text-white px-2 py-1 rounded-lg">Perusahaan<i class="fa-solid fa-angle-down pl-3"></i></a>
						<ul class="absolute rounded-lg overflow-hidden w-52 bg-white shadow-md shadow-gray-500 hidden group-hover:flex flex-col transform -translate-x-20 translate-y-2">
							<li class="w-full">
								<a href="<?= base_url("id-id/perusahaan/tentang-jalin") ?>" class="text-neutral-700 font-nunito block py-4 px-4 hover:bg-secondary hover:text-white duration-300">Tentang Jalin</a>
							</li>
							<li class="w-full">
								<a href="<?= base_url("id-id/perusahaan/manajemen") ?>" class="text-neutral-700 font-nunito block py-3 px-4 hover:bg-secondary hover:text-white duration-300">Manajemen</a>
							</li>
							<li class="w-full">
								<a href="<?= base_url("id-id/perusahaan/faq") ?>" class="text-neutral-700 font-nunito block py-3 px-4 hover:bg-secondary hover:text-white duration-300">FAQ</a>
							</li>
							<li class="w-full">
								<a href="<?= base_url("id-id/perusahaan/syarat-dan-ketentuan") ?>" class="text-neutral-700 font-nunito block py-3 px-4 hover:bg-secondary hover:text-white duration-300">Syarat Dan Ketentuan</a>
							</li>
							<!-- <li class="w-full">
								<a href="#" class="text-neutral-700 font-nunito block py-3 px-4 hover:bg-secondary hover:text-white duration-300">GCG</a>
							</li>
							<li class="w-full">
								<a href="<?= base_url("id-id/perusahaan/hubungan-investor") ?>" class="text-neutral-700 font-nunito block py-3 px-4 hover:bg-secondary hover:text-white duration-300">Hubungan Investor</a>
							</li> -->
						</ul>
					</li>
					<li class="relative group py-2">
						<a href="" class="group text-base md:text-sm lg:text-base 4xl:text-xl whitespace-nowrap hover:bg-secondary hover:text-white px-2 py-1 rounded-lg">Produk & Layanan<i class="fa-solid fa-angle-down pl-3"></i></a>
						<ul class="absolute rounded-lg overflow-hidden w-52 bg-white shadow-md shadow-gray-500 hidden group-hover:flex flex-col transform -translate-x-8 translate-y-2">
							<li class="w-full">
								<a href="<?= base_url("id-id/produk-dan-layanan") ?>" class="text-neutral-700 font-nunito block py-4 px-4 hover:bg-secondary hover:text-white duration-300">Produk & Layanan</a>
							</li>
							<li class="w-full">
								<a href="https://playbook.jalin.co.id" class="text-neutral-700 font-nunito block py-3 px-4 hover:bg-secondary hover:text-white duration-300">Jalin Playbook</a>
							</li>
						</ul>
					</li>
					<li class="relative group py-2">
						<a href="#" class="text-base md:text-sm lg:text-base 4xl:text-xl whitespace-nowrap hover:bg-secondary hover:text-white px-2 py-1 rounded-lg">Berita & Promo<i class="fa-solid fa-angle-down pl-3"></i></a>
						<ul class="absolute rounded-lg overflow-hidden w-52 bg-white shadow-md shadow-gray-500 hidden group-hover:flex flex-col transform -translate-x-16 translate-y-2">
							<li class="w-full">
								<a href="<?= base_url("id-id/berita") ?>" class="text-neutral-700 font-nunito block py-3 px-4 hover:bg-secondary hover:text-white duration-300">Berita</a>
							</li>
							<li class="w-full">
								<a href="<?= base_url("id-id/promo") ?>" class="text-neutral-700 font-nunito block py-3 px-4 hover:bg-secondary hover:text-white duration-300">Promo</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?= base_url("id-id/karir") ?>" class="text-base md:text-sm lg:text-base 4xl:text-xl whitespace-nowrap hover:bg-secondary hover:text-white px-2 py-1 rounded-lg">Karir</a>
					</li>
					<li>
						<a href="<?= base_url("id-id/hubungi-kami") ?>" class="text-base md:text-sm lg:text-base 4xl:text-xl whitespace-nowrap hover:bg-secondary hover:text-white px-2 py-1 rounded-lg">Hubungi Kami</a>
					</li>
				</ul>
			</section>
		</section>
	</section>
</nav>
