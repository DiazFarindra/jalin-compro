<main>
	<header id="header" class="w-full h-[46vh] md:h-auto md:aspect-[5/2] text-white py-5 relative">
		<section id="header-background" class="w-full h-[46vh] md:h-full md:aspect-[5/2] absolute top-0 left-0 -z-10">
			<img src="<?= base_url("assets/img/contact-us/hero.jpg") ?>" alt="Header image" class="w-full h-[46vh] md:h-auto md:aspect-[5/2] object-cover">
			<section id="overlay" class="absolute top-0 left-0 w-full h-full opacity-100 bg-gradient-to-t from-secondary"></section>
		</section>

		<section id="hero" class="px-5 xs:px-8 sm:px-12 md:px-16 lg:px-20 w-full 4xl:w-full h-[46vh] md:h-auto md:aspect-[5/2] flex flex-col justify-center wow fadeIn container" style="margin-bottom:-41px;">
			<h1 class="w-full text-lg font-bold text-center xs:text-3xl sm:text-4xl md:text-5xl lg:text-7xl 3xl:text-8xl sm:font-extrabold lg:text-left">
				<span class="leading-normal sm:leading-tight">
					Hubungi Kami
				</span>
			</h1>
			<p class="w-full pt-5 text-sm text-center xs:text-base sm:text-xl md:text-xl 3xl:text-2xl font-nunito lg:text-left">
				<span class="leading-relaxed sm:leading-relaxed">
					<!-- Menyediakan teknologi layanan keuangan yang aman, berinterkoneksi, terintegrasi, dan efisien #JadiTerhubung -->
				</span>
			</p>
		</section>
	</header>


	<!-- <header id="header" class="w-full h-auto aspect-[5/2] text-white py-5 relative">
		<section id="header-background" class="w-full h-full aspect-[5/2] absolute top-0 left-0 -z-10">
			<img src="<?= base_url("assets/img/contact-us/hero.jpg") ?>" alt="Header image" class="object-cover object-bottom w-full h-full">
			<section id="overlay" class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-secondary opacity-90"></section>
		</section>

		<section id="hero" class="px-5 sm:px-10 md:px-14 lg:px-20 xl:px-28 w-full 4xl:w-full h-auto aspect-[5/2] flex flex-col justify-center wow fadeIn container">
			<h1 class="text-3xl font-bold text-left sm:text-4xl md:text-5xl lg:text-7xl 3xl:text-8xl sm:font-extrabold sm:text-left">
				<span class="leading-normal sm:leading-tight">
					Hubungi Kami
				</span>
			</h1>
			<p class="w-full pt-5 text-base text-center sm:text-xl 3xl:text-2xl font-nunito lg:w-3/4 sm:text-left xl:w-3/5 4xl:w-1/2">
				<span class="leading-loose sm:leading-relaxed">
					Menyediakan teknologi layanan keuangan yang aman, berinterkoneksi, terintegrasi, dan efisien #JadiTerhubung
				</span>
			</p>
		</section>
	</header> -->

	<section id="contact-us" class="w-full h-auto px-5 py-10 bg-white lg:py-20 md:px-20 lg:px-20">
		<div class="w-full pb-10 text-center title">
			<h3 class="text-2xl font-bold xl:text-3xl 2xl:text-4xl text-primary">Hubungi Kami</h3>
		</div>
		<div class="contact grid grid-cols-1 lg:grid-cols-2 2xl:aspect-[4/1] w-full h-auto">
			<div class="w-full h-auto img">
				<div class="w-full h-auto mapouter">
					<div class="gmap_canvas"><iframe class="w-full h-full" id="gmap_canvas" src="https://maps.google.com/maps?q=PT%20Jalin%20Pembayaran%20Nusantara%20Menara%20Dea%20Tower%201%20Lantai%202%20Jalan%20Mega%20Kuningan%20Barat%20IX%20Kav.E.4.3%20No.1%20Jakarta%20Selatan%2012950&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/divi-discount/"></a><br>
						<style>
							.mapouter {
								position: relative;
								text-align: right;
								height: 100%;
								width: 100%;
							}
						</style><a href="https://www.embedgooglemap.net"></a>
						<style>
							.gmap_canvas {
								overflow: hidden;
								background: none !important;
								height: 100%;
								width: 100%;
							}
						</style>
					</div>
				</div>
			</div>
			<div class="w-full h-full px-0 py-8 pb-5 form lg:px-10 lg:py-0">
				<form action="" class="flex flex-col justify-between h-full gap-y-5">
					<div class="flex flex-col gap-y-5">
						<input type="text" placeholder="Apa yang bisa kami bantu?*" class="w-full h-14 2xl:h-20 border-b-[#a3a3a3] border-b outline-none px-2">
						<input type="text" placeholder="Nama*" class="w-full h-14 2xl:h-20 border-b-[#a3a3a3] border-b outline-none px-2">
						<input type="text" placeholder="Email*" class="w-full h-14 2xl:h-20 border-b-[#a3a3a3] border-b outline-none px-2">
						<input type="text" placeholder="Telepon*" class="w-full h-14 2xl:h-20 border-b-[#a3a3a3] border-b outline-none px-2">
						<input type="text" placeholder="Pesan" class="w-full h-14 2xl:h-20 border-b-[#a3a3a3] border-b outline-none px-2">
					</div>
					<button class="text-white btn-primary bg-secondary w-min">
						Submit
					</button>
				</form>
			</div>
		</div>
	</section>

	<section id="section-3" class="px-5 py-5 pb-10 lg:px-20 lg:py-20">
		<div class="w-full pb-10 text-center title">
			<h3 class="text-2xl font-bold text-white xl:text-3xl">Fitur Kami</h3>
		</div>
		<div class="grid w-full h-auto grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-x-10 gap-y-10">
			<div class="card-item py-5 w-full h-auto md:min-h-[540px] xl:min-h-[500px] aspect-[5/6] bg-[#E9EDF5] flex flex-col items-center rounded-2xl shadow-lg gap-y-10 px-9">
				<img src="<?= base_url("assets/img/contact-us/address.png") ?>" alt="square-card" class="w-1/2 h-[40%] object-contain">
				<h3 class="text-xl font-bold text-center text-secondary">Alamat</h3>
				<p class="px-0 text-lg text-justify 2xl:px-10">
					PT Jalin Pembayaran Nusantara <br>
					Menara Dea, Tower 1 Lantai 2 <br>
					Jalan Mega Kuningan Barat IX Kav. E.4.3 No.1 <br>
					Jakarta Selatan 12950
				</p>
			</div>
			<div class="card-item py-5 w-full h-auto md:min-h-[540px] xl:min-h-[500px] aspect-[5/6] bg-red-accent-3 flex flex-col items-center rounded-2xl shadow-lg gap-y-10 px-9">
				<img src="<?= base_url("assets/img/contact-us/phone.png") ?>" alt="square-card" class="w-1/2 h-[40%] object-contain">
				<h3 class="text-xl font-bold text-center text-secondary">Telepon</h3>
				<p class="px-0 text-lg 2xl:px-10">
					+62-21-57956840
				</p>
			</div>
			<div class="card-item py-5 w-full h-auto md:min-h-[540px] xl:min-h-[500px] aspect-[5/6] bg-[#e5e5e5] flex flex-col items-center rounded-2xl shadow-lg gap-y-10 px-9">
				<img src="<?= base_url("assets/img/contact-us/email.png") ?>" alt="square-card" class="w-1/2 h-[40%] object-contain">
				<h3 class="text-xl font-bold text-center text-secondary">Email</h3>
				<p class="px-0 text-lg 2xl:px-10">
					Corporate@jalin.co.id
				</p>
			</div>
		</div>
	</section>
</main>
