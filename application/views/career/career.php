<?php
$lang = $this->session->userdata('lang');
$langDB = $this->session->userdata('langDatabase');
?>
<main>
	<header id="header" class="w-full h-[46vh] md:h-auto md:aspect-[5/2] text-white py-5 relative">
		<section id="header-background" class="w-full h-[46vh] md:h-full md:aspect-[5/2] absolute top-0 left-0 -z-10">
			<img src="<?= BASEBACK . $banner['file'] ?>" alt="Header image" class="w-full h-[46vh] md:h-auto md:aspect-[5/2] object-cover">
			<section id="overlay" class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-secondary opacity-100"></section>
		</section>

		<section id="hero" class="px-5 xs:px-8 sm:px-12 md:px-16 lg:px-20 w-full 4xl:w-full h-[46vh] md:h-auto md:aspect-[5/2] flex flex-col justify-center wow fadeIn container" style="margin-bottom:-41px;">
			<h1 class="text-lg xs:text-3xl sm:text-4xl md:text-5xl lg:text-7xl 3xl:text-8xl font-bold sm:font-extrabold text-center lg:text-left w-full">
				<span class="leading-normal sm:leading-tight">
					<?php echo $banner['title'] ?>
				</span>
			</h1>
			<p class="text-sm xs:text-base sm:text-xl md:text-xl 3xl:text-2xl pt-5 font-nunito w-full text-center lg:text-left">
				<span class="leading-relaxed sm:leading-relaxed">
					<?php echo $banner['description'] ?>
				</span>
			</p>
		</section>
	</header>


	<!-- <header id="header" class="w-full h-full aspect-[5/2] text-white py-5 relative">
		<section id="header-background" class="absolute top-0 left-0 w-full h-full aspect-[5/2] -z-10">
			<img src="<?= base_url("assets/img/karir/herov2.webp") ?>" alt="Header image" class="object-cover w-full h-full">
			<section id="overlay" class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-secondary opacity-90"></section>
		</section>

		<section id="hero" class="px-8 sm:px-12 md:px-16 lg:px-20 xl:px-28 w-full 4xl:w-full h-auto aspect-[5/2] flex flex-col justify-center wow fadeIn container">
			<h1 class="text-base xs:text-xl sm:text-4xl md:text-5xl font-bold text-left lg:text-7xl 3xl:text-8xl sm:font-extrabold sm:text-left">
				<span class="leading-normal sm:leading-tight">
					Join Our Team
				</span>
			</h1>
			<p class="text-sm xs:text-base sm:text-xl md:text-xl w-full text-left pt-2 xs:pt-3 sm:pt-5 3xl:text-2xl font-nunito lg:w-3/4 sm:text-left xl:w-3/5 4xl:w-1/2">
				<span class="leading-loose sm:leading-relaxed">
					Menyediakan teknologi layanan keuangan yang aman, berinterkoneksi, terintegrasi, dan efisien #JadiTerhubung
				</span>
			</p>
		</section>
	</header> -->

	<section id="searchCareer" class="container w-full h-auto">
		<div class="grid w-full h-full grid-cols-4">
			<div class="w-full h-full col-span-4 py-10 lg:col-span-1 bg-blue-accent-2">
				<div class="flex flex-col justify-center h-full md:flex-row lg:flex-col gap-y-16 md:justify-between md:items-center lg:justify-center lg:items-start md:pr-14 lg:pr-0">
					<img src="<?= base_url("assets/img/karir/search-career-icon.png") ?>" alt="search career icon" class="w-1/2 h-auto md:w-1/4 lg:w-3/4" style="transform: rotateY(180deg);">
					<div class="flex flex-col px-5 search gap-y-5">
						<h3 class="text-xl font-bold text-center lg:text-2xl text-secondary">Search for your next role</h3>
						<form action="">
							<input type="text" placeholder="Keyword Search" id="search-career" class="w-full py-2 text-sm bg-transparent border-b outline-none border-secondary placeholder:text-neutral-700 lg:text-base">
						</form>
					</div>
				</div>
			</div>
			<div class="w-full h-full col-span-4 px-5 lg:col-span-3 bg-blue-accent md:px-14 lg:px-16 xl:px-20 py-14">
				<div class="flex items-center justify-center hidden w-full h-full card-group empty-state">
					<img src="<?= base_url("assets/img/karir/empty-state.png") ?>" alt="empty-state" class="object-contain w-2/3 h-2/3">
				</div>
				<div class="flex flex-col card-group" id="show-karir">

					<?php foreach ($karir as $key => $kar) : ?>
						<div class="h-full border-b cursor-pointer card-item border-secondary group hover:bg-blue-accent-3 hover:rounded-xl">
							<a href="<?= base_url($lang . "/karir/" . $kar['url_karir']) ?>" class="pl-5">
								<div class="flex justify-between w-full h-auto gap-x-0 xs:gap-x-2">
									<div class="flex flex-col pb-10 card-title gap-y-4">
										<h3 class="text-base font-bold lg:text-xl text-secondary group-hover:text-white">
											<?php echo $kar['nama_job'] ?>
										</h3>
										<div class="w-full">
											<ul class="flex flex-wrap w-full gap-x-3 gap-y-2 lg:gap-y-0">
												<li class="flex items-center px-2 text-sm bg-white rounded-md text-secondary"><i class="mr-2 text-xs fa-solid fa-paper-plane"></i> <?php echo $kar['lokasi'] ?></li>
												<li class="flex items-center px-2 text-sm bg-white rounded-md <?php if (date('Y-m-d') > $kar['expired_date']) {
																													echo "text-primary";
																												} else {
																													echo "text-secondary";
																												} ?>"><i class="mr-2 text-xs fa-solid fa-calendar-days"></i>
													<?php if (date('Y-m-d') > $kar['expired_date']) {
														echo "Expired";
													} else {
														$dateCreated = date_create($kar['expired_date']);
														echo date_format($dateCreated, 'd F Y');
													} ?>
												</li>
											</ul>
										</div>
									</div>
									<div class="flex items-center w-auto h-auto card-button">
										<a href="<?= base_url($lang . "/karir/" . $kar['url_karir']) ?>" class="w-max">
											<button class="h-auto px-0 lg:px-10">
												<i class="text-3xl fa-solid fa-angle-right"></i>
											</button>
										</a>
									</div>
								</div>
							</a>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</section>

	<section id="jalinCulture" class="w-full h-auto py-20 px-5 lg:px-28 container">
		<div class="title w-full text-center pb-10">
			<h3 class="text-2xl md:text-4xl xl:text-3xl 2xl:text-4xl text-primary font-bold">Nilai utama untuk kita berkarya</h3>
		</div>
		<div class="grid grid-cols-1 mt-10 card-group lg:grid-cols-3 gap-x-10 gap-y-5">
			<div class="w-full h-auto card-item">
				<div class="flex justify-center w-full p-5 card-header">
					<img src="<?= base_url("assets/img/karir/companyCulture1.png") ?>" alt="Company Culture 1" class="object-contain w-3/4 h-auto md:w-1/2 lg:w-3/4 aspect-square">
				</div>
				<div class="card-body flex flex-col items-center justify-between min-h-[220px] xl:min-h-[200px]">
					<div class="flex flex-col items-center gap-y-5">
						<h4 class="text-2xl lg:text-xl xl:text-2xl 2xl:text-3xl text-secondary font-bold text-center">
							Bisa
						</h4>
						<p class="text-base text-center lg:text-sm xl:text-base 2xl:text-lg">
							<span class="leading-relaxed lg:leading-loose xl:leading-relaxed font-nunito">
								Komitmen untuk memberikan lebih dari yang terbaik dengan menjunjung tinggi integritas dan profesionalisme dalam bekerja.
							</span>
						</p>
					</div>
					<p class="bg-blue-accent text-secondary text-sm lg:text-xs xl:text-sm 2xl:text-base w-max px-2 rounded-lg text-center mx-auto max-w-full">
						Kunci = Integritas + Prestasi + Profesional
					</p>
				</div>
			</div>
			<div class="w-full h-auto card-item">
				<div class="flex justify-center w-full p-5 card-header">
					<img src="<?= base_url("assets/img/karir/companyCulture2.png") ?>" alt="Company Culture 1" class="object-contain w-3/4 h-auto md:w-1/2 lg:w-3/4 aspect-square">
				</div>
				<div class="card-body flex flex-col items-center justify-between min-h-[220px] xl:min-h-[200px]">
					<div class="flex flex-col items-center gap-y-5">
						<h4 class="text-2xl lg:text-xl xl:text-2xl 2xl:text-3xl text-secondary font-bold text-center">
							Sinergi
						</h4>
						<p class="text-base text-center lg:text-sm xl:text-base 2xl:text-lg">
							<span class="leading-relaxed lg:leading-loose xl:leading-relaxed font-nunito">
								Sikap menghormati orang lain, menciptakan dan menjaga lingkungan kerja yang harmonis serta mengutamakan kerja tim.
							</span>
						</p>
					</div>
					<p class="bg-blue-accent text-secondary text-sm lg:text-xs xl:text-sm 2xl:text-base w-max px-2 rounded-lg text-center mx-auto max-w-full">
						Kunci = Kerja Sama + Harmonis + Hormat
					</p>
				</div>
			</div>
			<div class="w-full h-auto card-item">
				<div class="flex justify-center w-full p-5 card-header">
					<img src="<?= base_url("assets/img/karir/companyCulture3.png") ?>" alt="Company Culture 1" class="object-contain w-3/4 h-auto md:w-1/2 lg:w-3/4 aspect-square">
				</div>
				<div class="card-body flex flex-col items-center justify-between min-h-[220px] xl:min-h-[200px]">
					<div class="flex flex-col items-center gap-y-5">
						<h4 class="text-2xl lg:text-xl xl:text-2xl 2xl:text-3xl text-secondary font-bold text-center">
							Tangguh
						</h4>
						<p class="text-base text-center lg:text-sm xl:text-base 2xl:text-lg">
							<span class="leading-relaxed lg:leading-loose xl:leading-relaxed font-nunito">
								Semangat antusias dalam lingkungan kerja yang dinamis dan seimbang.
							</span>
						</p>
					</div>
					<p class="bg-blue-accent text-secondary text-sm lg:text-xs xl:text-sm 2xl:text-base w-max px-2 rounded-lg text-center mx-auto max-w-full">
						Kunci = Dinamis + Seimbang
					</p>
				</div>
			</div>
		</div>
	</section>

	<section id="counting" class="w-full h-auto py-20 px-10 lg:px-20 2xl:px-28 relative bg-[url('../img/karir/section-2.webp')] bg-cover bg-bottom">
		<!-- <section id="splide-counting" class="splide h-auto my-12 wow fadeInUp" data-wow-delay="0.5s" aria-labelledby="carousel-heading">
			<div class="splide__track h-full">
				<ul class="splide__list h-full">
					<li class="splide__slide h-auto w-auto flex justify-center items-center overflow-visible">
						<div class="content w-full h-full">
							<div class="content w-full h-auto aspect-[4/3] bg-white rounded-lg shadow-md">
								<div class="icon w-[4rem] 4xl:w-[5rem] flex justify-center items-center h-auto bg-secondary p-4 aspect-square rounded-full -mt-5">
									<img src="<?= base_url("assets/img/karir/icon-1.webp") ?>" alt="icon-1" class="w-full h-full object-contain">
								</div>
								<div class="text-center h-full w-full text-black relative top-0 flex flex-col gap-y-3 items-center justify-end 3xl:justify-center pb-3">
									<h3 class="count text-4xl font-bold text-primary" data-count="34">0</h3>
									<p class="category text-xl 4xl:text-2xl">Median Usia</p>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</section> -->
		<div class="content grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-x-10 gap-y-16 w-full h-auto container">
			<div class="content w-full h-auto aspect-[4/3] bg-white rounded-lg relative shadow-md">
				<div class="icon absolute w-[6rem] md:w-[5rem] 4xl:w-[5rem] flex justify-center items-center h-auto top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-secondary p-4 aspect-square rounded-full">
					<img src="<?= base_url("assets/img/karir/icon-1.webp") ?>" alt="icon-1" class="object-contain w-full h-full">
				</div>
				<div class="relative top-0 flex flex-col items-center justify-center lg:justify-end w-full h-full pb-3 text-center text-black gap-y-3 3xl:justify-center">
					<h3 class="text-4xl font-bold count text-primary" data-count="34">0</h3>
					<p class="text-xl category 4xl:text-2xl">Median Usia</p>
				</div>
			</div>
			<div class="content w-full h-auto aspect-[4/3] bg-white rounded-lg relative shadow-md">
				<div class="icon absolute w-[6rem] md:w-[5rem] 4xl:w-[5rem] flex justify-center items-center h-auto top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-secondary p-4 aspect-square rounded-full">
					<img src="<?= base_url("assets/img/karir/icon-2.png") ?>" alt="icon-1" class="object-contain w-full h-full">
				</div>
				<div class="relative top-0 flex flex-col items-center justify-center lg:justify-end w-full h-full pb-3 text-center text-black gap-y-3 3xl:justify-center">
					<div class="text flex gap-x-3">
						<h3 class="text-4xl font-bold count text-primary" data-count="36">0</h3>
						<p class="text-4xl font-bold text-primary">%</p>
					</div>
					<p class="text-xl category 4xl:text-2xl">Karyawan Wanita</p>
				</div>
			</div>
			<div class="content w-full h-auto aspect-[4/3] bg-white rounded-lg relative shadow-md">
				<div class="icon absolute w-[6rem] md:w-[5rem] 4xl:w-[5rem] flex justify-center items-center h-auto top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-secondary p-4 aspect-square rounded-full">
					<img src="<?= base_url("assets/img/karir/icon-3.png") ?>" alt="icon-1" class="object-contain w-full h-full">
				</div>
				<div class="relative top-0 flex flex-col items-center justify-center lg:justify-end w-full h-full pb-3 text-center text-black gap-y-3 3xl:justify-center">
					<div class="test flex gap-x-3">
						<h3 class="text-4xl font-bold count text-primary" data-count="84">0</h3>
						<p class="text-4xl font-bold text-primary">%</p>
					</div>
					<p class="text-xl category 4xl:text-2xl">Karyawan Milenial</p>
				</div>
			</div>
			<div class="content w-full h-auto aspect-[4/3] bg-white rounded-lg relative shadow-md">
				<div class="icon absolute w-[6rem] md:w-[5rem] 4xl:w-[5rem] flex justify-center items-center h-auto top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-secondary p-4 aspect-square rounded-full">
					<img src="<?= base_url("assets/img/karir/icon-4.png") ?>" alt="icon-1" class="object-contain w-full h-full">
				</div>
				<div class="relative top-0 flex flex-col items-center justify-center lg:justify-end w-full h-full pb-3 text-center text-black gap-y-3 3xl:justify-center">
					<div class="text flex gap-x-3">
						<h3 class="text-4xl font-bold count text-primary" data-count="34">0</h3>
						<p class="text-4xl font-bold text-primary">%</p>
					</div>
					<p class="text-xl category 4xl:text-2xl">Pemimpin Wanita</p>
				</div>
			</div>
			<div class="content w-full h-auto aspect-[4/3] bg-white rounded-lg relative shadow-md">
				<div class="icon absolute w-[6rem] md:w-[5rem] 4xl:w-[5rem] flex justify-center items-center h-auto top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-secondary p-4 aspect-square rounded-full">
					<img src="<?= base_url("assets/img/karir/icon-5.png") ?>" alt="icon-1" class="object-contain w-full h-full">
				</div>
				<div class="relative top-0 flex flex-col items-center justify-center lg:justify-end w-full h-full pb-3 text-center text-black gap-y-3 3xl:justify-center">
					<div class="text flex gap-x-3">
						<h3 class="text-4xl font-bold count text-primary" data-count="66">0</h3>
						<p class="text-4xl font-bold text-primary">%</p>
					</div>
					<p class="text-xl category 4xl:text-2xl">Pemimpin Milenial</p>
				</div>
			</div>
		</div>
	</section>

	<section id="WhyWorkInjalin" class="w-full h-auto py-20 px-5 lg:px-20 2xl:px-28 container">
		<div class="title w-full text-center pb-10">
			<h3 class="text-2xl md:text-4xl xl:text-3xl 2xl:text-4xl text-primary font-bold">Serunya kerja di Jalin itu...</h3>
		</div>
		<section id="splide-why-work-in-jalin" class="h-auto my-12 splide wow fadeInUp" data-wow-delay="0.5s" aria-labelledby="carousel-heading">
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
					<?php foreach ($kerjadijalin as $key => $value) : ?>
						<li class="flex items-center justify-center w-auto h-auto splide__slide">
							<div class="flex flex-col justify-between w-full h-auto p-8 card-item rounded-xl <?php echo $value['bg_color'] ?>" style="height: 100%;">
								<div class="card-body flex flex-col items-start justify-between min-h-[250px] xl:min-h-[250px]">
									<div class="flex flex-col items-start gap-y-5">
										<h4 class="text-xl xs:text-2xl md:text-3xl lg:text-lg xl:text-xl 2xl:text-2xl font-bold text-left min-h-[65px] xl:min-h-[55px]">
											<?php echo $value['title'] ?>
										</h4>
										<p class="text-base text-justify md:text-2xl lg:text-xs xl:text-sm 2xl:text-lg">
											<span class="leading-relaxed lg:leading-loose font-nunito">
												<?php echo $value['description'] ?>
											</span>
										</p>
									</div>
								</div>
								<div class="flex justify-center w-full h-auto p-5 card-header">
									<img src="<?= BASEBACK . $value['image'] ?>" alt="Company Culture 1" class="object-contain w-3/4 h-auto md:w-1/2 lg:w-3/4 aspect-square">
								</div>
							</div>
						</li>
					<?php endforeach ?>
				</ul>
			</div>
		</section>
	</section>

	<section id="comment" class="w-full h-auto py-20 relative bg-[url('../img/karir/section-6.webp')] bg-cover">
		<div class="absolute top-0 left-0 w-full h-full bg-gradient">
			<div class="absolute top-0 left-0 w-full h-32 top bg-gradient-to-b from-white"></div>
			<div class="absolute bottom-0 left-0 w-full h-32 top bg-gradient-to-t from-white"></div>
		</div>
		<div class="content relative top-0 w-full px-5 lg:px-20 container">
			<div class="title w-full text-center pb-10">
				<h3 class="text-2xl md:text-4xl xl:text-3xl 2xl:text-4xl text-secondary font-bold">Kata Jaliners</h3>
			</div>
			<?php $count = count($karyawan) / 2; ?>
			<section id="splide-comment-1" class="w-full h-auto my-12 splide wow fadeInUp" data-wow-delay="0.5s" aria-labelledby="carousel-heading">
				<div class="h-full splide__track">
					<ul class="h-full splide__list">
						<?php foreach ($karyawan as $key => $kar) : ?>
							<?php if ($key >= $count) : ?>
								<li class="h-full splide__slide">
									<div class="grid w-full h-auto grid-cols-5 my-2 bg-white rounded-lg shadow-md content group hover:bg-secondary">
										<div class="w-auto h-auto col-span-5 overflow-hidden md:col-span-2 rounded-xl">
											<img src="<?= BASEBACK . $kar['image'] ?>" alt="person image" class="object-cover w-1/2 h-full p-5 m-auto overflow-hidden rounded-xl md:w-full">
										</div>
										<div class="flex flex-col h-auto col-span-5 px-5 py-5 md:col-span-3 gap-y-4 md:px-0 md:pr-5">
											<div class="title">
												<h4 class="text-lg font-bold text-secondary group-hover:text-white"><?php echo $kar['title'] ?></h4>
												<p class="text-sm font-nunito group-hover:text-white"><?php echo $kar['job_title'] ?></p>
											</div>
											<div class="mt-3 content">
												<p class="text-sm group-hover:text-white">
													<span class="leading-relaxed font-nunito">
														<?php echo word_limiter($kar['description'], 60) ?>
													</span>
												</p>
											</div>
										</div>
									</div>
								</li>
							<?php endif ?>
						<?php endforeach ?>
					</ul>
				</div>
			</section>

			<section id="splide-comment-2" class="w-full h-auto my-12 splide wow fadeInUp" data-wow-delay="0.5s" aria-labelledby="carousel-heading">
				<div class="h-full splide__track">
					<ul class="h-full splide__list">
						<?php foreach ($karyawanSatu as $key => $karsat) : ?>
							<?php if ($key >= $count) : ?>
								<li class="h-full splide__slide">
									<div class="grid w-full h-auto grid-cols-5 my-2 bg-white rounded-lg shadow-md content group hover:bg-secondary">
										<div class="w-auto h-auto col-span-5 overflow-hidden md:col-span-2 rounded-xl">
											<img src="<?= BASEBACK . $karsat['image'] ?>" alt="person image" class="object-cover w-1/2 h-full p-5 m-auto overflow-hidden rounded-xl md:w-full">
										</div>
										<div class="flex flex-col h-auto col-span-5 px-5 py-5 md:col-span-3 gap-y-4 md:px-0 md:pr-5">
											<div class="title">
												<h4 class="text-lg font-bold text-primary group-hover:text-white"><?php echo $karsat['title'] ?></h4>
												<p class="text-sm font-nunito group-hover:text-white"><?php echo $karsat['job_title'] ?></p>
											</div>
											<div class="mt-3 content">
												<p class="text-sm text-justify group-hover:text-white">
													<span class="leading-relaxed font-nunito">
														<?php echo $karsat['description'] ?>
													</span>
												</p>
											</div>
										</div>
									</div>
								</li>
							<?php endif ?>
						<?php endforeach ?>
					</ul>
				</div>
			</section>
		</div>
	</section>

	<section id="jalinMoment" class="container w-full h-auto px-5 py-20 md:px-20 lg:px-20">
		<div class="w-full pb-10 text-center title">
			<h3 class="text-2xl font-bold xl:text-3xl text-primary">Menjalin momen penuh makna</h3>
		</div>
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 h-auto lg:h-[80vh] justify-center items-center gap-8 mt-10">
			<div class="h-full col-span-1 row-span-1 overflow-hidden bg-blue-200 lg:row-span-4 lg:h-1/2 rounded-xl aspect-square lg:aspect-auto">
				<img src="<?= BASEBACK . $menjalinmomen[0]['image'] ?>" alt="Momen 1" class="object-cover w-full h-full">
			</div>
			<div class="col-span-1 row-span-1 lg:row-span-2 w-full h-[100%] flex items-end aspect-square lg:aspect-auto">
				<div class="w-full h-full lg:h-[75%] bg-green-200 rounded-xl overflow-hidden">
					<img src="<?= BASEBACK . $menjalinmomen[1]['image'] ?>" alt="Momen 1" class="object-cover w-full h-full">
				</div>
			</div>
			<div class="col-span-1 lg:col-span-2 row-span-1 lg:row-span-2 w-full h-[100%] bg-gray-200 rounded-xl overflow-hidden aspect-square lg:aspect-auto">
				<img src="<?= BASEBACK . $menjalinmomen[2]['image'] ?>" alt="Momen 1" class="object-cover w-full h-full">
			</div>
			<div class="h-full col-span-1 row-span-1 overflow-hidden bg-blue-200 lg:row-span-4 lg:h-1/2 rounded-xl aspect-square lg:aspect-auto">
				<img src="<?= BASEBACK . $menjalinmomen[3]['image'] ?>" alt="Momen 1" class="object-cover w-full h-full">
			</div>
			<div class="col-span-1 lg:col-span-2 row-span-1 lg:row-span-2 w-full h-[100%] bg-gray-200 rounded-xl overflow-hidden aspect-square lg:aspect-auto">
				<img src="<?= BASEBACK . $menjalinmomen[4]['image'] ?>" alt="Momen 1" class="object-cover w-full h-full">
			</div>
			<div class="col-span-1 row-span-1 lg:row-span-2 w-full h-[100%] flex items-start aspect-square lg:aspect-auto">
				<div class="w-full h-full lg:h-[75%] bg-green-200 rounded-xl overflow-hidden">
					<img src="<?= BASEBACK . $menjalinmomen[5]['image'] ?>" alt="Momen 1" class="object-cover w-full h-full">
				</div>
			</div>
		</div>
	</section>

	<section class="container w-full h-auto bg-secondary">
		<section id="jalinAwards" class="w-full h-auto">
			<div class="relative w-full background-variation">
				<img src="<?= base_url("assets/img/karir/bg-variation1.png") ?>" alt="background variation" class="absolute top-0 left-0 h-auto w-28">
				<img src="<?= base_url("assets/img/karir/bg-variation2.png") ?>" alt="background variation" class="absolute top-0 right-0 h-auto w-28">
			</div>
			<div class="content w-full h-full px-10 sm:px-10 md:px-5 lg:px-20 2xl:px-20 4xl:px-32 py-20">
				<div class="title w-full text-center pb-10 ">
					<h3 class="text-2xl md:text-4xl xl:text-3xl 2xl:text-4xl text-white font-bold">Acknowledgement</h3>
				</div>
				<div class="grid items-center justify-center w-full h-auto grid-cols-1 mt-10 content md:grid-cols-2 lg:grid-cols-2 gap-y-10">
					<div class="grid grid-cols-5 gap-x-10 md:gap-x-5">
						<div class="flex items-center w-full col-span-2 justify-center">
							<img src="<?= base_url("assets/img/karir/logo-isov3-2022.webp") ?>" alt="Iso Logo" class="w-full lg:w-3/4 h-auto">
						</div>
						<div class="h-auto col-span-3">
							<div class="flex flex-col justify-center h-full award gap-y-3">
								<h4 class="text-xl font-bold text-white">
									ISO 27001
								</h4>
							</div>
						</div>
					</div>
					<div class="grid grid-cols-5 gap-x-10 md:gap-x-5">
						<div class="flex items-center w-full col-span-2 justify-center">
							<img src="<?= base_url("assets/img/karir/pci-logo.png") ?>" alt="PCI Logo" class="w-full lg:w-3/4 h-auto">
						</div>
						<div class="h-auto col-span-3">
							<div class="flex flex-col justify-center h-full award gap-y-3">
								<h4 class="text-xl font-bold text-white">
									Sertifikasi Payment Card Industry Data Security Standard (PCI-DSS)
								</h4>
							</div>
						</div>
					</div>
					<div class="grid grid-cols-5 gap-x-10 md:gap-x-5">
						<div class="flex items-center w-full col-span-2 justify-center">
							<img src="<?= base_url("assets/img/karir/logo-hr-asia.webp") ?>" alt="hr asia Logo" class="w-full lg:w-3/4 h-auto">
						</div>
						<div class="col-span-3">
							<div class="flex flex-col justify-center h-full award gap-y-3">
								<h4 class="text-xl font-bold text-white">
									HR Asia Award
								</h4>
							</div>
						</div>
					</div>
					<div class="grid grid-cols-5 gap-x-10 md:gap-x-5">
						<div class="flex items-center lg:justify-center w-full col-span-2">
							<img src="<?= base_url("assets/img/karir/awrd.png") ?>" alt="Iso Logo" class="object-contain w-full lg:w-1/4 h-auto aspect-square lg:aspect-auto">
						</div>
						<div class="h-auto col-span-3">
							<div class="flex flex-col justify-center h-full award gap-y-3">
								<h4 class="text-xl font-bold text-white">
									Akhlak Award 2 Klaster Danareksa
								</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="jalinStory" class="w-full h-auto px-5 sm:px-10 md:px-5 2xl:px-20 4xl:px-32 py-20 bg-white rounded-t-8xl items-center container">
			<div class="title w-full text-center pb-10">
				<h3 class="text-2xl md:text-4xl xl:text-3xl 2xl:text-4xl text-primary font-bold">Jaliners Punya Cerita</h3>
			</div>
			<section id="splide-videos" class="h-auto my-12 splide wow fadeInUp" data-wow-delay="0.5s" aria-labelledby="carousel-heading">
				<div class="h-full splide__track">
					<ul class="h-full splide__list">
						<?php foreach ($video as $key => $vid) : ?>
							<li class="flex items-center justify-center w-auto h-auto splide__slide">
								<div class="news-card w-full h-auto aspect-video rounded-2xl overflow-hidden relative">
									<div data-videoid="<?php echo $vid['url'] ?>" class="relative flex items-center justify-center w-full h-full overflow-hidden cursor-pointer card-videos card-item rounded-2xl">
										<!-- <iframe src="https://img.youtube.com/vi/8ngaID9wAXQ/mqdefault.jpg" title="YouTube video player" frameborder="0" allow="" allowfullscreen class="w-auto h-full"></iframe> -->
										<img src="https://img.youtube.com/vi_webp/<?php echo $vid['url'] ?>/hqdefault.webp" alt="youtube-thumbnail" width="1280" height="1000" class="object-cover w-full h-full">
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

	</section>

