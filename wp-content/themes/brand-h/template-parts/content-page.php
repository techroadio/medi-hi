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
	<div class="pt-10">
		<h3 class="font-bold">
			Himedi meets doctors of first-class hospitals in Korea on behlf of you
		</h3>
		<p class="text-3xl">
			We lead you to world-best medical staff and medical remedies
		</p>
	</div>
	<!-- Content (end) -->

	<!-- Arrow icon (start) -->
	<i class="fa fa-long-arrow-down pt-10" style="font-size: 25pt;"></i>
	<!-- Arrow icon (end) -->

</section>
<!-- Section 1 (end) -->

<!-- Section 2 (start) -->
<section class="flex mt-20">
	<!-- Graph 1(start) -->
	<div class="w-1/3">
		<p class="text-4xl">More and more people are visiting</p>
		<p class="text-4xl font-bold">Korea through Himedi.</p>
		<p class="text-2xl text-gray-500">Since 2011</p>
	</div>
	<div class="w-2/3">
		<img src="<?php bloginfo('template_directory') ?>/img/main-graph1.png" alt="">
	</div>
	<!-- Graph 1 (end) -->

</section>
<!-- Section 2 (end) -->

<!-- Arrow icon (start) -->
<div class="text-center mt-20 mb-20">
	<i class="fa fa-long-arrow-down pt-10" style="font-size: 25pt;"></i>
</div>
<!-- Arrow icon (end) -->

<!-- Section 3 (start) -->
<section class="text-center">
	<!-- Content (start) -->
	<div class="endCont text-center text-white">
		<h2 class="pt-64">In addition, Himedi has cared for 4,239 patients while addressing 10,290 inquiries in consultation with Korea’s best medical staff.</h2>
	</div>
	<!-- Content (end) -->

	<!-- Hosp Avail (start) -->
	<div class="mt-10">
		<h4 class="p-10">You can reserve six world-class hospitals and other great hospitals. (World's best 100 hospitals, April 2020 Newsweek)
		</h4>
	</div>
	<!-- Hosp Avail (end) -->

	<!-- Sponsor (start) -->
	<div class="inline-flex">
		<div class="">
			<img class="inline" src="<?php bloginfo('template_directory') ?>/img/log1.png" width="90px" height="90px" alt="">
			<img class="inline" src="<?php bloginfo('template_directory') ?>/img/log2.png" width="90px" height="90px" alt="">
			<img class="inline" src="<?php bloginfo('template_directory') ?>/img/log3.png" width="90px" height="90px" alt="">
		</div>
		<div class="">
			<img class="inline" src="<?php bloginfo('template_directory') ?>/img/log4.png" width="90px" height="90px" alt="">
			<img class="inline" src="<?php bloginfo('template_directory') ?>/img/log5.png" width="90px" height="90px" alt="">
			<img class="inline" src="<?php bloginfo('template_directory') ?>/img/log6.png" width="90px" height="90px" alt="">
		</div>
	</div>
	<!-- Sponsor (end) -->

	<!-- Button (start) -->
	<button class="bg-brand p-10 rounded text-white hover:bg-blue-700 w-1/2 mx-auto mt-10">
		Check Success Story
	</button>
	<!-- Button (end) -->

</section>
<!-- Section 3 (end) -->

<!-- Arrow icon (start) -->
<div class="text-center mt-20 mb-20">
	<i class="fa fa-long-arrow-down pt-10" style="font-size: 25pt;"></i>
</div>
<!-- Arrow icon (end) -->

<!-- Section 4 (start) -->
<section class="items-center">
	<!-- Content (start) -->
	<h3 class="text-center">
		Please leave your contact information and inquiry. An answer will be given within 24 hours.
	</h3>
	<p class="text-center text-3xl text-blue-500">
		* If you have an urget inquiry please leave it via WhatsApp.
	</p>
	<!-- Content (end) -->

	<!-- Form (start) -->
	<form class="w-full mt-20">
		<div class="flex items-center mb-6">
			<div class="w-1/3">
				<label class="block text-gray-500 font-bold mb-1 mb-0 pr-4" for="inline-full-name">
					Full Name
				</label>
			</div>
			<div class="w-2/3">
				<input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="Jane Doe" required>
			</div>
		</div>
		<div class="flex items-center mb-6">
			<div class="w-1/3">
				<label class="block text-gray-500 font-bold mb-1 mb-0 pr-4" for="inline-number">
					Phone
				</label>
			</div>
			<div class="w-2/3">
				<input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-blue-500" id="inline-number" type="number" placeholder="Your phone number" min="1" max="999">
			</div>
		</div>
		<div class="flex items-center mb-6">
			<div class="w-1/3">
				<label class="block text-gray-500 font-bold mb-1 mb-0 pr-4" for="inline-email">
					Email
				</label>
			</div>
			<div class="w-2/3">
				<input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-blue-500" id="inline-email" type="email" placeholder="Your email address" required>
			</div>
		</div>
		<div class="flex items-center mb-6">
			<div class="w-1/3">
				<label class="block text-gray-500 font-bold mb-1 mb-0 pr-4" for="inline-disease">
					Disease
				</label>
			</div>
			<div class="w-2/3">
				<input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-blue-500" id="inline-disease" type="text" placeholder="Write disease here">
			</div>
		</div>
		<div class="flex items-center mb-6">
			<div class="w-1/3">
				<label class="block text-gray-500 font-bold mb-1 mb-0 pr-4">
					Medical Report:
				</label>
			</div>
			<div class="w-2/3">
				<label class=" block text-gray-500 font-bold">
					<input class="mr-2" name="mediReport" type="radio" required>
					<span class="text-sm">
						Applicable
					</span>
				</label>
				<label class=" block text-gray-500 font-bold">
					<input class="mr-2" name="mediReport" type="radio">
					<span class="text-sm">
						Not Applicable
					</span>
				</label>
			</div>
		</div>
		<div class="flex items-center mb-6">
			<div class="w-1/3">
				<label class="block text-gray-500 font-bold mb-1 mb-0 pr-4">
					Major questions to doctors:
				</label>
			</div>
			<div class="w-2/3">
				<textarea class="border border-gray-500 w-full" rows="10"></textarea>
			</div>
		</div>
		<div class="flex items-center mb-6">
			<div class="w-1/3">
				<label class="block text-gray-500 font-bold mb-1 mb-0 pr-4">
					Is there any aspect regarding the patient that Doctors need to take note of?
				</label>
			</div>
			<div class="w-2/3">
				<textarea class="border border-gray-500 w-full" rows="10"></textarea>
			</div>
		</div>
		<div class="flex items-center text-center">
			<div class="w-full">
				<button class="bg-brand hover:bg-blue-700 focus:outline-none text-white font-bold py-2 px-4 rounded w-1/2">
					Send
				</button>
			</div>
		</div>
	</form>
	<!-- Form (end) -->
</section>
<!-- Section 4 (end) -->