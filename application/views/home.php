<?php 
$lang = $this->session->userdata('lang'); 
$langDB = $this->session->userdata('langDatabase'); 
?>
<main id="main">

	<!-- ​‌‍‌⁡⁣⁣⁢‍𝗦𝘁𝗮𝗿𝘁 𝗛𝗲𝗮𝗱𝗲𝗿 𝗦𝗲𝗰𝘁𝗶𝗼𝗻​​⁡ -->

	<header id="header" class="w-full md:h-auto h-[46vh] md:aspect-video text-white relative">
		<section id="header-background" class="absolute top-0 left-0 w-full h-full -z-10">
			<!-- Hero With Video -->
			<video autoplay loop muted playsinline class="object-cover md:object-contain w-full md:h-auto h-[46vh] md:aspect-video" id="header-video">
				<source src="<?= BASEBACK . $bannerVid['file'] ?>" type="video/mp4" class="object-cover md:object-contain">
			</video>
			<section id="overlay" class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></section>
		</section>

		<section id="hero" class="flex flex-col justify-center w-full md:h-auto h-[46vh] md:aspect-video px-5 sm:px-10 md:px-14 lg:px-20 xl:px-28 wow fadeIn relative top-0">
			<h1 class="text-lg xs:text-3xl sm:text-4xl md:text-5xl lg:text-7xl 3xl:text-8xl font-bold sm:font-extrabold text-left lg:w-3/4 3xl:w-1/2">
				<span class="leading-tight sm:leading-tight">
					<?php echo $bannerVid['title'] ?>
				</span>
			</h1>
			<p class="text-sm xs:text-base sm:text-xl md:text-xl 3xl:text-2xl w-full pt-5 font-nunito lg:w-3/4 3xl:w-1/2 text-left">
				<span class="leading-relaxed sm:leading-relaxed">
					<?php echo $bannerVid['description'] ?>
				</span>
			</p>
		</section>
	</header>

	<!-- ⁡⁣⁣⁢​‌‍‌‍‍𝗘𝗻𝗱 𝗛𝗲𝗮𝗱𝗲𝗿 𝗦𝗲𝗰𝘁𝗶𝗼𝗻⁡​​​ -->


	<!-- ⁡⁣⁣⁢​‌‍‌𝗦𝘁𝗮𝗿𝘁 𝗔𝗯𝗼𝘂𝘁 𝗨𝘀 𝗦𝗲𝗰𝘁𝗶𝗼𝗻​⁡ -->

	<section id="about-us" class="w-full h-auto py-16 pl-3 pr-3 xs:pr-5 xs:pl-5 sm:pl-10 sm:pr-10 md:pl-16 md:pr-16 lg:pl-20 lg:pr-0 xl:pl-28 4xl:pl-32 4xl:pr-20 relative">
		<div class="grid w-full h-full grid-cols-2 gap-x-10">
			<div class="flex flex-col justify-center order-2 col-span-2 lg:col-span-1 lg:order-1 mt-14 sm:mt-14 lg:mt-0">
				<h2 class="text-xl font-bold text-left xs:text-2xl xl:text-3xl 3xl:text-[2.6rem] text-primary sm:text-left wow fadeInUp" data-wow-delay="0.5s">
					<span class="leading-normal">
						Menghubungkan Masyarakat dengan Ekosistem Finansial dan Non Finansial
					</span>
				</h2>
				<p class="mt-5 text-left lg:text-justify font-nunito 3xl:text-2xl wow fadeInUp" data-wow-delay="0.5s">
					<span class="leading-[1.8]">
						Sebagai perusahaan yang menyediakan layanan terintegrasi di bidang teknologi sistem pembayaran masa kini, Jalin telah berkolaborasi dengan lebih dari 35 member yang berasal dari industri perbankan maupun fintech di tanah air. Jalin merupakan perusahaan pengelola layanan jaringan switching LINK dan memiliki market share terbesar di kategori produk debit switching.
					</span>
				</p>
				<a href="<?= base_url('id-id/perusahaan/tentang-jalin') ?>" class="mx-auto mt-8 w-fit md:mx-0 wow fadeInUp" data-wow-delay="0.5s">
					<button class="btn-primary 3xl:text-lg">
						Selengkapnya
					</button>
				</a>
			</div>
			<div class="flex items-center justify-center order-1 col-span-2 lg:col-span-1 lg:order-2 wow fadeInUp" data-wow-delay="0.5s">
				<img src="<?= base_url("assets/img/home/about.webp") ?>" width="500px" height="500px" alt="About us image" class="w-3/4 h-auto sm:w-auto sm:h-[480px] md:h-[400px] lg:w-full lg:h-auto xl:w-auto xl:h-[480px] object-cover">
			</div>
		</div>
	</section>

	<!-- ​‌‍‌⁡⁣⁣⁢𝗘𝗻𝗱 𝗔𝗯𝗼𝘂𝘁 𝗨𝘀 𝗦𝗲𝗰𝘁𝗶𝗼𝗻⁡​ -->


	<!-- ​‌‍‌⁡⁣⁣⁢𝗦𝘁𝗮𝗿𝘁 𝗪𝗵𝘆 𝗨𝘀 𝗦𝗲𝗰𝘁𝗶𝗼𝗻⁡​ -->

	<section id="why-us" class="flex flex-col w-full h-auto px-5 pt-10 pb-10 md:px-16 xl:px-20 lg:pt-16 lg:pb-16 bg-zinc-50">
		<h2 class="w-full mx-auto text-xl font-bold text-center xs:text-2xl lg:text-2xl 3xl:text-3xl text-primary md:w-full lg:w-3/4 2xl:w-1/2 wow fadeInUp" data-wow-delay="0.5s">
			<span class="leading-normal">
				Beragam layanan sistem keuangan siap membantu anda mengembangkan bisnis
			</span>
		</h2>
		<a href="<?= base_url('id-id/produk-dan-layanan') ?>" class="mx-auto mt-8 w-fit wow fadeInUp" data-wow-delay="0.5s">
			<button class="btn-primary">
				Lihat Semua
			</button>
		</a>
		<section id="splide-why-us" class="w-full h-auto my-12 splide wow fadeInUp" data-wow-delay="0.5s" aria-labelledby="carousel-heading">
			<div class="splide__arrows">
				<button class="splide__arrow splide__arrow--prev">
					<i class="px-4 py-2 text-xs bg-white rounded-full fa-solid fa-chevron-right text-secondary"></i>
				</button>
				<button class="splide__arrow splide__arrow--next">
					<i class="px-4 py-2 text-xs bg-white rounded-full fa-solid fa-chevron-right text-secondary"></i>
				</button>
			</div>
			<div class="splide__track">
				<ul class="splide__list">
					<li class="flex items-center justify-center w-auto h-auto splide__slide">
						<div class="flip-card w-[270px] h-[270px] xs:w-[320px] xs:h-[320px] sm:w-[400px] sm:h-[400px] md:w-[200px] md:h-[200px] lg:w-[290px] lg:h-[290px] xl:w-[300px] xl:h-[300px] 2xl:w-[400px] 2xl:h-[400px] relative hover:rotate-y-180 duration-1000 group" style="transform-style: preserve-3d;">
							<div class="absolute top-0 left-0 w-full h-full overflow-hidden front-card rounded-xl" style="backface-visibility: hidden; -webkit-backface-visibility: hidden;">
								<div class="absolute z-0 w-full h-full delay-300 card-background group-hover:translate-x-full">
									<img src="<?= base_url("assets/img/home/Produk_Switching.webp") ?>" alt="card-1-img" width="500" height="500" class="absolute top-0 object-cover w-full h-full">
									<div class="absolute top-0 w-full h-full overlay bg-primary opacity-40"></div>
									<p class="absolute flex items-center justify-center w-full h-full text-lg font-bold text-center text-white md:text-base 2xl:text-2xl group-hover:hidden">
										Switching
									</p>
								</div>
							</div>
							<div class="absolute top-0 left-0 w-full h-full overflow-hidden back-card rounded-xl rotate-y-180" style="backface-visibility: hidden; -webkit-backface-visibility: hidden;">
								<div class="absolute z-0 w-full h-full card-background">
									<img src="<?= base_url("assets/img/home/Produk_Switching.webp") ?>" alt="card-1-img" width="500" height="500" class="absolute top-0 object-cover w-full h-full">
									<div class="absolute top-0 w-full h-full overlay bg-primary opacity-80"></div>
									<ul class="absolute flex flex-col items-center justify-center w-full h-full py-3 space-y-3 text-base font-bold text-center text-white md:text-xs lg:text-sm 2xl:text-xl">
										<li class="h-auto py-1 overflow-x-hidden">
											<a href="<?= base_url('id-id/produk-dan-layanan/switching/jaringan-atm-link') ?>" class="group py-1 relative after:content[''] after:w-full after:h-full after:border-b-2 after:border-white after:absolute after:top-0 after:left-0 after:-translate-x-full hover:after:-translate-x-0 after:duration-500 w-full">Jaringan ATM Link <i class="pl-2 duration-500 translate-x-full fa-solid fa-arrow-right group-hover:translate-x-0"></i></a>
										</li>
										<li class="h-auto py-1 overflow-x-hidden">
											<a href="<?= base_url('id-id/produk-dan-layanan/switching/debit-link') ?>" class="group py-1 relative after:content[''] after:w-full after:h-full after:border-b-2 after:border-white after:absolute after:top-0 after:left-0 after:-translate-x-full hover:after:-translate-x-0 after:duration-500 w-full">Debit Link <i class="pl-2 duration-500 translate-x-full fa-solid fa-arrow-right group-hover:translate-x-0"></i></a>
										</li>
										<li class="h-auto py-1 overflow-x-hidden">
											<a href="<?= base_url('id-id/produk-dan-layanan/switching/qris') ?>" class="group py-1 relative after:content[''] after:w-full after:h-full after:border-b-2 after:border-white after:absolute after:top-0 after:left-0 after:-translate-x-full hover:after:-translate-x-0 after:duration-500 w-full">QRIS <i class="pl-2 duration-500 translate-x-full fa-solid fa-arrow-right group-hover:translate-x-0"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</li>
					<li class="flex items-center justify-center w-auto h-auto splide__slide">
						<div class="flip-card w-[270px] h-[270px] xs:w-[320px] xs:h-[320px] sm:w-[400px] sm:h-[400px] md:w-[200px] md:h-[200px] lg:w-[290px] lg:h-[290px] xl:w-[300px] xl:h-[300px] 2xl:w-[400px] 2xl:h-[400px] relative hover:rotate-y-180 duration-1000 group" style="transform-style: preserve-3d;">
							<div class="absolute top-0 left-0 w-full h-full overflow-hidden front-card rounded-xl" style="backface-visibility: hidden; -webkit-backface-visibility: hidden;">
								<div class="absolute z-0 w-full h-full delay-300 card-background group-hover:translate-x-full">
									<img src="<?= base_url("assets/img/home/Produk_Digital.webp") ?>" alt="card-1-img" width="500" height="500" class="absolute top-0 object-cover w-full h-full">
									<div class="absolute top-0 w-full h-full overlay bg-secondary opacity-40"></div>
									<p class="absolute flex items-center justify-center w-full h-full text-lg font-bold text-center text-white md:text-base 2xl:text-2xl group-hover:hidden">
										Digital
									</p>
								</div>
							</div>
							<div class="absolute top-0 left-0 w-full h-full overflow-hidden back-card rounded-xl rotate-y-180" style="backface-visibility: hidden; -webkit-backface-visibility: hidden;">
								<div class="absolute z-0 w-full h-full card-background">
									<img src="<?= base_url("assets/img/home/Produk_Digital.webp") ?>" alt="card-1-img" width="500" height="500" class="absolute top-0 object-cover w-full h-full">
									<div class="absolute top-0 w-full h-full overlay bg-secondary opacity-80"></div>
									<ul class="absolute flex flex-col items-center justify-center w-full h-full py-3 space-y-3 text-base font-bold text-center text-white md:text-xs lg:text-sm 2xl:text-xl">
										<li class="h-auto py-1 overflow-x-hidden">
											<a href="<?= base_url('id-id/produk-dan-layanan/digital/jalin-verified') ?>" class="group py-1 relative after:content[''] after:w-full after:h-full after:border-b-2 after:border-white after:absolute after:top-0 after:left-0 after:-translate-x-full hover:after:-translate-x-0 after:duration-500 w-full">Jalin Verified <i class="pl-2 duration-500 translate-x-full fa-solid fa-arrow-right group-hover:translate-x-0"></i></a>
										</li>
										<li class="h-auto py-1 overflow-x-hidden">
											<a href="<?= base_url('id-id/produk-dan-layanan/digital/jalin-virtual-atm') ?>" class="group py-1 relative after:content[''] after:w-full after:h-full after:border-b-2 after:border-white after:absolute after:top-0 after:left-0 after:-translate-x-full hover:after:-translate-x-0 after:duration-500 w-full">Jalin Virtual ATM <i class="pl-2 duration-500 translate-x-full fa-solid fa-arrow-right group-hover:translate-x-0"></i></a>
										</li>
										<li class="h-auto py-1 overflow-x-hidden">
											<a href="<?= base_url('id-id/produk-dan-layanan/digital/jalin-cardless-withdrawal') ?>" class="group py-1 relative after:content[''] after:w-full after:h-full after:border-b-2 after:border-white after:absolute after:top-0 after:left-0 after:-translate-x-full hover:after:-translate-x-0 after:duration-500 w-full">Jalin Cardless Withdrawal <i class="pl-2 duration-500 translate-x-full fa-solid fa-arrow-right group-hover:translate-x-0"></i></a>
										</li>
										<li class="h-auto py-1 overflow-x-hidden">
											<a href="<?= base_url('id-id/produk-dan-layanan/digital/jalin-payment-integrator') ?>" class="group py-1 relative after:content[''] after:w-full after:h-full after:border-b-2 after:border-white after:absolute after:top-0 after:left-0 after:-translate-x-full hover:after:-translate-x-0 after:duration-500 w-full">Jalin Payment Integrator <i class="pl-2 duration-500 translate-x-full fa-solid fa-arrow-right group-hover:translate-x-0"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</li>
					<li class="flex items-center justify-center w-auto h-auto splide__slide">
						<div class="flip-card w-[270px] h-[270px] xs:w-[320px] xs:h-[320px] sm:w-[400px] sm:h-[400px] md:w-[200px] md:h-[200px] lg:w-[290px] lg:h-[290px] xl:w-[300px] xl:h-[300px] 2xl:w-[400px] 2xl:h-[400px] relative hover:rotate-y-180 duration-1000 group" style="transform-style: preserve-3d;">
							<div class="absolute top-0 left-0 w-full h-full overflow-hidden front-card rounded-xl" style="backface-visibility: hidden; -webkit-backface-visibility: hidden;">
								<div class="absolute z-0 w-full h-full delay-300 card-background group-hover:translate-x-full">
									<img src="<?= base_url("assets/img/home/Produk_ManagedService.webp") ?>" alt="card-1-img" width="500" height="500" class="absolute top-0 object-cover w-full h-full">
									<div class="absolute top-0 w-full h-full overlay bg-neutral-700 opacity-40"></div>
									<p class="absolute flex items-center justify-center w-full h-full text-lg font-bold text-center text-white md:text-base 2xl:text-2xl group-hover:hidden">
										Managed <br> Service
									</p>
								</div>
							</div>
							<div class="absolute top-0 left-0 w-full h-full overflow-hidden back-card rounded-xl rotate-y-180" style="backface-visibility: hidden; -webkit-backface-visibility: hidden;">
								<div class="absolute z-0 w-full h-full card-background">
									<img src="<?= base_url("assets/img/home/Produk_ManagedService.webp") ?>" alt="card-1-img" width="500" height="500" class="absolute top-0 object-cover w-full h-full">
									<div class="absolute top-0 w-full h-full overlay bg-neutral-700 opacity-80"></div>
									<ul class="absolute flex flex-col items-center justify-center w-full h-full py-3 space-y-3 text-base font-bold text-center text-white md:text-xs lg:text-sm 2xl:text-xl">
										<li class="h-auto py-1 overflow-x-hidden">
											<a href="<?= base_url('id-id/produk-dan-layanan/managed-service/second-level-maintenance') ?>" class="group py-1 relative after:content[''] after:w-full after:h-full after:border-b-2 after:border-white after:absolute after:top-0 after:left-0 after:-translate-x-full hover:after:-translate-x-0 after:duration-500 w-full">SLM <i class="pl-2 duration-500 translate-x-full fa-solid fa-arrow-right group-hover:translate-x-0"></i></a>
										</li>
										<li class="h-auto py-1 overflow-x-hidden">
											<a href="<?= base_url('id-id/produk-dan-layanan/managed-service/premises') ?>" class="group py-1 relative after:content[''] after:w-full after:h-full after:border-b-2 after:border-white after:absolute after:top-0 after:left-0 after:-translate-x-full hover:after:-translate-x-0 after:duration-500 w-full">Premises <i class="pl-2 duration-500 translate-x-full fa-solid fa-arrow-right group-hover:translate-x-0"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</section>
	</section>

	<!-- ​‌‍‌⁡⁣⁣⁢𝗘𝗻𝗱 𝗪𝗵𝘆 𝗨𝘀 𝗦𝗲𝗰𝘁𝗶𝗼𝗻⁡​ -->


	<!-- ​‌‍‌⁡⁣⁣⁢𝗦𝘁𝗮𝗿𝘁 𝗔𝗿𝘁𝗶𝗰𝗹𝗲 𝗦𝗲𝗰𝘁𝗶𝗼𝗻⁡​ -->

	<section id="article" class="w-full h-auto px-5 py-16 bg-white sm:px-10 md:px-5 2xl:px-20 4xl:px-32">
		<div class="text-center wow fadeInUp" data-wow-delay="0.5s">
			<h2 class="w-full mx-auto text-xl font-bold text-center xs:text-2xl lg:text-2xl xl:text-3xl 3xl:text-4xl text-primary md:w-full lg:w-3/4 2xl:w-1/2 wow fadeInUp" data-wow-delay="0.5s">
				<span class="leading-normal">
					Menjalin Momen Terbaik
				</span>
			</h2>
			<p class="font-nunito">
				Lihat aktivitas terbaru kami
			</p>
		</div>
		<section id="splide-momen" class="h-auto my-12 splide wow fadeInUp" data-wow-delay="0.5s" aria-labelledby="carousel-heading">
			<div class="splide__arrows">
				<button class="splide__arrow splide__arrow--prev">
					<i class="px-4 py-2 text-xs bg-white rounded-full fa-solid fa-chevron-right text-secondary"></i>
				</button>
				<button class="splide__arrow splide__arrow--next">
					<i class="px-4 py-2 text-xs bg-white rounded-full fa-solid fa-chevron-right text-secondary"></i>
				</button>
			</div>
			<div class="h-full splide__track">
				<ul class="h-full splide__list">
					<?php foreach ($post as $key => $p) : ?>
						<li class="flex items-center justify-center w-auto h-auto splide__slide">
							<div class="news-card h-[250px] w-[380px] sm:h-[270px] sm:w-[400px] md:h-[230px] md:w-[350px] lg:h-[215px] lg:w-[320px] xl:h-[300px] xl:w-full 4xl:h-[350px] rounded-2xl overflow-hidden relative">
								<div class="relative w-full h-full background-img">
									<img src="<?= BASEBACK.$p['post_image'] ?>" alt="Image article" class="absolute top-0 left-0 object-cover w-full h-full">
									<div class="absolute top-0 left-0 w-full h-full overlay bg-gradient-to-t from-black"></div>
								</div>
								<div class="content absolute w-full max-h-[50%] min-h-[30%] bottom-0 left-0 flex justify-between px-5 py-5 md:px-3 md:py-3 xl:px-5 xl:py-5 space-x-2 sm:space-x-4 md:space-x-2 xl:space-x-4">
									<div class="flex flex-col w-full text-xs text-white article text-nunito sm:text-sm md:text-xs xl:text-sm 4xl:text-base">
										<button class="px-2 py-1 mb-2 rounded-full category-article bg-blue-accent text-secondary w-fit">Press and Release</button>
										<a href="#" class="leading-relaxed article-title"><?php echo $p['post_title'] ?></a>
									</div>
									<a href="<?= BASEURL.$lang.'/berita/'.$p['url_post_kategori'].'/'.$p['post_name'] ?>" class="self-end hidden w-fit xs:block">
										<button class="text-xs text-white btn-primary bg-secondary sm:text-base md:text-xs xl:text-sm 2xl:text-base">
											Selengkapnya
										</button>
									</a>
								</div>
							</div>
						</li>
					<?php endforeach ?>
				</ul>
			</div>
		</section>
		<div class="flex justify-center w-full">
			<a href="#" class="mt-6 w-fit">
				<a href="<?= base_url('id-id/berita') ?>" class="btn-primary">
					Lihat Semua Berita
				</a>
			</a>
		</div>
	</section>

	<!-- ​‌‍‌⁡⁣⁣⁢𝗘𝗻𝗱 𝗔𝗿𝘁𝗶𝗰𝗹𝗲 𝗦𝗲𝗰𝘁𝗶𝗼𝗻⁡​ -->


	<!-- ​‌‍‌⁡⁣⁣⁢𝗦𝘁𝗮𝗿𝘁 𝗩𝗶𝗱𝗲𝗼𝘀 𝗦𝗲𝗰𝘁𝗶𝗼𝗻⁡​ -->

	<section id="videos" class="items-center w-full h-auto px-5 py-16 sm:px-10 md:px-5 2xl:px-20 4xl:px-32 bg-blue-accent rounded-t-8xl">
		<h2 class="w-full mx-auto text-xl font-bold text-center xs:text-2xl lg:text-2xl xl:text-3xl 3xl:text-4xl text-primary md:w-full lg:w-3/4 2xl:w-1/2 wow fadeInUp">
			<span class="leading-normal">
				Kenali Kami Lebih Jauh
			</span>
		</h2>
		<section id="splide-videos" class="h-auto my-12 splide wow fadeInUp" data-wow-delay="0.5s" aria-labelledby="carousel-heading">
			<div class="splide__arrows">
				<button class="splide__arrow splide__arrow--prev">
					<i class="px-4 py-2 text-xs bg-white rounded-full fa-solid fa-chevron-right text-secondary"></i>
				</button>
				<button class="splide__arrow splide__arrow--next">
					<i class="px-4 py-2 text-xs bg-white rounded-full fa-solid fa-chevron-right text-secondary"></i>
				</button>
			</div>
			<div class="h-full splide__track">
				<ul class="h-full splide__list">
					<?php foreach ($youtube as $key => $you) : ?>
						<li class="flex items-center justify-center w-auto h-auto splide__slide">
							<div class="news-card w-full h-auto aspect-video rounded-2xl overflow-hidden relative">
								<div data-videoid="<?php echo $you['url'] ?>" class="relative flex items-center justify-center w-full h-full overflow-hidden cursor-pointer card-videos card-item rounded-2xl">
									<!-- <iframe src="https://img.youtube.com/vi/8ngaID9wAXQ/mqdefault.jpg" title="YouTube video player" frameborder="0" allow="" allowfullscreen class="w-auto h-full"></iframe> -->
									<img src="https://img.youtube.com/vi_webp/<?php echo $you['url'] ?>/hqdefault.webp" alt="youtube-thumbnail" width="1280" height="1000" class="object-cover w-full h-full aspect-video">
									<div class="absolute w-full h-full bg-black overflow opacity-60"></div>
									<i class="absolute text-6xl bg-white rounded-full fa-solid fa-circle-play text-primary"></i>
								</div>
							</div>
						</li>
					<?php endforeach ?>
				</ul>
			</div>
		</section>

	</section>

	<!-- ​‌‍‌⁡⁣⁣⁢𝗘𝗻𝗱 𝗩𝗶𝗱𝗲𝗼𝘀 𝗦𝗲𝗰𝘁𝗶𝗼𝗻⁡​ -->


	<!-- ​‌‍‌⁡⁣⁣⁢𝗦𝘁𝗮𝗿𝘁 𝗠𝗲𝗺𝗯𝗲𝗿𝘀 𝗦𝗲𝗰𝘁𝗶𝗼𝗻⁡​ -->

	<section id="members" class="flex flex-col justify-around w-full h-auto px-8 py-20 bg-white sm:h-70vh md:px-14 lg:px-28">
		<h2 class="w-full mx-auto text-xl font-bold text-center xs:text-2xl lg:text-2xl xl:text-3xl 3xl:text-4xl text-primary md:w-full lg:w-3/4 2xl:w-1/2 wow fadeInUp">
			<span class="leading-normal">
				Member Layanan
			</span>
		</h2>

		<section id="splide-member" class="w-full h-40 my-5 sm:my-12 splide wow fadeInUp" data-wow-delay="0.5s" aria-labelledby="carousel-heading">
			<div class="h-full splide__track">
				<ul class="h-full splide__list">
					<li class="h-full splide__slide">
						<img src="<?= base_url("assets/img/home/member/mandiri.webp") ?>" alt="mandiri-logo" width="200" height="50" class="object-contain w-full h-full">
					</li>
					<li class="h-full splide__slide">
						<img src="<?= base_url("assets/img/home/member/bni.webp") ?>" alt="bni-logo" width="200" height="50" class="object-contain w-full h-full">
					</li>
					<li class="h-full splide__slide">
						<img src="<?= base_url("assets/img/home/member/bri.webp") ?>" alt="bri-logo" width="200" height="50" class="object-contain w-full h-full">
					</li>
					<li class="h-full splide__slide">
						<img src="<?= base_url("assets/img/home/member/btn.webp") ?>" alt="btn-logo" width="200" height="50" class="object-contain w-full h-full">
					</li>
					<li class="h-full splide__slide">
						<img src="<?= base_url("assets/img/home/member/bsi.webp") ?>" alt="bsi-logo" width="200" height="50" class="object-contain w-full h-full">
					</li>
				</ul>
			</div>
		</section>

		<a href="<?= base_url("id-id/produk-dan-layanan") ?>#membership" class="flex justify-center mt-0 wow fadeInUp" data-wow-delay="0.5s">
			<button class="btn-primary">
				Lihat Semua
			</button>
		</a>
	</section>

	<!-- ​‌‍‌⁡⁣⁣⁢𝗘𝗻𝗱 𝗠𝗲𝗺𝗯𝗲𝗿𝘀 𝗦𝗲𝗰𝘁𝗶𝗼𝗻⁡​ -->


	<!-- ​‌‍‌⁡⁣⁣⁢𝗦𝘁𝗮𝗿𝘁 𝗖𝗧𝗔 𝗦𝗲𝗰𝘁𝗶𝗼𝗻⁡​ -->

	<section id="call-to-action" class="relative w-full bg-white h-60vh">
		<div class="relative w-full h-full background-cover">
			<img src="<?= base_url("assets/img/home/section-7v3.webp") ?>" alt="background-cover" width="1280" height="720" class="absolute top-0 left-0 object-cover object-top w-full h-full">
			<div class="absolute top-0 left-0 w-full h-full overlay bg-secondary opacity-70"></div>
		</div>

		<div class="absolute top-0 left-0 flex flex-col items-center justify-center w-full h-full gap-10 px-5 section-7-content sm:px-10">
			<h2 class="w-full mx-auto text-xl font-bold text-center text-white xs:text-2xl lg:text-2xl xl:text-3xl 3xl:text-4xl md:w-full lg:w-3/4 2xl:w-1/2 wow fadeInUp">
				<span class="leading-normal">
					Mari Menjalin Kolaborasi
				</span>
			</h2>
			<p class="w-full text-xs text-center text-white xs:text-sm md:text-base lg:text-base 3xl:text-2xl font-nunito md:w-3/4 3xl:w-1/2 wow fadeInUp" data-wow-delay="0.5s">
				<span class="leading-[1.8]">
					Membawa spirit sinergi, Jalin siap mendukung pengembangan bisnis Anda demi memberikan layanan keuangan terbaik untuk masyarakat. Mulai langkah kolaborasi inovasi dari sekarang.
				</span>
			</p>
			<a href="javascript:;" onclick="showMenu(true)" class="px-4 py-2 text-base font-bold text-white duration-500 border border-white rounded-full font-nunito wow fadeInUp hover:bg-secondary hover:border-secondary" data-wow-delay="0.5s">
				Jalin Kerja Sama
			</a>
		</div>
	</section>

	<!-- ​‌‍‌⁡⁣⁣⁢𝗘𝗻𝗱 𝗖𝗧𝗔 𝗦𝗲𝗰𝘁𝗶𝗼𝗻⁡​ -->