</main>

<section id="overlay-modal" class="fixed top-0 left-0 z-40 w-full h-screen bg-black overlay opacity-60 hidden"></section>

<aside id="youtube-video" class="fixed top-0 left-0 z-40 items-center justify-center hidden w-full h-screen">
	<button id="close-button-youtube" class="absolute z-40 cursor-pointer close-button right-5 top-5"><i class="text-3xl text-white fa-solid fa-xmark"></i></button>
	<div id="video" class="flex items-center justify-center w-full h-full">
	</div>
</aside>

<script src="<?= base_url("assets/splidejs/dist/js/splide.min.js") ?>"></script>
<script src="<?= base_url("assets/splide-auto-scroll/package/dist/js/splide-extension-auto-scroll.min.js") ?>"></script>
<script src="<?= base_url("assets/js/career/splide.js") ?>"></script>
<script src="<?= base_url("assets/js/career/count.js") ?>"></script>
<script src="<?= base_url("assets/js/career/videos.js") ?>"></script>
<script src="<?= base_url("assets/js/career/modal.js") ?>"></script>


<script type="text/javascript">
	$(document).ready(function() {
		$("#search-career").keyup(function() {
			var data = $(this).val();
			$("#show-karir").load("<?php echo BASEURL . 'career/showkarir' ?>", {
				"choices": data
			});
		});
	});
</script>
