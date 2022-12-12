<main class="w-full overflow-x-hidden " x-data="{showModal1: false, showModal2: false, showModal3: false, showModal4: false, showModal5: false, showModal6: false, showModal7: false}" :class="{'overflow-y-hidden': showModal1, showModal2, showModal3, showModal4, showModal5, showModal6, showModal7}">

	<header id="header" class="w-full h-[46vh] md:h-auto md:aspect-[5/2] text-white py-5 relative">
		<section id="header-background" class="w-full h-[46vh] md:h-full md:aspect-[5/2] absolute top-0 left-0 -z-10">
			<img src="<?= base_url("assets/img/company/cover-management.webp") ?>" alt="Header image" class="w-full h-[46vh] md:h-auto md:aspect-[5/2] object-cover">
			<section id="overlay" class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-secondary opacity-100"></section>
		</section>

		<section id="hero" class="px-5 xs:px-8 sm:px-12 md:px-16 lg:px-20 w-full 4xl:w-full h-[46vh] md:h-auto md:aspect-[5/2] flex flex-col justify-center wow fadeIn container" style="margin-bottom:-41px;">
			<h1 class="text-lg xs:text-3xl sm:text-4xl md:text-5xl lg:text-7xl 3xl:text-8xl font-bold sm:font-extrabold text-center w-full">
				<span class="leading-normal sm:leading-tight">
					The National Digital Highway
				</span>
			</h1>
			<p class="text-sm xs:text-base sm:text-xl md:text-xl 3xl:text-2xl pt-5 font-nunito w-full text-center">
				<span class="leading-relaxed sm:leading-relaxed">
					Menyediakan teknologi layanan keuangan yang aman, berinterkoneksi, terintegrasi, dan efisien. #JadiTerhubung
				</span>
			</p>
		</section>
	</header>
	<!-- <header id="header" class="w-full h-full aspect-[5/2] text-white py-5 relative">
		<section id="header-background" class="w-full h-full aspect-[5/2] absolute top-0 left-0 -z-10">
			<img src="<?= base_url("assets/img/company/cover-management.webp") ?>" alt="Header image" class="w-full h-full aspect-[5/2] object-cover">
			<section id="overlay" class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-secondary opacity-90"></section>
		</section>

		<section id="hero" class="px-5 sm:px-12 md:px-16 lg:px-20 w-full 4xl:w-full h-full aspect-[5/2] flex flex-col justify-center wow fadeIn container">
			<h1 class="text-base xs:text-xl sm:text-4xl md:text-5xl lg:text-7xl 3xl:text-8xl font-bold sm:font-extrabold text-center w-full">
				<span class="leading-normal sm:leading-tight">
					The National Digital Highway
				</span>
			</h1>
			<p class="text-sm xs:text-base sm:text-xl md:text-xl 3xl:text-2xl pt-2 xs:pt-3 sm:pt-5 font-nunito w-full text-center">
				<span class="leading-relaxed sm:leading-relaxed">
					Menyediakan teknologi layanan keuangan yang aman, berinterkoneksi, terintegrasi, dan efisien. #JadiTerhubung
				</span>
			</p>
		</section>
	</header> -->
	<!-- <header id="header" class="w-full h-auto aspect-[5/2] text-white py-5">
		<section id="header-background" class="w-full h-auto aspect-[5/2] absolute top-0 left-0 -z-10">
			<img src="<?= base_url("assets/img/company/cover-management.webp") ?>" alt="Header image" class="w-full h-full object-cover">
			<section id="overlay" class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-secondary opacity-90"></section>
		</section>

		<section id="hero" class="px-5 sm:px-10 md:px-14 lg:px-20 w-full 4xl:w-full h-auto aspect-[5/2] flex flex-col justify-center wow fadeIn container">
			<h1 class="text-3xl xs:text-4xl sm:text-6xl lg:text-7xl 3xl:text-8xl font-bold sm:font-extrabold text-center w-full">
				<span class="leading-normal sm:leading-tight">
					The National Digital Highway
				</span>
			</h1>
			<p class="text-base sm:text-xl 3xl:text-2xl pt-5 font-nunito w-full text-center">
				<span class="leading-loose sm:leading-relaxed">
					Menyediakan teknologi layanan keuangan yang aman, berinterkoneksi, terintegrasi, dan efisien. #JadiTerhubung
				</span>
			</p>
		</section>
	</header> -->

	<section class="bg-blue-accent flex justify-center">
		<div class="flex items-center flex-col my-10 container">
			<div class="text-primary text-center w-full">
				<h3 class="text-[22px] sm:text-[28px] font-bold">
					Dewan Komisaris
				</h3>
				<p class="text-[14px] sm:text-[20px] font-bold">
					PT Jalin Pembayaran Nusantara
				</p>
			</div>
			<div class="flex flex-wrap justify-center gap-10 mt-10 w-full lg:w-3/4 md:px-10 px-18">
				<?php foreach ($mana1 as $key => $m): ?>
				<div class="group drop-shadow-md w-[320px] 2xl:w-[480px] flex flex-col" @click="showModal<?php echo $key+1 ?> = true">
					<div class=" bg-white  group-hover:bg-primary rounded-2xl">
						<img src="<?= BASEBACK.$m['image'] ?>" alt="Komisaris Utama" class="w-full rounded-t-2xl">
						<div class="py-6 px-4">
							<p class="text-[18px] font-bold text-secondary group-hover:text-white">
								<?php echo $m['name'] ?>
							</p>
							<p class="text-[18px] font-light text-secondary group-hover:text-white">
								<?php echo $m['job_name'] ?>
							</p>
						</div>
					</div>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</section>

	<!-- Modal1 -->
	<?php foreach ($mana1 as $key => $m): ?>
		
	<div class="fixed inset-0 w-full place-items-center grid h-full z-50 bg-black bg-opacity-50 duration-300 overflow-y-auto" x-show="showModal<?php echo $key+1?>" x-transition:enter="transition duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
		<div class="relative w-11/12 md:w-3/4 mx-2 sm:mx-auto opacity-100">
			<div class="relative bg-white shadow-lg rounded-lg text-gray-900 z-20 w-full md:w-10/12 mx-auto" @click.away="showModal<?php echo $key+1?> = false" x-show="showModal<?php echo $key+1?>" x-transition:enter="transition transform duration-300" x-transition:enter-start="scale-0" x-transition:enter-end="scale-100" x-transition:leave="transition transform duration-300" x-transition:leave-start="scale-100" x-transition:leave-end="scale-0">
				<button class="font-semibold text-right text-black  transition-all duration-300 w-full pr-10 pt-5" @click="showModal<?php echo $key+1?> = false">
					X
				</button>
				<main class="p-10">
					<div class="grid-cols-12 block gap-4 lg:flex">
						<div class="col-span-5 w-full">
							<img src="<?= BASEBACK.$m['image'] ?>" alt="Komisaris Utama" class="w-full rounded-xl">
						</div>
						<div class="col-span-7">
							<p class="text-[18px] font-bold text-secondary">
								<?php echo $m['name'] ?>
							</p>
							<p class="text-[18px] font-light text-secondary">
								<?php echo $m['job_name'] ?>
							</p>
							<p class="mt-5">
								<?php echo $m['description'] ?>
							</p>
						</div>
					</div>
				</main>
			</div>
		</div>
	</div>
	<?php endforeach ?>

	<section class="bg-blue-accent w-full flex justify-center mx-auto pb-[53px]">
		<div class="justify-content container">
			<div class="text-primary text-center w-full">
				<h3 class="text-[28px] font-bold ">
					Dewan Direksi
				</h3>
				<p class="text-[20px] font-bold">
					PT Jalin Pembayaran Nusantara
				</p>
			</div>
			<div class="justify-center w-full">
				<div class="flex flex-wrap justify-center gap-10 mt-10 lg:px-32 xl:mx-32">
					<?php foreach ($mana2 as $key => $m): ?>
					<div class="group drop-shadow-md w-[320px] 2xl:w-[480px] flex flex-col" @click="showModal<?php echo $key+1 ?> = true">
						<div class=" bg-white  group-hover:bg-secondary rounded-2xl">
							<img src="<?= BASEBACK.$m['image'] ?>" alt="Direktur Utama" class="w-full rounded-t-2xl">
							<div class="py-6 px-4">
								<p class="text-[18px] font-bold text-secondary group-hover:text-white">
									<?php echo $m['name'] ?>
								</p>
								<p class="text-[18px] font-light text-secondary group-hover:text-white">
									<?php echo $m['job_name'] ?>
								</p>
							</div>
						</div>
					</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</section>


	<?php foreach ($mana2 as $key => $m): ?>
	<!-- Modal4 -->
	<div class="fixed inset-0 w-full place-items-center grid h-full z-50 bg-black bg-opacity-50 duration-300 overflow-y-auto" x-show="showModal<?= $key+1 ?>" x-transition:enter="transition duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
		<div class="relative w-11/12 md:w-3/4 mx-2 sm:mx-auto opacity-100">
			<div class="relative bg-white shadow-lg rounded-lg text-gray-900 z-20 w-full md:w-10/12 mx-auto" @click.away="showModal<?= $key+1 ?> = false" x-show="showModal<?= $key+1 ?>" x-transition:enter="transition transform duration-300" x-transition:enter-start="scale-0" x-transition:enter-end="scale-100" x-transition:leave="transition transform duration-300" x-transition:leave-start="scale-100" x-transition:leave-end="scale-0">
				<button class="font-semibold text-right text-black  transition-all duration-300 w-full pr-10 pt-5" @click="showModal<?= $key+1 ?> = false">
					X
				</button>
				<main class="p-10">
					<div class="grid-cols-12 block gap-4 lg:flex">
						<div class="col-span-5 w-full">
							<img src="<?= BASEBACK.$m['image'] ?>" alt="Komisaris Utama" class="w-full rounded-xl">
						</div>
						<div class="col-span-7">
							<p class="text-[18px] font-bold text-secondary">
								<?php echo $m['name'] ?>
							</p>
							<p class="text-[18px] font-light text-secondary">
								<?php echo $m['job_name'] ?>
							</p>
							<p class="mt-5">
								<?php echo $m['description'] ?>
							</p>
						</div>
					</div>
				</main>
			</div>
		</div>
	</div>
	<?php endforeach ?>
	
</main>