</main>

<section id="overlay-modal" class="fixed top-0 left-0 z-40 w-full h-screen bg-black overlay opacity-60"></section>

<section id="overlay-modal-video" class="fixed top-0 left-0 z-40 w-full h-screen bg-black overlay opacity-0 hidden"></section>

<aside id="youtube-video" class="fixed top-0 left-0 z-40 items-center justify-center hidden w-full h-screen">
	<button id="close-button-youtube" class="absolute z-40 cursor-pointer close-button right-5 top-5"><i class="text-3xl text-white fa-solid fa-xmark"></i></button>
	<div id="video" class="flex items-center justify-center w-full h-full">

	</div>

</aside>

<aside id="modal" class="fixed top-0 left-0 z-40 items-center justify-center hidden w-full h-screen modal md:flex">
	<div class="relative w-9/12 overflow-hidden bg-white modal-box h-LGModal md:h-auto lg:h-lgModal rounded-3xl">
		<button id="close-button-modal" type="button" class="absolute z-50 w-auto h-auto cursor-pointer close-button right-5 top-5"><i class="text-3xl fa-solid fa-xmark text-neutral-700"></i></button>
		<section id="splide-modal" class="w-full h-full splide" aria-labelledby="carousel-heading">
			<div class="h-full splide__track">
				<ul class="h-full splide__list">
					<?php foreach ($modal as $key => $fil) : ?>
						<li class="w-full h-full splide__slide">
							<img src="<?= BASEBACK . $fil['file'] ?>" alt="modal2" width="1280" height="720" class="object-cover w-full h-full md:object-contain">
						</li>
					<?php endforeach ?>
				</ul>
			</div>
		</section>
	</div>
