<?php 
$lang = $this->session->userdata('lang'); 
$langDB = $this->session->userdata('langDatabase'); 
?>
<?php foreach ($post as $key => $value): ?>
	<div class="card-items w-full flex justify-center">
		<div class="news-card h-[190px] w-[280px] xs:h-[256px] xs:w-[385px] sm:h-[270px] sm:w-[400px] md:h-[230px] md:w-[350px] lg:h-[192px] lg:w-[285px] xl:h-[260px] xl:w-full 2xl:h-[270px] 3xl:h-[300px] 4xl:h-[340px] rounded-2xl overflow-hidden relative">
			<div class="background-img w-full h-full relative">
				<img src="<?php echo $value['post_image'] ?>" alt="Image article" class="w-full h-full object-cover absolute top-0 left-0">
				<div class="overlay absolute w-full h-full bg-gradient-to-t from-black top-0 left-0"></div>
			</div>
			<div class="content absolute w-full max-h-[65%] xs:max-h-[55%] lg:max-h-[70%] xl:max-h-[65%] 2xl:max-h-[60%] min-h-[30%] bottom-0 left-0 flex justify-between px-5 py-5 md:px-3 md:py-3 xl:px-5 xl:py-5 space-x-2 sm:space-x-4 md:space-x-2 xl:space-x-4">
				<div class="article w-full text-white text-nunito text-xs sm:text-sm md:text-xs xl:text-sm flex flex-col">
					<button class="category-article bg-blue-accent text-secondary px-2 py-1 rounded-full mb-2 w-fit"><?php echo $value['title'] ?></button>
					<a href="#" class="article-title leading-relaxed"><?php echo $value['post_title'] ?></a>
				</div>
				<a href="<?php echo BASEURL.$lang.'/berita/'.$value['url_post_kategori'].'/'.$value['post_name'] ?>" class="w-fit self-end hidden xs:block">
					<button class="btn-primary bg-secondary text-white text-xs sm:text-base md:text-xs xl:text-sm 2xl:text-base" >
						Selengkapnya
					</button>
				</a>
			</div>
		</div>
	</div>
<?php endforeach ?>