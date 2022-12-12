<?php 

	$lang = $this->session->userdata("lang");

 ?>

<main>
	<header id="header" class="w-full h-[46vh] md:h-auto md:aspect-[5/2] text-white py-5 relative">
		<section id="header-background" class="w-full h-[46vh] md:h-full md:aspect-[5/2] absolute top-0 left-0 -z-10">
			<img src="<?= base_url("assets/img/company/cover-about-1.webp") ?>" alt="Header image" class="w-full h-[46vh] md:h-auto md:aspect-[5/2] object-cover">
			<section id="overlay" class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-secondary opacity-100"></section>
		</section>

		<section id="hero" class="px-5 xs:px-8 sm:px-12 md:px-16 lg:px-20 w-full 4xl:w-full h-[46vh] md:h-auto md:aspect-[5/2] flex flex-col justify-center wow fadeIn container" style="margin-bottom:-41px;">
			<h1 class="text-lg xs:text-3xl sm:text-4xl md:text-5xl lg:text-7xl 3xl:text-8xl font-bold sm:font-extrabold text-center lg:text-left w-full lg:w-3/4 2xl:w-1/2">
				<span class="leading-normal sm:leading-tight">
					Langkah Inovasi Tiada Henti
				</span>
			</h1>
			<p class="text-sm xs:text-base sm:text-xl md:text-xl 3xl:text-2xl pt-5 font-nunito w-full lg:w-3/4 text-center lg:text-left xl:w-3/5 4xl:w-1/2">
				<span class="leading-relaxed sm:leading-relaxed">
					Ikuti jejak langkah Jalin dan temui para talenta dibaliknya
				</span>
			</p>
		</section>
	</header>
	<!-- <section class="w-full -z-10">
		<div class="items-center flex absolute w-full h-[600px]">
			<div class="block z-10 lg:mx-18 mx-10">
				<h1 class="font-extrabold text-[40px] text-white sm:text-[70px] text-center lg:text-left">
					Langkah Inovasi Tiada Henti
				</h1>
				<p class="text-white w-full lg:w-3/4 text-center lg:text-left pt-10 lg:pt-0">
					Ikuti jejak langkah Jalin dan temui para talenta dibaliknya
				</p>
			</div>
		</div>
		<div class="ml-0">
			<div class="overlay absolute w-full h-[600px] bg-gradient-to-t from-secondary left-0 "></div>
			<img src="<?= base_url("assets/img/company/cover-about.webp") ?>" alt="Cover Investor" class="w-full object-cover h-[600px] ">
		</div>
	</section> -->

	<section class="justify-center flex w-full h-auto px-8 sm:px-12 lg:px-20 2xl:px-28 pb-10 pt-10 3xl:py-32 bg-white">
		<section class="grid-cols-1 lg:grid-cols-5 grid w-full justify-center items-center h-full gap-x-10">
			<div class="w-full h-full pt-10 lg:col-span-3 order-last lg:order-none">
				<h3 class="text-primary text-2xl font-bold xl:text-3xl 2xl:text-4xl">
					<?php echo $tentang['title'] ?>
				</h3>
				<div class="text-justify mt-4 text-base 2xl:text-xl 3xl:text-2xl font-nunito">
					<div class="leading-[1.8] sm:leading-loose text-left lg:text-justify font-nunito">
						<?php echo $tentang['description'] ?>
					</div>
				</div>
			</div>
			<div class="w-full h-full 2xl:h-[80vh] 4xl:h-[75vh] flex justify-center items-center lg:col-span-2 order-first lg:order-none">
				<img src="<?= base_url("assets/img/company/about-jalin.png") ?>" alt="Image About Jalin" class="w-3/4 h-auto md:w-1/2 md:h-auto lg:w-auto lg:h-full 3xl:w-full 3xl:h-auto object-contain">
			</div>
		</section>
	</section>

	<section class="w-full h-auto px-8 sm:px-12 lg:px-20 xl:px-24 2xl:px-28 py-14 bg-blue-accent">
		<div class="w-full text-center justify-center mx-auto">
			<h3 class="text-primary text-2xl font-bold xl:text-3xl 2xl:text-4xl">
				Milestone
			</h3>
			<p class="text-left lg:text-justify text-base w-full pt-8 2xl:text-xl 3xl:text-2xl font-nunito">
				<span class="leading-[1.8] sm:leading-loose">
					Berawal dari brand Link yang dicetuskan oleh salah satu bisnis Telkom Group yang menyediakan layanan Switching ATM, Jalin mulai mengelola Link pada tanggal 31 Maret 2017 demi efisiensi Himbara dan terus mengembangkannya hingga saat ini.
				</span>
			</p>
		</div>
		<section id="milestoneCard" class="flex flex-col h-screen justify-center items-center pt-20">
			<div class="w-full h-[75%] relative overflow-hidden duration-1000">
				<div id="milestoneOverlay" class="overlay w-full h-full bg-gradient-to-t from-blue-accent absolute top-0 left-0 z-10"></div>
				<ul class="relative top-0 z-0">
					<?php foreach ($milestone as $key => $m): ?>
						<?php if (($key % 2) == 0){ ?>
							
					<li class="relative flex items-start gap-6 pb-16 md:pb-8 h-full">
						<div class="h-full flex items-center mt-20 w-7">
							<p class="text-sm text-gray-600 font-bold"><?php echo $m['tahun'] ?></p>
						</div>
						<div class="before:absolute  before:h-full before:w-[2px] before:bg-gray-400">
							<div class="before:absolute mt-16 -ml-[1px] before:h-1/4 before:w-[4px] before:bg-[#204F9D] justify-center"></div>
						</div>
						<div class="gap-6 items-center block sm:block lg:flex xl:flex sm:mb-5">
							<img src="<?= BASEBACK.$m['image'] ?>" alt="Image Milestone" class="img-full" style="width: 321px;">
							<p class="mt-2 text-gray-600 text-base 2xl:text-lg 3xl:text-xl text-left lg:text-justify">
								<span class="leading-[1.8] sm:leading-loose">
									<?php echo $m['description'] ?>
								</span>
							</p>
						</div>
					</li>
						<?php }else { ?>
					<li class="relative flex items-start gap-6 pb-16 md:pb-8 h-full">
						<div class="h-full flex items-center mt-20 w-7">
							<p class="text-sm text-gray-600 font-bold">2017</p>
						</div>
						<div class="before:absolute  before:h-full before:w-[2px] before:bg-gray-400">
							<div class="before:absolute mt-16 -ml-[1px] before:h-1/4 before:w-[4px] before:bg-[#DB4231] justify-center"></div>
						</div>
						<div class="gap-6 items-center block sm:block lg:flex xl:flex sm:mb-5">
							<img src="<?= base_url("assets/img/company/Milestone2017.webp") ?>" alt="Image Milestone" class="img-full" style="width: 321px;">
							<p class="mt-2 text-gray-600 text-base 2xl:text-lg 3xl:text-xl text-left lg:text-justify">
								<span class="leading-[1.8] sm:leading-loose">
									Didapatkannya izin sebagai Prinsipal Switching ATM dan lisensi Prinsipal Switching Debit, Penyelenggara Switching, dan Penyelenggara Kliring Kartu Debit. Jalin juga bergabung dengan Asosiasi Sistem Pembayaran Indonesia (ASPI), ditetapkan sebagai Lembaga Switching GPN, serta menjadi salah satu perusahaan konsorsium yang membentuk PT PTEN di mana Jalin memiliki saham sebesar 7,5%.
								</span>
							</p>
						</div>
					</li>
						<?php } ?>
					<?php endforeach ?>
				</ul>
			</div>
			<div class="btn-trigger pt-10">
				<button id="buttonExpandMilestone" class="btn-primary">
					Lihat Semua Milestone
				</button>
			</div>
		</section>
	</section>

	<section id="splide-visi" class="splide w-full h-auto">
		<ul class="splide__pagination h-[40%]"></ul>
		<div class="splide__track h-auto w-full">
			<ul class="splide__list w-full h-auto">
				<?php foreach ($visimisi as $key => $v): ?>
				<li class="splide__slide w-full min-h-[40rem]">
					<div class="w-full h-full justify-center flex -z-10 -mt-20">
						<section class="m-0 relative w-full h-full">
							<div class="items-center flex absolute md:absolute top-0 py-32 w-full h-full justify-center px-8 sm:px-12">
								<div class="z-10 px-0 md:px-10 2xl:px-20 w-full h-full flex flex-col justify-center">
									<h1 class="font-extrabold text-2xl lg:text-3xl 2xl:text-5xl text-white pb-5 2xl:pb-10 text-left">
										<?php echo $v['title'] ?>
									</h1>
									<p class="text-white text-base 2xl:text-2xl text-left lg:text-justify w-full xl:w-3/4 font-nunito">
										<span class="leading-[1.8] sm:leading-loose">
											<?php echo $v['description'] ?>
										</span>
									</p>
								</div>
							</div>
							<div class="overlay absolute top-0 w-full h-[660px] <?php echo $v['background_color'] ?> bg-opacity-90"></div>
							<img src="<?= BASEBACK.$v['image'] ?>" alt="Cover Investor" class="w-full h-[660px] object-cover sticky -z-10">
						</section>
					</div>
				</li>
				<?php endforeach ?>
			</ul>
		</div>
	</section>

	<section class="w-full z-10 relative">
		<div class="justify-center flex rounded-t-8xl bg-blue-accent -mt-20 z-40 py-10 px-8 lg:px-20">
			<div class="grid-rows-12 w-full block container justify-center items-center sm:block lg:flex lg:gap-x-20">
				<div class="cols-span-5 w-full lg:w-full container flex justify-center pb-10 lg:pb-0">
					<img src="<?= base_url("assets/img/company/cta.webp") ?>" alt="Image CTA" class="w-1/2 md:w-1/2 lg:w-full h-auto 2xl:w-3/4">
				</div>
				<div class="cols-span-7 w-full text-center lg:text-left">
					<h3 class="font-bold w-full text-xl xl:text-2xl 2xl:text-4xl text-secondary container text-center lg:text-left pb-10">
						<span class="leading-[1.8] sm:leading-loose">
							Tertarik untuk menjadi bagian dari keluarga besar Jalin? Gabung sekarang juga.
						</span>
					</h3>
					<a href="<?= base_url("id-id/karir") ?>" class="text-[#7995C4] xl:text-lg 2xl:text-xl group">Kerja di Jalin <i class="group-hover:pl-3 duration-200 fa fa-arrow-right" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</section>
	<div class="w-full relative justify-center items-center h-full">
		<div id="video" data-videoid="<?php echo $video['url'] ?>" class="card-videos card-item w-full h-full cursor-pointer flex justify-center overflow-hidden relative items-center">
			<!-- <iframe src="https://img.youtube.com/vi/8ngaID9wAXQ/mqdefault.jpg" title="YouTube video player" frameborder="0" allow="" allowfullscreen class="w-auto h-full"></iframe> -->
			<img src="https://img.youtube.com/vi_webp/<?php echo $video['url'] ?>/maxresdefault.webp" alt="youtube-thumbnail" width="1280" height="1000" class="w-full h-auto aspect-video object-cover">
			<div class="overflow w-full h-full absolute"></div>
			<i class="fa-solid fa-circle-play absolute text-6xl text-primary bg-white rounded-full"></i>
		</div>
	</div>
</main>

<!-- <section id="overlay-modal" class="fixed top-0 left-0 z-40 w-full h-screen bg-black overlay opacity-60 hidden"></section>

<aside id="youtube-video" class="fixed top-0 left-0 z-40 items-center justify-center hidden w-full h-screen">
	<button id="close-button-youtube" class="absolute z-40 cursor-pointer close-button right-5 top-5"><i class="text-3xl text-white fa-solid fa-xmark"></i></button>
	<div id="video" class="flex items-center justify-center w-full h-full">

	</div>

</aside> -->

<script src="<?= base_url("assets/splidejs/dist/js/splide.min.js") ?>"></script>
<script src="<?= base_url("assets/js/company/about-jalin/splide.js") ?>"></script>
<script src="<?= base_url("assets/js/company/about-jalin/milestone.js") ?>"></script>
<script src="<?= base_url("assets/js/company/about-jalin/videos.js") ?>"></script>
