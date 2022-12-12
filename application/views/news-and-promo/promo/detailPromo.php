<?php 
$lang = $this->session->userdata('lang'); 
$langDB = $this->session->userdata('langDatabase'); 
?>
<main class="py-24 md:py-0 lg:py-28 2xl:py-32 3xl:py-36 4xl:py-44 container">
	<section class="grid grid-cols-12 px-3 xs:px-6 sm:px-10 pt-8 lg:pt-14 w-full justify-center">
		<div class="col-span-12 order-2 md:col-span-2 md:order-1 justify-center md:justify-center flex pt-5 sm:pt-0">
			<div class="text-black font-bold text-center md:text-center">
				<p class="text-base md:text-sm 2xl:text-base">
					Bagikan
				</p>
				<div class="justify-start md:justify-center flex mt-7 w-full">
					<div class="flex md:block">
						<div class="icon">
							<a href="whatsapp://send?text=<?php echo BASEURL.$lang.'/promo/'.$post['post_name'] ?>" target="_blank"><i class="fa-brands fa-whatsapp text-3xl cursor-pointer p-6 text-neutral-500"></i></a>
						</div>
						<div class="icon">
							<a href="https://twitter.com/intent/tweet?text=<?php echo BASEURL.$lang.'/promo/'.$post['post_name'] ?>" target="_blank"><i class="fa-brands fa-twitter text-3xl cursor-pointer p-6 text-neutral-500"></i></a>
						</div>
						<div class="icon">
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo BASEURL.$lang.'/promo/'.$post['post_name'] ?>" target="_blank"><i class="fa-brands fa-facebook-f text-3xl cursor-pointer p-6 text-neutral-500"></i></a>
						</div>
						<div class="icon">
							<a href="javascript:;" onclick="copyToClipboard(window.location.href); return false;" target="_blank"><i class="fa-solid fa-share-nodes text-3xl cursor-pointer p-6 text-neutral-500"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-span-12 order-1 md:col-span-9 md:order-2">
			<div class="text-left">
				<ul class="text-neutral-500 font-normal flex flex-wrap gap-3 text-xs sm:text-sm md:text-xs 2xl:text-sm">
					<li>
						<a href="<?php echo BASEURL ?>" class="whitespace-nowrap leading-loose">Beranda</a>
					</li>
					<li>
						<a href="<?php echo BASEURL.$lang.'/promo' ?>" class="whitespace-nowrap leading-loose">/ Promo</a>
					</li>
					<li>
						<a href="" class="whitespace-nowrap leading-loose">/ <?php echo $post['title'] ?></a>
					</li>
					<li>
						<a href="" class="flex leading-loose">
							/ <?php echo $post['post_title'] ?>
						</a>
					</li>
				</ul>
				<div class="flex py-4">
					<button href="#" class="rounded-full flex justify-start px-1 text-secondary w-max text-xs 2xl:text-sm z-10 bg-blue-accent"><?php echo $post['title'] ?></button>
				</div>
				<div class="text-secondary">
					<h1 class="font-bold text-lg sm:text-3xl md:text-2xl lg:text-3xl">
						<?php echo $post['post_title'] ?>
					</h1>
				</div>
				<div class="text-neutral-500 mt-3 font-medium">
					<p class="text-xs sm:text-sm lg:text-base"><?php echo date('M d, Y') ?></p>
				</div>
				<div class="w-full mt-7">
					<img src="<?= BASEBACK.$post['post_image'] ?>" alt="article" width="1280" height="720" class="w-full h-auto sm:h-auto md:h-[303px] lg:w-3/4 lg:h-[312px] xl:h-[400px] 2xl:h-[481px] 3xl:h-[535px] 4xl:h-[608px] object-cover">
				</div>
				<div class="text-neutral-800 mt-16 text-left lg:text-justify text-sm 2xl:text-base">
					<div class="font-nunito leading-loose">
						<?php echo $post['post_content'] ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="section-4" class="w-full h-auto px-2 pt-16 bg-white">
		<div class="text-center md:text-left">
			<h2 class="text-xl md:text-2xl lg:text-3xl text-primary font-bold">
				Artikel Terbaru Kami
			</h2>
		</div>
		<section id="splide-other" class="splide w-full h-full my-12" aria-labelledby="carousel-heading">
			<div class="splide__track h-full">
				<ul class="splide__list h-full">
					<?php foreach ($postRelated as $key => $value): ?>
					<li class="splide__slide h-full w-full flex justify-center">
						<div class="news-card h-[190px] w-[280px] xs:h-[256px] xs:w-[385px] sm:h-[270px] sm:w-[400px] md:h-[230px] md:w-[350px] lg:h-[192px] lg:w-[285px] xl:h-[260px] xl:w-full 2xl:h-[270px] 3xl:h-[300px] 4xl:h-[340px] rounded-2xl overflow-hidden relative">
							<div class="background-img w-full h-full relative">
								<img src="<?= $value['post_image'] ?>" alt="Image article" class="w-full h-full object-cover absolute top-0 left-0">
								<div class="overlay absolute w-full h-full bg-gradient-to-t from-black top-0 left-0"></div>
							</div>
							<div class="content absolute w-full max-h-[65%] xs:max-h-[55%] lg:max-h-[70%] xl:max-h-[65%] 2xl:max-h-[60%] min-h-[30%] bottom-0 left-0 flex justify-between px-5 py-5 md:px-3 md:py-3 xl:px-5 xl:py-5 space-x-2 sm:space-x-4 md:space-x-2 xl:space-x-4">
								<div class="article w-full text-white text-nunito text-xs sm:text-sm md:text-xs xl:text-sm flex flex-col">
									<button class="category-article bg-blue-accent text-secondary px-2 py-1 rounded-full mb-2 w-fit">Press and Release</button>
									<a href="<?php echo BASEURL.$lang.'/berita/'.$value['post_name'] ?>" class="article-title leading-relaxed"><?php echo $value['post_title'] ?></a>
								</div>
								<a href="<?php echo BASEURL.$lang.'/berita/'.$value['post_name'] ?>" class="w-fit self-end hidden xs:block">
									<button class="btn-primary bg-secondary text-white text-xs sm:text-base md:text-xs xl:text-sm 2xl:text-base">
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
	</section>
</main>

<script src="<?= base_url("assets/js/copytoclipboard.js") ?>"></script>
<script src="<?= base_url("assets/splidejs/dist/js/splide.min.js") ?>"></script>
<script src="<?= base_url("assets/js/news-and-promo/splide.js") ?>"></script>

