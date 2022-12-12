<?php 
$lang = $this->session->userdata('lang'); 
$langDB = $this->session->userdata('langDatabase'); 
?>

<main class="py-20">

	<div class="block md:flex justify-center lg:pl-[70px] lg:mt-16">

		<section class="grid grid-cols-12 px-3 xs:px-6 sm:px-10 pt-8 lg:pt-14 w-full justify-center">

			<div class="col-span-12 md:col-span-9">

				<div class="text-left">

					<div class="text-secondary">

						<h1 class="font-bold text-xl sm:text-3xl lg:text-4xl">

							<?php echo $karir['nama_job'] ?>

						</h1>

					</div>

					<div class="text-neutral-500 mt-3 font-medium">

						<p class="text-xs sm:text-sm lg:text-base"><?php echo $karir['lokasi'] ?></p>

						<span class="text-sm"><?php echo $karir['kontrak_kerja'] ?></span>

					</div>

					<div class="text-black mt-5" id="desc-karir">

						<?php echo $karir['description'] ?>

					</div>

				</div>

			</div>

			<div class="col-span-12 md:col-span-2 justify-center md:justify-center flex pt-5 sm:pt-0">

				<div class="text-black font-bold text-center">

					<p class="text-lg">

						Bagikan

					</p>

					<div class="justify-start sm:justify-center flex mt-7">

						<div class="flex sm:block">

							<div class="icon">
								<a href="whatsapp://send?text=<?php echo BASEURL.$lang.'/karir/'.$karir['url_karir'] ?>" target="_blank"><i class="fa-brands fa-whatsapp text-3xl cursor-pointer p-6 text-neutral-500"></i></a>
							</div>
							<div class="icon">
								<a href="https://twitter.com/intent/tweet?text=<?php echo BASEURL.$lang.'/karir/'.$karir['url_karir'] ?>" target="_blank"><i class="fa-brands fa-twitter text-3xl cursor-pointer p-6 text-neutral-500"></i></a>
							</div>
							<div class="icon">
								<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo BASEURL.$lang.'/karir/'.$karir['url_karir'] ?>" target="_blank"><i class="fa-brands fa-facebook-f text-3xl cursor-pointer p-6 text-neutral-500"></i></a>
							</div>
							<div class="icon">
								<a href="javascript:;" onclick="copyToClipboard(window.location.href); return false;" target="_blank"><i class="fa-solid fa-share-nodes text-3xl cursor-pointer p-6 text-neutral-500"></i></a>
							</div>

						</div>

					</div>

				</div>

			</div>

		</section>

	</div>

	<div class="m-5 lg:pl-[50px]">

		<div class="bg-secondary rounded-2xl w-max py-3 px-10">

			<a href="mailto:<?php echo $karir['email'] ?>" type="button" class="text-white font-bold px-10 ">Apply</a>

		</div>

	</div>

	<section class="px-16 w-full my-20">

		<h3 class="text-primary font-bold text-3xl py-10">

			Related Job

		</h3>

		<div class="card-group flex flex-col">

			<?php foreach ($karirRelated as $key => $kar): ?>
				<?php if ($kar['url_karir'] != $this->uri->segment(3)): ?>
				<div class="h-full border-b cursor-pointer card-item border-secondary group hover:bg-blue-accent-3 hover:rounded-xl">
					<a href="<?= base_url($lang."/karir/".$kar['url_karir']) ?>" class="pl-5">
						<div class="flex justify-between w-full h-auto gap-x-0 xs:gap-x-2">
							<div class="flex flex-col pb-10 card-title gap-y-4">
								<h3 class="text-base font-bold lg:text-xl text-secondary group-hover:text-white">
									<?php echo $kar['nama_job'] ?>
								</h3>
								<div class="w-full">
									<ul class="flex flex-wrap w-full gap-x-3 gap-y-2 lg:gap-y-0">
										<li class="flex items-center px-2 text-sm bg-white rounded-md text-secondary"><i class="mr-2 text-xs fa-solid fa-paper-plane"></i> <?php echo $kar['lokasi'] ?></li>
										<li class="flex items-center px-2 text-sm bg-white rounded-md <?php if(date('Y-m-d') > $kar['expired_date']){ echo "text-primary";} else { echo "text-secondary";} ?>"><i class="mr-2 text-xs fa-solid fa-calendar-days"></i> 
											<?php if(date('Y-m-d') > $kar['expired_date'])
												{ echo "Expired";} 
												else 
												{ $dateCreated = date_create($kar['expired_date']);echo date_format($dateCreated,'d F Y');} ?>
										</li>
									</ul>
								</div>
							</div>
							<div class="flex items-center w-auto h-auto card-button">
								<a href="<?= base_url($lang."/karir/".$kar['url_karir']) ?>" class="w-max">
									<button class="h-auto px-0 lg:px-10">
										<i class="text-3xl fa-solid fa-angle-right"></i>
									</button>
								</a>
							</div>
						</div>
					</a>
				</div>
				<?php endif ?>
			<?php endforeach ?>

		</div>



	</section>

</main>

<script src="<?= base_url("assets/js/copytoclipboard.js") ?>"></script>
