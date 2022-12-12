<main>

	<header id="header" class="w-full h-[46vh] md:h-auto md:aspect-[5/2] text-white py-5 relative">
		<section id="header-background" class="w-full h-[46vh] md:h-full md:aspect-[5/2] absolute top-0 left-0 -z-10" >
			<img src="<?= base_url("assets/img/product-and-services/hero-new.jpg") ?>" alt="Header image" class="w-full h-[46vh] md:h-auto md:aspect-[5/2] object-cover">
			<section id="overlay" class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-secondary opacity-100"></section>
		</section>

		<section id="hero" class="px-5 xs:px-8 sm:px-12 md:px-16 lg:px-20 w-full 4xl:w-full h-[46vh] md:h-auto md:aspect-[5/2] flex flex-col justify-center wow fadeIn container" style="margin-bottom:-42px">
			<!-- <h1 class="text-lg xs:text-3xl sm:text-4xl md:text-5xl lg:text-7xl 3xl:text-8xl font-bold sm:font-extrabold text-center lg:text-left w-full">
				<span class="leading-normal sm:leading-tight">
					Produk & Layanan
				</span>
			</h1>
			<p class="text-sm xs:text-base sm:text-xl md:text-xl 3xl:text-2xl pt-5 font-nunito w-full text-center lg:text-left">
				<span class="leading-relaxed sm:leading-relaxed">
					Menghadirkan beragam layanan keuangan digital demi memberikan pengalaman transaksi yang semakin berarti untukmu.
				</span>
			</p> -->
		</section>
	</header>
	<!-- <section class="w-full h-full aspect-[5/2] bg-white bg-[url('../img/product-and-services/hero.jpg')] bg-cover relative bg-center lg:bg-left">
		<section id="overlay-hero" class="w-full h-full bg-gradient-to-t from-secondary absolute top-0 left-0"></section>

		<section id="hero" class="px-5 sm:px-10 md:px-14 lg:px-20 xl:px-28 w-full 4xl:w-full aspect-[5/2] flex flex-col justify-center wow fadeIn container relative top-0 text-white">
			<h1 class="text-base xs:text-xl sm:text-4xl md:text-5xl lg:text-7xl 3xl:text-8xl font-bold sm:font-extrabold text-left">
				<span class="leading-normal sm:leading-tight">
					Produk & Layanan
				</span>
			</h1>
			<p class="text-sm xs:text-base sm:text-xl md:text-xl 3xl:text-2xl pt-2 xs:pt-3 sm:pt-5 font-nunito w-full lg:w-3/4 text-left xl:w-3/5 4xl:w-1/2">
				<span class="leading-relaxed sm:leading-relaxed">
					Menghadirkan beragam layanan keuangan digital demi memberikan pengalaman transaksi yang semakin berarti untukmu.
				</span>
			</p>
		</section>
	</section> -->

	<section class="w-full h-auto bg-secondary">
		<section class="bg-primary rounded-t-5xl w-full h-full py-10 2xl:py-16 px-5 xs:px-8 sm:px-10 lg:px-20 relative">
			<div class="bg-img h-auto w-full absolute px-10 lg:px-20 left-0 flex justify-end items-center container">
				<img src="<?= base_url("assets/img/product-and-services/switching.png") ?>" alt="switching" class="w-[20%] h-full object-contain mt-10 hidden md:flex">
			</div>
			<div class="title w-full text-center pb-10">
				<h3 class="text-2xl font-bold xl:text-3xl 2xl:text-4xl text-white">Switching</h3>
			</div>
			<section class="splide w-full h-auto wow fadeInUp container splide-products" data-wow-delay="0.5s" aria-labelledby="carousel-heading">
				<div class="splide__track h-full">
					<ul class="splide__list h-full">
						<li class="splide__slide w-full aspect-[6/5]">
							<a href="<?= base_url("id-id/produk-dan-layanan/switching/jaringan-atm-link") ?>">
								<div class="card p-4 text-center w-full h-full flex items-center justify-center flex-col gap-y-4 bg-white rounded-2xl">
									<h5 class="text-primary text-lg 2xl:text-xl font-bold">Jaringan ATM Link</h5>
									<p class="2xl:text-lg">#JadiTerhubung</p>
									<button class="btn-primary border-primary text-primary hover:bg-primary">
										Selengkapnya
									</button>
								</div>
							</a>
						</li>
						<li class="splide__slide w-full aspect-[6/5]">
							<a href="<?= base_url("id-id/produk-dan-layanan/switching/debit-link") ?>">
								<div class="card p-4 text-center w-full h-full flex items-center justify-center flex-col gap-y-4 bg-white rounded-2xl">
									<h5 class="text-primary text-lg 2xl:text-xl font-bold">Debit Link</h5>
									<p class="2xl:text-lg">#TemenFleksibelmu</p>
									<button class="btn-primary border-primary text-primary hover:bg-primary">
										Selengkapnya
									</button>
								</div>
							</a>
						</li>
						<li class="splide__slide w-full aspect-[6/5]">
							<a href="<?= base_url("id-id/produk-dan-layanan/switching/qris") ?>">
								<div class="card p-4 text-center w-full h-full flex items-center justify-center flex-col gap-y-4 bg-white rounded-2xl">
									<h5 class="text-primary text-lg 2xl:text-xl font-bold">QRIS</h5>
									<p class="2xl:text-lg">#PraktisDenganQRIS</p>
									<button class="btn-primary border-primary text-primary hover:bg-primary">
										Selengkapnya
									</button>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</section>
		</section>
	</section>

	<section class="w-full h-auto bg-primary">
		<section class="bg-secondary rounded-t-5xl w-full h-full py-10 px-5 xs:px-8 sm:px-10 lg:px-20 2xl:py-16">
			<div class="bg-img h-auto w-full absolute px-10 lg:px-20 left-0 flex justify-end items-center container">
				<img src="<?= base_url("assets/img/product-and-services/digital.png") ?>" alt="switching" class="w-[20%] h-full object-contain mt-10 hidden md:flex">
			</div>
			<div class="title w-full text-center pb-10">
				<h3 class="text-2xl font-bold xl:text-3xl 2xl:text-4xl text-white">Digital</h3>
			</div>
			<section class="splide w-full h-auto wow fadeInUp container splide-products" data-wow-delay="0.5s" aria-labelledby="carousel-heading">
				<div class="splide__track h-full">
					<ul class="splide__list h-full">
						<li class="splide__slide w-full aspect-[6/5]">
							<a href="<?= base_url("id-id/produk-dan-layanan/digital/jalin-virtual-atm") ?>">
								<div class="card p-4 text-center w-full h-full flex items-center justify-center flex-col gap-y-4 bg-white rounded-2xl">
									<h5 class="text-secondary text-lg 2xl:text-xl font-bold">Jalin Virtual ATM</h5>
									<p class="2xl:text-lg"></p>
									<button class="btn-primary">
										Selengkapnya
									</button>
								</div>
							</a>
						</li>
						<li class="splide__slide w-full aspect-[6/5]">
							<a href="<?= base_url("id-id/produk-dan-layanan/digital/jalin-verified") ?>">
								<div class="card p-4 text-center w-full h-full flex items-center justify-center flex-col gap-y-4 bg-white rounded-2xl">
									<h5 class="text-secondary text-lg 2xl:text-xl font-bold">Jalin Verified</h5>
									<p class="2xl:text-lg">#SekarangGPNJugaBisa</p>
									<button class="btn-primary">
										Selengkapnya
									</button>
								</div>
							</a>
						</li>
						<li class="splide__slide w-full aspect-[6/5]">
							<a href="<?= base_url("id-id/produk-dan-layanan/digital/jalin-cardless-withdrawal") ?>">
								<div class="card p-4 text-center w-full h-full flex items-center justify-center flex-col gap-y-4 bg-white rounded-2xl">
									<h5 class="text-secondary text-lg 2xl:text-xl font-bold">Jalin Cardless Withdrawal</h5>
									<p class="2xl:text-lg">#CardlessWorryLess</p>
									<button class="btn-primary">
										Selengkapnya
									</button>
								</div>
							</a>
						</li>
						<li class="splide__slide w-full aspect-[6/5]">
							<a href="<?= base_url("id-id/produk-dan-layanan/digital/jalin-payment-integrator") ?>">
								<div class="card p-4 text-center w-full h-full flex items-center justify-center flex-col gap-y-4 bg-white rounded-2xl">
									<h5 class="text-secondary text-lg 2xl:text-xl font-bold">Jalin Payment Integrator</h5>
									<p class="2xl:text-lg"></p>
									<button class="btn-primary">
										Selengkapnya
									</button>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</section>
		</section>
	</section>

	<section class="w-full h-auto bg-secondary">
		<section class="bg-neutral-700 rounded-t-5xl w-full h-full py-10 px-5 xs:px-8 sm:px-10 lg:px-20 2xl:py-16">
			<div class="bg-img h-auto w-full absolute px-10 lg:px-20 left-0 flex justify-end items-center container">
				<img src="<?= base_url("assets/img/product-and-services/managed-service.png") ?>" alt="switching" class="w-[20%] h-full object-contain mt-10 hidden md:flex">
			</div>
			<div class="title w-full text-center pb-10">
				<h3 class="text-2xl font-bold xl:text-3xl 2xl:text-4xl text-white">Managed Service</h3>
			</div>
			<section class="splide w-full h-auto wow fadeInUp container splide-products" data-wow-delay="0.5s" aria-labelledby="carousel-heading">
				<div class="splide__track h-full">
					<ul class="splide__list h-full">
						<li class="splide__slide w-full aspect-[6/5]">
							<a href="<?= base_url("id-id/produk-dan-layanan/managed-service/second-level-maintenance") ?>">
								<div class="card p-4 text-center w-full h-full flex items-center justify-center flex-col gap-y-4 bg-white rounded-2xl">
									<h5 class="text-neutral-700 text-lg 2xl:text-xl font-bold">Second Level Maintenance</h5>
									<p class="2xl:text-lg"></p>
									<button class="btn-primary border-neutral-700 text-neutral-700 hover:bg-neutral-700">
										Selengkapnya
									</button>
								</div>
							</a>
						</li>
						<li class="splide__slide w-full aspect-[6/5]">
							<a href="<?= base_url("id-id/produk-dan-layanan/managed-service/premises") ?>">
								<div class="card p-4 text-center w-full h-full flex items-center justify-center flex-col gap-y-4 bg-white rounded-2xl">
									<h5 class="text-neutral-700 text-lg 2xl:text-xl font-bold">Premises</h5>
									<p class="2xl:text-lg"></p>
									<button class="btn-primary border-neutral-700 text-neutral-700 hover:bg-neutral-700">
										Selengkapnya
									</button>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</section>
		</section>
	</section>

	<section id="membership" class="w-full h-auto py-10 lg:py-20 px-5 md:px-10 lg:px-20 2xl:px-32 container">
		<div class="title w-full text-center pb-10">
			<h3 class="text-2xl font-bold xl:text-3xl 2xl:text-4xl text-primary">Member Kami</h3>
		</div>
		<ul class="w-full grid grid-cols-3 md:grid-cols-5 gap-x-5 xl:gap-x-16 2xl:gap-x-20 gap-y-8 xl:gap-y-20 2xl:gap-y-32">
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/mandiri.webp") ?>" alt="mandiri-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/bni.webp") ?>" alt="bni-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/bri.webp") ?>" alt="bri-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/btn.webp") ?>" alt="btn-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/bsi.webp") ?>" alt="bsi-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/raya.webp") ?>" alt="raya-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/mandiri-taspen.webp") ?>" alt="mandiri-taspen-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/bank-sumut.webp") ?>" alt="bank-sumut-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/bank-sulteng.webp") ?>" alt="bank-sulteng-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/bank-bengkulu.webp") ?>" alt="bank-bengkulu-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/bank-kalsel.webp") ?>" alt="bank-kalsel-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/bank-ntb.webp") ?>" alt="bank-ntb-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/bank-ntt.webp") ?>" alt="bank-ntt-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/bank-maluku.webp") ?>" alt="bank-maluku-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/bank-lampung.webp") ?>" alt="bank-lampung-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/bank-jatim.webp") ?>" alt="bank-jatim-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/bank-aceh.webp") ?>" alt="bank-aceh-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/bca.webp") ?>" alt="bank-bca-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/ganesha.webp") ?>" alt="ganesha-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/icbc.webp") ?>" alt="icbc-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/maspion.webp") ?>" alt="bank-maspion-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/cimb-niaga.webp") ?>" alt="cimb-niaga-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/aladin.webp") ?>" alt="aladin-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/pospay.webp") ?>" alt="pospay-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/netzme.webp") ?>" alt="netzme-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/qren.webp") ?>" alt="qren-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/speedcash.webp") ?>" alt="speedcash-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/motionpay.webp") ?>" alt="motionpay-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/bayarind.webp") ?>" alt="bayarind-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/paydia.webp") ?>" alt="paydia-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/yukk.webp") ?>" alt="yukk-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/kaspro.webp") ?>" alt="kaspro-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
			<li class="w-full h-auto aspect-[2/1] flex justify-center">
				<img src="<?= base_url("assets/img/home/member/gpay.webp") ?>" alt="gpay-logo" width="200" height="50" class="w-3/4 h-auto object-contain">
			</li>
		</ul>
	</section>
</main>


<script src="<?= base_url("assets/splidejs/dist/js/splide.min.js") ?>"></script>
<script src="<?= base_url("assets/js/product-and-services/splide.js") ?>"></script>
