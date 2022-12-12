<main class="py-24 md:py-0 lg:py-28 2xl:py-32 3xl:py-36 4xl:py-44">
	<section class="content h-auto w-full px-5 pt-5 lg:px-16 2xl:px-28 lg:pt-10 container">

		<div class="button flex">

			<a href="<?= base_url("id-id/berita") ?>">

				<button class="rounded-t-2xl font-montserrat bg-blue-accent px-8 py-3 font-semibold text-neutral-400 text-sm lg:text-base 3xl:text-lg">Berita</button>

			</a>

			<a href="<?= base_url("id-id/promo") ?>">

				<button class="rounded-t-2xl font-montserrat bg-secondary px-8 py-3 font-semibold text-white text-sm lg:text-base 3xl:text-lg">Promo</button>

			</a>

		</div>

		<div class="title flex flex-col gap-y-5 pt-5 lg:pt-10 lg:gap-y-3">

			<h1 class="font-bold text-xl md:text-2xl text-secondary lg:text-3xl 2xl:text-4xl">Promo Terbaik</h1>

			<p class="text-sm lg:text-lg">Jangan lewatkan penawaran menarik untuk Anda</p>

		</div>

		<div class="filter flex gap-x-5 pt-5 w-full sm:w-6/12 lg:w-5/12 lg:pt-8 lg:gap-x-5">

			<div class="search-input relative grow">

				<input type="text" placeholder="Cari Promo" class="w-full border border-black py-3 px-4 rounded-3xl focus:outline-secondary text-sm">

				<button type="submit" class="absolute top-0 right-0 w-14 h-full text-neutral-400">

					<i class="fa-solid fa-magnifying-glass text-xl"></i>

				</button>

			</div>

			<div class="filter-button w-14 h-auto bg-secondary rounded-3xl flex justify-center items-center relative">

				<div id="filterButton" class="w-full h-full flex justify-center items-center cursor-pointer">

					<img id="filterButtonImg" src="<?= base_url("assets/img/home/btn-filter.png") ?>" alt="Button Filter" class="absolute">

					<i id="filterButtonClose" class="fa-solid fa-xmark w-6 h-6 text-white hidden"></i>

				</div>

				<div id="filterBody" class="absolute w-[85vw] xs:w-fit xs:min-w-[15rem]  h-auto bg-white -bottom-3 right-0 z-10 translate-y-full p-5 rounded-xl hidden" style="box-shadow: 0 0 15px -5px black;">

					<form action="" class="w-full flex flex-col items-start gap-y-3">
						<?php $filter = ["ATM", "Debit", "QRIS", "Digital"] ?>

						<?php for ($i = 0; $i < count($filter); $i++) : ?>
							<div class="flex flex-row-reverse justify-start cursor-pointer input gap-x-5">
								<label for="<?= $filter[$i] ?>" class="cursor-pointer font-nunito"><?= $filter[$i] ?></label>
								<input type="checkbox" id="<?= $filter[$i] ?>" name="<?= $filter[$i] ?>" class="cursor-pointer ring-none">
							</div>

						<?php endfor; ?>

						<button class="btn btn-primary bg-secondary text-white text-sm hover:bg-transparent hover:text-secondary mt-3">Terapkan</button>

					</form>

				</div>

			</div>

		</div>

		<div class="news pt-10 lg:pt-10">

			<div class="card grid grid-cols-1 gap-y-5 md:grid-cols-2 md:gap-x-5 lg:grid-cols-3" id="showdata-news">

				<?php /* for ($i = 0; $i < 12; $i++) : ?>

					<div class="card-items w-full flex justify-center">

						<div class="news-card h-[190px] w-[280px] xs:h-[256px] xs:w-[385px] sm:h-[270px] sm:w-[400px] md:h-[230px] md:w-[350px] lg:h-[192px] lg:w-[285px] xl:h-[260px] xl:w-full 2xl:h-[270px] 3xl:h-[300px] 4xl:h-[340px] rounded-2xl overflow-hidden relative">

							<div class="background-img w-full h-full relative">

								<img src="<?= base_url("assets/img/home/article.webp") ?>" alt="Image article" class="w-full h-full object-cover absolute top-0 left-0">

								<div class="overlay absolute w-full h-full bg-gradient-to-t from-black top-0 left-0"></div>

							</div>

							<div class="content absolute w-full max-h-[65%] xs:max-h-[55%] lg:max-h-[70%] xl:max-h-[65%] 2xl:max-h-[60%] min-h-[30%] bottom-0 left-0 flex justify-between px-5 py-5 md:px-3 md:py-3 xl:px-5 xl:py-5 space-x-2 sm:space-x-4 md:space-x-2 xl:space-x-4">

								<div class="article w-full text-white text-nunito text-xs sm:text-sm md:text-xs xl:text-sm flex flex-col">

									<button class="category-article bg-blue-accent text-secondary px-2 py-1 rounded-full mb-2 w-fit">Press and Release</button>

									<a href="#" class="article-title leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, laborum.</a>

								</div>
								<a href="<?= base_url("id-id/promo/readmore") ?>" class="w-fit self-end hidden xs:block">
									<button class="btn-primary bg-secondary text-white text-xs sm:text-base md:text-xs xl:text-sm 2xl:text-base">

										Selengkapnya

									</button>

								</a>

							</div>

						</div>

					</div>

				<?php endfor; */ ?>

			</div>

		</div>

		<div class="button flex justify-center py-10 lg:py-14" id="load_data_message">

			<!-- <a href="#" class="btn-primary">Muat Promo</a> -->

		</div>

	</section>



</main>



<script src="<?= base_url("assets/js/news-and-promo/btn-filter.js") ?>"></script>

<script type="text/javascript">

$( document ).ready(function() {


	$('.sort-data').click(function () {

		var datases = $(this).data('datases');

		$.post( "<?php echo BASEURL.'sortdata/simpanSess' ?>", { ses: datases })

		  	.done(function( data ) {

		  		location.reload();

		});

	});



	 $( "#showdata-news" ).on( "click", ".share-front-page", function() {

	 	$(this).siblings().slideToggle('slow');
	 });

});

</script>



<script type="text/javascript">

$(document).ready(function() {



    var limit = 9;

    var start = 0;

    var action = 'inactive';



    function load_country_data(limit, start) {

        $.ajax({

            url: "<?php echo BASEURL.'NewsAndPromo/loaddataPromo' ?>",

            method: "POST",

            data: {

            	kategori : "<?php echo $this->uri->segment(3); ?>",

                limit: limit,

                start: start

            },

            cache: false,

            success: function(data) {
            	var myObj = JSON.parse(data);
                $('#showdata-news').append(myObj.view);

                if (myObj.view == '' || myObj.count == 1) {

                    // $('#load_data_message').html("<button type='button' class='btn btn-primary load-more-btn'> No Data Found </button>");

                    action = 'active';

                } else {
                    $('#load_data_message').html("<button type='button' class='btn btn-primary load-more-btn' >Muat Berita</button>");
                    action = "inactive";

                }

            }

        });

    }



    if (action == 'inactive') {

        action = 'active';

        load_country_data(limit, start);

    }

   $(document).on( "click", ".load-more-btn", function() {
       if ($(window).scrollTop() + $(window).height() > $("#showdata-news").height() && action == 'inactive') {
            action = 'active';
            start = start + limit;
            setTimeout(function() {
                load_country_data(limit, start);
            }, 1000);
        }

    });



});

</script>

