<?php 
$lang = $this->session->userdata('lang'); 
$langDB = $this->session->userdata('langDatabase'); 
?>
<?php foreach ($karir as $key => $kar): ?>
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
<?php endforeach ?>