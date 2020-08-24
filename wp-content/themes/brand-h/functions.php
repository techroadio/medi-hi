<?php

require get_template_directory() . '/inc/vendor/Mobile_Detect.php';
require get_template_directory() . '/inc/cleanup.php';
require get_template_directory() . '/inc/function-admin.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/theme-support.php';
require get_template_directory() . '/inc/custom-post-type.php';
require get_template_directory() . '/inc/walker.php';
require get_template_directory() . '/inc/ajax.php';
require get_template_directory() . '/inc/shortcodes.php';
require get_template_directory() . '/inc/widgets.php';

// Shortcode for homepage content

add_shortcode('home-cont', 'home_cont');
function home_cont()
{
    return '
    <!-- Section 1 (start) -->
    <section>
        <!-- Main slider (start) -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="' . get_stylesheet_directory_uri('template_url') . '/img/Bild2.jpg" width="632px" height="348px" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="' . get_stylesheet_directory_uri('template_url') . '/img/Bild3.jpg" width="632px" height="348px" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="' . get_stylesheet_directory_uri('template_url') . '/img/Bild4.jpg" width="632px" height="348px" alt="">
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
        <div class="mt-32 mb-24 p-5">
            <h2 class="font-bold">
                Himedi meets doctors of first-class hospitals in Korea on behlf of you
            </h2>
            <p class="text-4xl pt-40 text-gray-600">
                We lead you to world-best medical staff and medical remedies
            </p>
        </div>
        <!-- Content (end) -->
    
        <!-- Arrow icon (start) -->
        <img class="mx-auto pt-40 arrowAnimate" src="' . get_stylesheet_directory_uri('template_url') . '/img/arrow.png" alt="arrow icon">
        <!-- Arrow icon (end) -->
    
    </section>
    <!-- Section 1 (end) -->
    <!-- Section 2 (start) -->
<section class="mt-20 w-full text-center">
	<!-- Chart (start) -->
	<div class="chartsWrap bg-gray-100 text-justify">
		<div class="chart0 active sm:p-10 p-5">
			<p class="sm:text-3xl text-2xl font-bold">
				The survival rate of patients with one of the 5 major cancers compared to that in the U.S.
			</p>
			<img class="mx-auto w-full" src="' . get_stylesheet_directory_uri('template_url') . '/img/chart1.png" alt="">
			<div class="flex justify-between sm:text-3xl text-xl text-gray-600">
				<span>Gastric Cancer</span>
				<span>Colon Cancer</span>
				<span>Breast Cancer</span>
				<span>Liver Cancer</span>
				<span>Cervical Cancer</span>
			</div>
		</div>
		<div class="chart1">
			<p class="sm:text-3xl text-2xl font-bold sm:p-10 p-5">
				No. of hospitals per a thousand people among OECD countries
			</p>
			<img class="mx-auto" src="' . get_stylesheet_directory_uri('template_url') . '/img/chart2.svg" alt="">
		</div>
		<div class="chart2">
			<p class="sm:text-3xl text-2xl font-bold sm:p-10 p-5">
				Medical expenses for serious illnesses in Germany VS Korea
			</p>
			<img class="mx-auto w-full" src="' . get_stylesheet_directory_uri('template_url') . '/img/chart3.svg" alt="">
			<div class="flex text-center text-gray-600 pt-5 pb-5 sm:px-10 px-0 sm:text-2xl text-sm">
				<span class="w-1/2 pl-20">Hematologic malignancy</span>
				<span class="w-1/2">Brain cancer</span>
			</div>
		</div>
	</div>
	<!-- Chart (end) -->

	<!-- Chart Trigger (start) -->
	<div class="pt-32 flex justify-between px-10 py-10 chartTrigCont">
		<button class="chartTrig0 border-2 border-dashed border-blue-500 shadow-md focus:outline-none outline-none rounded-full p-5">5 major cancers compared to that in the U.S.</button>
		<button class="chartTrig1 border-dashed border-blue-500 focus:outline-none outline-none rounded-full p-5">No. of hospitals per a thousand people among OECD countries</button>
		<button class="chartTrig2 border-dashed border-blue-500 focus:outline-none outline-none rounded-full p-5">Korea’s medical service boasts a world-class level.</button>
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
		<p class="h-full overlay text-white font-bold sm:text-5xl text-4xl p-5 sm:pt-56 pt-20">
			In addition, Himedi has cared for 4,239 patients while addressing 10,290 inquiries in consultation with Korea’s best medical staff.
		</p>
	</div>
	<p class="pt-24 text-3xl">
		You can reserve six world-class hospitals and other great hospitals.<br>(World\'s best 100 hospitals, April 2020 Newsweek)
	</p>
	<!-- Content (end) -->

	<!-- Sponsor (start) -->
	<div class="w-full pt-10 sm:px-32 sm:py-32">
		<div class="flex justify-between items-center content-center pb-5" style="height: 63.8px;">
			<img class="inline-block" src="' . get_stylesheet_directory_uri('template_url') . '/img/log1.png" width="73px" alt="asan">
			<img class="inline-block" src="' . get_stylesheet_directory_uri('template_url') . '/img/log2.png" width="73px" alt="samsung">
			<img class="inline-block" src="' . get_stylesheet_directory_uri('template_url') . '/img/log6.png" width="63.8px" alt="yonsel">

		</div>
		<div class="flex justify-between items-center content-center pt-5" style="height: 63.8px;">
			<img class="inline" src="' . get_stylesheet_directory_uri('template_url') . '/img/log4.png" width="73px" alt="medicine">
			<img class="inline" src="' . get_stylesheet_directory_uri('template_url') . '/img/log5.png" width="73px" alt="catholic">
			<img class="inline" src="' . get_stylesheet_directory_uri('template_url') . '/img/log3.png" width="73px" alt="snuh">
		</div>
	</div>
	<!-- Sponsor (end) -->

	<!-- Button (start) -->
	<button class="bg-brand p-5 text-white font-normal sm:w-1/3 mx-auto mt-10" style="border-radius:10px; font-size:18px">
		Check Success Story
	</button>
	<!-- Button (end) -->

</section>
<!-- Section 3 (end) -->

<!-- Section 4 (start) -->
<section class="items-center pt-40">

	<!-- Icon (start) -->
	<img class="mx-auto mb-24" src="' . get_stylesheet_directory_uri('template_url') . '/img/videocall.png" width="46px" height="46px" alt="">
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

</section>
<!-- Section 4 (end) -->
    ';
};
