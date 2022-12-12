<?php 
$lang = $this->session->userdata('lang'); 
$langDB = $this->session->userdata('langDatabase'); 
?>


<main class="py-24 md:py-0 lg:py-28 2xl:py-32 3xl:py-36 4xl:py-44">
	<section class="container w-full h-auto px-5 pt-5 content lg:px-16 2xl:px-28 lg:pt-10">
		<div class="flex button">
			<a href="<?= base_url("id-id/berita") ?>">
				<button class="px-8 py-3 text-sm font-semibold text-white rounded-t-2xl font-montserrat bg-secondary lg:text-base 3xl:text-lg">Berita</button>
			</a>
			<a href="<?= base_url("id-id/promo") ?>">
				<button class="px-8 py-3 text-sm font-semibold rounded-t-2xl font-montserrat bg-blue-accent text-neutral-400 lg:text-base 3xl:text-lg">Promo</button>
			</a>
		</div>
		<div class="flex flex-col pt-5 title gap-y-5 lg:pt-10 lg:gap-y-3">
			<h1 class="text-xl font-bold md:text-2xl text-secondary lg:text-3xl 2xl:text-4xl">Menjalin Momen Terbaik</h1>
			<p class="text-sm lg:text-lg">Lihat aktivitas terbaru kami</p>
		</div>
		<div class="flex w-full pt-5 filter gap-x-5 sm:w-6/12 lg:w-5/12 lg:pt-8 lg:gap-x-5">
			<div class="relative search-input grow">
				<input type="text" placeholder="Cari Berita" class="w-full px-4 py-3 text-sm border border-black rounded-3xl focus:outline-secondary" id="searchform-input">
				<button type="submit" class="absolute top-0 right-0 h-full w-14 text-neutral-400">
					<i class="text-xl fa-solid fa-magnifying-glass"></i>
				</button>
			</div>
			<div class="result-search-form">

            	<!-- hasil search show -->

          	</div>
			<div class="relative flex items-center justify-center h-auto filter-button w-14 bg-secondary rounded-3xl">
				<div id="filterButton" class="flex items-center justify-center w-full h-full cursor-pointer">
					<img id="filterButtonImg" src="<?= base_url("assets/img/home/btn-filter.png") ?>" alt="Button Filter" class="absolute">
					<i id="filterButtonClose" class="hidden w-6 h-6 text-white fa-solid fa-xmark"></i>
				</div>
				<div id="filterBody" class="absolute w-[85vw] xs:w-fit xs:min-w-[15rem]  h-auto bg-white -bottom-3 right-0 z-10 translate-y-full p-5 rounded-xl hidden" style="box-shadow: 0 0 15px -5px black;">
					<div class="flex flex-col items-start w-full gap-y-3">

						<?php foreach ($kategori as $key => $kat) { ?>
						<div class="flex flex-row-reverse justify-start cursor-pointer input gap-x-5">
							<label for="<?= $kat['url_post_kategori'] ?>" class="cursor-pointer font-nunito"><?= $kat['title'] ?></label>
							<input type="checkbox" id="<?= $kat['url_post_kategori'] ?>" name="kategori[]" value="<?= $kat['id_post_kategori'] ?>" class="cursor-pointer ring-none">
						</div>
						<?php } ?>
						<button class="mt-3 text-sm text-white btn btn-primary bg-secondary hover:bg-transparent hover:text-secondary" id="submitBtnCat">Terapkan</button>
					</div>
				</div>
			</div>
		</div>
		<div class="pt-10 news lg:pt-10">
			<div class="grid grid-cols-1 card gap-y-5 md:grid-cols-2 md:gap-x-5 lg:grid-cols-3" id="showdata-news">
				<?php /* for ($i = 0; $i < 12; $i++) : ?>
					<div class="flex justify-center w-full card-items">
						<div class="news-card h-[190px] w-[280px] xs:h-[256px] xs:w-[385px] sm:h-[270px] sm:w-[400px] md:h-[230px] md:w-[350px] lg:h-[192px] lg:w-[285px] xl:h-[260px] xl:w-full 2xl:h-[270px] 3xl:h-[300px] 4xl:h-[340px] rounded-2xl overflow-hidden relative">
							<div class="relative w-full h-full background-img">
								<img src="<?= base_url("assets/img/home/article.webp") ?>" alt="Image article" class="absolute top-0 left-0 object-cover w-full h-full">
								<div class="absolute top-0 left-0 w-full h-full overlay bg-gradient-to-t from-black"></div>
							</div>
							<div class="content absolute w-full max-h-[65%] xs:max-h-[55%] lg:max-h-[70%] xl:max-h-[65%] 2xl:max-h-[60%] min-h-[30%] bottom-0 left-0 flex justify-between px-5 py-5 md:px-3 md:py-3 xl:px-5 xl:py-5 space-x-2 sm:space-x-4 md:space-x-2 xl:space-x-4">
								<div class="flex flex-col w-full text-xs text-white article text-nunito sm:text-sm md:text-xs xl:text-sm">
									<button class="px-2 py-1 mb-2 rounded-full category-article bg-blue-accent text-secondary w-fit">Press and Release</button>
									<a href="#" class="leading-relaxed article-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, laborum.</a>
								</div>
								<a href="<?= base_url("id-id/berita/readmore") ?>" class="self-end hidden w-fit xs:block">
									<button class="text-xs text-white btn-primary bg-secondary sm:text-base md:text-xs xl:text-sm 2xl:text-base">
										Selengkapnya
									</button>
								</a>
							</div>
						</div>
					</div>
				<?php endfor;*/ ?>
			</div>
		</div>
		<div class="flex justify-center py-10 button lg:py-14" id="load_data_message">
			<!-- <a type="button" class="btn-primary">Muat Berita</a> -->
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



    var limit = 12;

    var start = 0;

    var kategoriOption = [];

    var language = "<?php echo $langDB ?>";

    var action = 'inactive';

    var htmltrue = false;



    function load_country_data(limit, start, kategoriOption, htmltrue) {

        $.ajax({

            url: "<?php echo BASEURL.'NewsAndPromo/loaddataNews' ?>",

            method: "POST",

            data: {

                limit: limit,

                start: start,

                kategoriOption : kategoriOption,

                language : "<?php echo $langDB ?>"

            },

            cache: false,

            success: function(data) {
            	var myObj = JSON.parse(data);
            	if (kategoriOption) {
                	$('#showdata-news').html(myObj.view);
            	} else {
	                $('#showdata-news').append(myObj.view);
            	}
                if (myObj.view == '') {

                	$('#showdata-news').html(myObj.view);
                    $('#load_data_message').html("<button type='button' class='btn btn-primary load-more-btn'> No Data Found </button>");

                    action = 'active';

                } else if(myObj.count <= 9){
                	$('#showdata-news').html(myObj.view);
                    $('#load_data_message').html("<button type='button' class='btn btn-primary load-more-btn'> No Data Found </button>");

                    action = 'active';

                }else {
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

	    
	$(document).on( "click", "#submitBtnCat", function(e) {

		var kategoriOption = $('input[name="kategori[]"]:checked').map(function(){ 
			            return this.value; 
			        }).get();
		console.log(kategoriOption);
        e.preventDefault();
        setTimeout(function() {
            load_country_data(9, 0, kategoriOption, htmltrue);
        }, 1000);
    });
	       
	       



});

</script>

<script type="text/javascript">

$(document).ready(function() {

  $('#searchform-input').keyup(function() {

    $('.result-search-form').show();

    var valuesearch = $(this).val();

    $.post( "<?php echo BASEURL.'NewsAndPromo/searchartikel' ?>", { searchVal: valuesearch,lang:"<?php echo $lang ?>" }).done(function( data ) {

      $( ".result-search-form" ).html( data );

    });

  });

});

</script>
