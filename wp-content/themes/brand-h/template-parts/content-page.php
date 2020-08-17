<?php

/*
	
@package sunsettheme
-- Page Template

*/

?>

<!-- 


///////////// Original WP code (start)


 -->

<!-- <article id="post-<?php //the_ID(); 
						?>" <?php //post_class(); 
							?>> -->
<!-- <header class="entry-header text-center"> -->
<!-- <?php //the_title('<h1 class="entry-title">', '</h1>'); 
		?> -->
<!-- </header> -->

<!-- <div class="entry-content clearfix">
		<?php //the_content(); 
		?>
	</div>.entry-content -->

<!-- </article> -->

<!-- 


///////////// Original WP code (end)


 -->



<!-- //////////////////////////// Custom code from here onwards //////////////////////////// -->

<!-- Section 1 (start) -->
<section class="text-center pt-24">
	<!-- Main slider (start) -->
	<div class="swiper-container">
		<!-- Additional required wrapper -->
		<div class="swiper-wrapper">
			<!-- Slides -->
			<div class="swiper-slide">
				<img src="<?php bloginfo('template_directory') ?>/img/Bild2.jpg" width="632px" height="348px" alt="">
			</div>
			<div class="swiper-slide">
				<img src="<?php bloginfo('template_directory') ?>/img/Bild3.jpg" width="632px" height="348px" alt="">
			</div>
			<div class="swiper-slide">
				<img src="<?php bloginfo('template_directory') ?>/img/Bild4.jpg" width="632px" height="348px" alt="">
			</div>
			<!-- ... (use in case of pagination) -->
		</div>
		<!-- If we need pagination -->
		<div class="swiper-pagination"></div>

		<!-- If we need navigation buttons -->
		<!-- <div class="swiper-button-prev"></div> -->
		<!-- <div class="swiper-button-next"></div> -->

		<!-- If we need scrollbar -->
		<div class="swiper-scrollbar"></div>
	</div>
	<!-- Main slider (end) -->

	<!-- Content (start) -->
	<div class="pt-40 pb-24">
		<h2 class="font-bold">
			Himedi meets doctors of first-class hospitals in Korea on behlf of you
		</h2>
		<p class="text-4xl pt-40">
			We lead you to world-best medical staff and medical remedies
		</p>
	</div>
	<!-- Content (end) -->

	<!-- Arrow icon (start) -->
	<img class="mx-auto pt-40 arrowAnimate" src="<?php bloginfo('template_directory') ?>/img/arrow.png" alt="arrow icon">
	<!-- Arrow icon (end) -->

</section>
<!-- Section 1 (end) -->

<!-- Section 2 (start) -->
<section class="mt-20 w-full text-center">
	<!-- Chart (start) -->
	<div class="chartsWrap">
		<img class="mx-auto w-full chart0 active" src="<?php bloginfo('template_directory') ?>/img/chart1.png" alt="">
		<img class="mx-auto w-full chart1" src="<?php bloginfo('template_directory') ?>/img/chart2.png" alt="">
		<img class="mx-auto w-full chart2" src="<?php bloginfo('template_directory') ?>/img/chart3.png" alt="">
	</div>
	<!-- Chart (end) -->

	<!-- Chart Trigger (start) -->
	<div class="pt-32">
		<button class="chartTrig0 border-2 border-dashed border-blue-500 focus:outline-none outline-none rounded-full p-5" style="width: 10em; height:10em">5 major cancers compared to that in the U.S.</button>
		<button class="chartTrig1 border-dashed border-blue-500 focus:outline-none outline-none rounded-full p-5" style="width: 10em; height:10em">No. of hospitals per a thousand people among OECD countries</button>
		<button class="chartTrig2 border-dashed border-blue-500 focus:outline-none outline-none rounded-full p-5" style="width: 10em; height:10em">Korea’s medical service boasts a world-class level.</button>
	</div>
	<!-- Chart Trigger (end) -->

	<!-- Chart Text (start) -->
	<h2 class="p-24">
		Korea’s medical service boasts a world-class level.
	</h2>
	<p class="p-10 text-3xl">
		Every aspect of it—including technology, skills, infrastructures, and prices—is all highly credible.
	</p>
	<!-- Chart Text (end) -->

</section>
<!-- Section 2 (end) -->

<!-- Section 3 (start) -->
<section class="text-center">
	<!-- Content (start) -->
	<img class="w-full" src="<?php bloginfo('template_directory') ?>/img/endCont.jpg" alt="">
	<!-- Content (end) -->

	<!-- Sponsor (start) -->
	<div class="w-full justify-between p-24">
		<div class="flex justify-between">
			<img class="inline" src="<?php bloginfo('template_directory') ?>/img/log1.png" width="90px" height="90px" alt="">
			<img class="inline" src="<?php bloginfo('template_directory') ?>/img/log2.png" width="90px" height="90px" alt="">
			<img class="inline" src="<?php bloginfo('template_directory') ?>/img/log3.png" width="90px" height="90px" alt="">
		</div>
		<div class="flex justify-between">
			<img class="inline" src="<?php bloginfo('template_directory') ?>/img/log4.png" width="90px" height="90px" alt="">
			<img class="inline" src="<?php bloginfo('template_directory') ?>/img/log5.png" width="90px" height="90px" alt="">
			<img class="inline" src="<?php bloginfo('template_directory') ?>/img/log6.png" width="90px" height="90px" alt="">
		</div>
	</div>
	<!-- Sponsor (end) -->

	<!-- Button (start) -->
	<button class="bg-brand p-10 text-white w-1/2 mx-auto mt-10" style="border-radius:10px">
		Check Success Story
	</button>
	<!-- Button (end) -->