</aside>

<aside id="modal-mobile" class="fixed top-0 left-0 z-40 flex items-center justify-center w-full h-screen modal md:hidden">
	<div class="relative w-10/12 overflow-hidden bg-white modal-box h-LGModal rounded-3xl">
		<button id="close-button-modal-mobile" type="button" class="absolute z-50 w-auto h-auto cursor-pointer close-button right-5 top-5"><i class="text-3xl fa-solid fa-xmark text-neutral-700"></i></button>
		<section id="splide-modal-mobile" class="w-full h-full splide" aria-labelledby="carousel-heading">
			<div class="h-full splide__track">
				<ul class="h-full splide__list">
					<?php foreach ($modal as $key => $fil) : ?>
						<li class="w-full h-full splide__slide">
							<img src="<?= BASEBACK . $fil['file_mobile'] ?>" alt="modal2" width="1280" height="720" class="object-cover w-full h-full md:object-contain">
						</li>
					<?php endforeach ?>
				</ul>
			</div>
		</section>
	</div>
</aside>

<section id="overlay-modal-menu" class="fixed top-0 left-0 z-40 hidden w-full h-screen bg-black overlay opacity-60"></section>

<!-- Modal kerja sama -->
<div id="menu" class="hidden">
	<div class="fixed top-0 z-40 flex justify-center w-full h-full bg-opacity-80 sticky-0">
		<div class="flex items-center justify-center px-4 py-48 2xl:container 2xl:mx-auto md:px-28">
			<div class="w-96 md:w-auto relative flex flex-col justify-center items-center bg-[#f1f1f1] py-16 px-4 md:px-24 xl:py-24 xl:px-16 rounded-xl">
				<h1 class="mb-8 text-4xl font-bold text-red-600">Jalin Kerja Sama</h1>
				<form action="">
					<input type="text" name="" id="" placeholder="Nama *" class="w-full mb-4 border-b border-b-[#e0e0e0] py-3 px-6 text-base font-medium placeholder:text-slate-400 outline-none focus:border-secondary focus:shadow-xl text-black" />
					<input type="Email" name="" id="" placeholder="Email *" class="w-full border-b border-b-[#e0e0e0] py-3 px-6 text-base font-medium placeholder:text-slate-400 outline-none focus:border-secondary focus:shadow-xl text-black" />
					<textarea name="" id="" placeholder="Pesan" rows="5" class="w-full px-6 py-3 mt-5 text-base font-medium border-b outline-none border-b-slate-400 placeholder:text-slate-400 focus:border-secondary focus:shadow-xl text-black"></textarea>
					<div class="flex justify-end">
						<button href="#" class="px-4 py-2 text-base font-bold text-white duration-500 border border-white rounded-xl font-nunito bg-secondary">Kirim</Button>
					</div>
				</form>
				<button onclick="showMenu(true)" class="absolute text-gray-800 dark:text-gray-400 top-8 right-8 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" aria-label="close">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M18 6L6 18" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M6 6L18 18" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</button>
			</div>
		</div>
	</div>
</div>


<script src="<?= base_url("assets/splidejs/dist/js/splide.min.js") ?>"></script>
<script src="<?= base_url("assets/js/home/splide.js") ?>"></script>
<script src="<?= base_url("assets/js/home/videos.js") ?>"></script>
<script src="<?= base_url("assets/js/home/modal.js") ?>"></script>

<script>
	let menu = document.getElementById("menu");
	let overlayMenu = document.getElementById("overlay-modal-menu");

	const showMenu = (flag) => {
		menu.classList.toggle("hidden");
		overlayMenu.classList.toggle("hidden");
	};
</script>
