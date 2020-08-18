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
<section class="pt-32 text-justify">
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
	<div class="mt-32 mb-24 p-10">
		<h2 class="font-bold">
			Himedi meets doctors of first-class hospitals in Korea on behlf of you
		</h2>
		<p class="text-4xl pt-40 text-gray-600">
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
	<div class="chartsWrap bg-gray-100 text-justify">
		<div class="chart0 active p-10">
			<p class="text-3xl font-bold">
				The survival rate of patients with one of the 5 major cancers compared to that in the U.S.
			</p>
			<img class="mx-auto w-full" src="<?php bloginfo('template_directory') ?>/img/chart1.png" alt="">
			<div class="flex justify-between p-5 text-gray-600">
				<span>Gastric Cancer</span>
				<span>Colon Cancer</span>
				<span>Breast Cancer</span>
				<span>Liver Cancer</span>
				<span>Cervical Cancer</span>
			</div>
		</div>
		<div class="chart1">
			<p class="text-3xl font-bold p-10">
				No. of hospitals per a thousand people among OECD countries
			</p>
			<img class="mx-auto" src="<?php bloginfo('template_directory') ?>/img/chart2.svg" alt="">
			<div class="flex justify-between text-gray-600">
				<span class="inline-block" style="transform: rotate(-45deg);">South Korea</span>
				<span class="inline-block" style="transform: rotate(-45deg);">Japan</span>
				<span class="inline-block" style="transform: rotate(-45deg);">Australia</span>
				<span class="inline-block" style="transform: rotate(-45deg);">Finland</span>
				<span class="inline-block" style="transform: rotate(-45deg);">France</span>
				<span class="inline-block" style="transform: rotate(-45deg);">Germany</span>
				<span class="inline-block" style="transform: rotate(-45deg);">Mexico</span>
				<span class="inline-block" style="transform: rotate(-45deg);">Switzerland</span>
				<span class="inline-block" style="transform: rotate(-45deg);">Czech Republic</span>
				<span class="inline-block" style="transform: rotate(-45deg);">Canada</span>
				<span class="inline-block" style="transform: rotate(-45deg);">Chile</span>
				<span class="inline-block" style="transform: rotate(-45deg);">U.S.</span>
				<span class="inline-block" style="transform: rotate(-45deg);">Hungary</span>
			</div>
		</div>
		<div class="chart2">
			<p class="text-3xl font-bold p-10">
				Medical expenses for serious illnesses in Germany VS Korea
			</p>
			<img class="mx-auto w-full" src="<?php bloginfo('template_directory') ?>/img/chart3.svg" alt="">
			<div class="flex justify-center text-gray-600 pt-5 pb-5">
				<span class="w-1/2">Hematologic malignancy</span>
				<span>Brain cancer</span>
			</div>
		</div>
	</div>
	<!-- Chart (end) -->

	<!-- Chart Trigger (start) -->
	<div class="pt-32 flex justify-between px-10 py-10">
		<button class="chartTrig0 border-2 border-dashed border-blue-500 shadow-md focus:outline-none outline-none rounded-full p-5" style="width: 10em; height:10em; text-shadow: 0px 2px 5px #777">5 major cancers compared to that in the U.S.</button>
		<button class="chartTrig1 border-dashed border-blue-500 shadow-md focus:outline-none outline-none rounded-full p-5" style="width: 10em; height:10em; text-shadow: 0px 2px 5px #777">No. of hospitals per a thousand people among OECD countries</button>
		<button class="chartTrig2 border-dashed border-blue-500 shadow-md focus:outline-none outline-none rounded-full p-5" style="width: 10em; height:10em; text-shadow: 0px 2px 5px #777">Korea’s medical service boasts a world-class level.</button>
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
	<div class="endCont flex">
		<p class="h-full overlay text-white font-bold text-6xl p-5 pt-56">
			In addition, Himedi has cared for 4,239 patients while addressing 10,290 inquiries in consultation with Korea’s best medical staff.
		</p>
	</div>
	<p class="pt-24 text-3xl">
		You can reserve six world-class hospitals and other great hospitals.<br>(World's best 100 hospitals, April 2020 Newsweek)
	</p>
	<!-- Content (end) -->

	<!-- Sponsor (start) -->
	<div class="w-full pt-10 px-32 py-32">
		<div class="flex justify-between items-center content-center pb-5" style="height: 63.8px;">
			<img class="inline-block" src="<?php bloginfo('template_directory') ?>/img/log1.png" width="73px" alt="asan">
			<img class="inline-block" src="<?php bloginfo('template_directory') ?>/img/log2.png" width="73px" alt="samsung">
			<img class="inline-block" src="<?php bloginfo('template_directory') ?>/img/log6.png" width="63.8px" alt="yonsel">

		</div>
		<div class="flex justify-between items-center content-center pt-5" style="height: 63.8px;">
			<img class="inline" src="<?php bloginfo('template_directory') ?>/img/log4.png" width="73px" alt="medicine">
			<img class="inline" src="<?php bloginfo('template_directory') ?>/img/log5.png" width="73px" alt="catholic">
			<img class="inline" src="<?php bloginfo('template_directory') ?>/img/log3.png" width="73px" alt="snuh">
		</div>
	</div>
	<!-- Sponsor (end) -->

	<!-- Button (start) -->
	<button class="bg-brand p-10 text-white w-1/2 mx-auto mt-10" style="border-radius:10px; font-size:18px">
		Check Success Story
	</button>
	<!-- Button (end) -->

</section>
<!-- Section 3 (end) -->

<!-- Section 4 (start) -->
<section class="items-center pt-40">

	<!-- Icon (start) -->
	<img class="mx-auto mb-24" src="<?php bloginfo('template_directory') ?>/img/videocall.png" width="46px" height="46px" alt="">
	<!-- Icon (end) -->

	<!-- Content (start) -->
	<h3 class="text-center p-10">
		Please leave your contact information and inquiry. An answer will be given within 24 hours.
	</h3>
	<p class="text-center text-4xl text-blue-500 p-10">
		* If you have an urget inquiry please leave it via WhatsApp.
	</p>
	<!-- Content (end) -->

	<!-- Divider (start) -->
	<div class="divider mx-auto w-1/3 h-1 bg-gray-500"></div>
	<!-- Divider (end) -->

	<!-- Form (start) -->
	<form class="w-full mt-20 text-3xl p-16">
		<div class="flex items-center mb-10">
			<div class="w-1/3">
				<label class="block font-bold mb-1 mb-0 pr-4" for="inline-full-name">
					<img class="inline pr-2" src="<?php bloginfo('template_directory') ?>/img/check.svg" alt="">
					Full Name <span class="text-red-500">*</span>
				</label>
			</div>
			<div class="w-2/3">
				<input class="appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="Jane Doe" required>
			</div>
		</div>
		<div class="flex items-center mb-10">
			<div class="w-1/3">
				<label class="block font-bold mb-1 mb-0 pr-4" for="inline-number">
					<img class="inline pr-2" src="<?php bloginfo('template_directory') ?>/img/check.svg" alt="">
					Phone <span class="text-red-500">*</span>
				</label>
			</div>
			<div class="w-2/3 flex justify-between">
				<select class="w-1/3 border border-gray-200 text-gray-500 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
					<?php include('dialCodes.html'); ?>
				</select>
				<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
					<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
						<path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
				</div>
				<input class="appearance-none border-2 border-gray-200 rounded-lg py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-blue-500" id="inline-number" type="number" placeholder="Your phone number" min="1">
			</div>
		</div>
		<div class="flex items-center mb-10">
			<div class="w-1/3">
				<label class="block font-bold mb-1 mb-0 pr-4" for="inline-email">
					<img class="inline pr-2" src="<?php bloginfo('template_directory') ?>/img/check.svg" alt="">
					Email <span class="text-red-500">*</span>
				</label>
			</div>
			<div class="w-2/3">
				<input class="appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-blue-500" id="inline-email" type="email" placeholder="Your email address" required>
			</div>
		</div>
		<div class="flex items-center mb-10">
			<div class="w-1/3">
				<label class="block font-bold mb-1 mb-0 pr-4" for="inline-disease">
					<img class="inline pr-2" src="<?php bloginfo('template_directory') ?>/img/check.svg" alt="">
					Disease <span class="text-red-500">*</span>
				</label>
			</div>
			<div class="w-2/3">
				<input class="appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-blue-500" id="inline-disease" type="text" placeholder="Write disease here">
			</div>
		</div>
		<div class="flex items-center mb-10">
			<div class="w-1/3">
				<label class="block font-bold mb-1 mb-0 pr-4">
					<img class="inline pr-2" src="<?php bloginfo('template_directory') ?>/img/check.svg" alt="">
					Medical Report: <span class="text-red-500">*</span>
				</label>
			</div>
			<div class="w-2/3 flex justify-between">
				<label class="inline font-bold px-5">
					<input class="mr-2" name="mediReport" type="radio" required>
					<span class="text-2xl">
						Applicable
					</span>
				</label>
				<label class="inline font-bold">
					<input class="mr-2" name="mediReport" type="radio">
					<span class="text-2xl">
						Not Applicable
					</span>
				</label>
			</div>
		</div>
		<div class="items-center mb-10">
			<div class="w-full">
				<label class="block font-bold mb-1 mb-0 pr-4">
					<img class="inline pr-2" src="<?php bloginfo('template_directory') ?>/img/check.svg" alt="">
					Major questions to doctors: <span class="text-red-500">*</span>
				</label>
			</div>
			<div class="w-full p-10">
				<textarea class="border border-gray-500 w-full" rows="10"></textarea>
			</div>
		</div>
		<div class="items-center mb-10">
			<div class="w-full">
				<label class="block font-bold mb-1 mb-0 pr-4">
					<img class="inline pr-2" src="<?php bloginfo('template_directory') ?>/img/check.svg" alt="">
					Is there any aspect regarding the patient that Doctors need to take note of? <span class="text-red-500">*</span>
				</label>
			</div>
			<div class="w-full p-10">
				<textarea class="border border-gray-500 w-full" rows="10"></textarea>
			</div>
		</div>

		<!-- Consent (start) -->
		<div class="text-right p-10">
			<span>Consent to collect personal data</span>
			<input type="checkbox">
		</div>
		<!-- Consent (end) -->

		<div class="flex items-center text-center">
			<div class="w-full">
				<button class="applyBtn bg-brand p-10 text-white w-1/2 mx-auto mt-10">
					Apply
				</button>
			</div>
		</div>
	</form>
	<!-- Form (end) -->
</section>
<!-- Section 4 (end) -->