</section>
<!-- Section 3 (end) -->

<!-- Section 4 (start) -->
<section class="items-center pt-40">

	<!-- Icon (start) -->
	<img class="mx-auto" src="<?php bloginfo('template_directory') ?>/img/videocall.png" alt="">
	<!-- Icon (end) -->

	<!-- Content (start) -->
	<h3 class="text-center">
		Please leave your contact information and inquiry. An answer will be given within 24 hours.
	</h3>
	<p class="text-center text-3xl text-blue-500">
		* If you have an urget inquiry please leave it via WhatsApp.
	</p>
	<!-- Content (end) -->

	<!-- Divider (start) -->
	<div class="divider mx-auto w-1/3 h-1 bg-gray-500"></div>
	<!-- Divider (end) -->

	<!-- Form (start) -->
	<form class="w-full mt-20">
		<div class="flex items-center mb-6">
			<div class="w-1/3">
				<label class="block font-bold mb-1 mb-0 pr-4" for="inline-full-name">
					<i class="fa fa-check text-blue-500"></i>
					Full Name <span class="text-red-500">*</span>
				</label>
			</div>
			<div class="w-2/3">
				<input class="appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="Jane Doe" required>
			</div>
		</div>
		<div class="flex items-center mb-6">
			<div class="w-1/3">
				<label class="block font-bold mb-1 mb-0 pr-4" for="inline-number">
					<i class="fa fa-check text-blue-500"></i>
					Phone <span class="text-red-500">*</span>
				</label>
			</div>
			<div class="w-2/3">
				<input class="appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-blue-500" id="inline-number" type="number" placeholder="Your phone number" min="1" max="999">
			</div>
		</div>
		<div class="flex items-center mb-6">
			<div class="w-1/3">
				<label class="block font-bold mb-1 mb-0 pr-4" for="inline-email">
					<i class="fa fa-check text-blue-500"></i>
					Email <span class="text-red-500">*</span>
				</label>
			</div>
			<div class="w-2/3">
				<input class="appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-blue-500" id="inline-email" type="email" placeholder="Your email address" required>
			</div>
		</div>
		<div class="flex items-center mb-6">
			<div class="w-1/3">
				<label class="block font-bold mb-1 mb-0 pr-4" for="inline-disease">
					<i class="fa fa-check text-blue-500"></i>
					Disease <span class="text-red-500">*</span>
				</label>
			</div>
			<div class="w-2/3">
				<input class="appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-blue-500" id="inline-disease" type="text" placeholder="Write disease here">
			</div>
		</div>
		<div class="flex items-center mb-6">
			<div class="w-1/3">
				<label class="block font-bold mb-1 mb-0 pr-4">
					<i class="fa fa-check text-blue-500"></i>
					Medical Report: <span class="text-red-500">*</span>
				</label>
			</div>
			<div class="w-2/3">
				<label class="inline font-bold px-5">
					<input class="mr-2" name="mediReport" type="radio" required>
					<span class="text-sm">
						Applicable
					</span>
				</label>
				<label class="inline font-bold">
					<input class="mr-2" name="mediReport" type="radio">
					<span class="text-sm">
						Not Applicable
					</span>
				</label>
			</div>
		</div>
		<div class="items-center mb-6">
			<div class="w-full">
				<label class="block font-bold mb-1 mb-0 pr-4">
					<i class="fa fa-check text-blue-500"></i>
					Major questions to doctors: <span class="text-red-500">*</span>
				</label>
			</div>
			<div class="w-full">
				<textarea class="border border-gray-500 w-full" rows="10"></textarea>
			</div>
		</div>
		<div class="items-center mb-6">
			<div class="w-full">
				<label class="block font-bold mb-1 mb-0 pr-4">
					<i class="fa fa-check text-blue-500"></i>
					Is there any aspect regarding the patient that Doctors need to take note of? <span class="text-red-500">*</span>
				</label>
			</div>
			<div class="w-full">
				<textarea class="border border-gray-500 w-full" rows="10"></textarea>
			</div>
		</div>
		<div class="flex items-center text-center">
			<div class="w-full">
				<button class="bg-brand p-10 text-white w-1/2 mx-auto mt-10" style="border-radius:10px">
					Apply
				</button>
			</div>
		</div>
	</form>
	<!-- Form (end) -->
</section>
<!-- Section 4 (end) -->