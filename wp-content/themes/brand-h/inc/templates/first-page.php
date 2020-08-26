<?php

/*
	
@package sunsettheme
-- Page Template

*/

?>
<article id="post-<?php the_ID();?>" <?php post_class();?>>
 <!-- Section 1 (start) -->
 <section class="text-justify">
        <!-- Main slider (start) -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide object-fit-slide">
					        <img src="<?php bloginfo('template_directory') ?>/img/Bild2.jpg" alt="" >
                </div>
                <div class="swiper-slide object-fit-slide">
				          <img src="<?php bloginfo('template_directory') ?>/img/Bild3.jpg" >
                </div>
                <div class="swiper-slide object-fit-slide">
				          <img src="<?php bloginfo('template_directory') ?>/img/Bild4.jpg">
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
        <div class="lg:mt-10 mt-10 lg:mb-24 mb-0 lg:p-10 p-2 px-12">
            <h2 class="title-1" >
				      Himedi meets doctors of <br class="lg:hidden"><b>first-class</b> hospitals in Korea <br class="br-hidden">on behalf of you.
            </h2>
            <p class="pt-4 sub-title-1" >
				      We lead you to world-best<br class="lg:hidden"> medical staff and best remedies.
            </p>
        </div>
        <!-- Content (end) -->
    
        <!-- Arrow icon (start) -->
        <img class="mx-auto lg:pt-0 pt-10 arrowAnimate" src="<?php bloginfo('template_directory') ?>/img/arrow.png" alt="arrow icon">
        <!-- Arrow icon (end) -->
    
    </section>
    <!-- Section 1 (end) -->
	<!-- Section1-1 (start) -->
	  <!-- Content (start) -->
	  <div class="mt-40 w-full">
	    <img src="<?php bloginfo('template_directory') ?>/img/section1-1.jpg" alt="">
    </div>
    <div class="lg:mt-10 mt-10 lg:mb-24 mb-0 lg:p-10 p-2 px-12">
        <h2 class="title-1" >
        Just send us your medical records. You do not need to come to Korea.
        </h2>
        <p class="pt-4 sub-title-1" >
        Send your relevant medical records such as treatment history, image, etc.
        </p>
    </div>
		<!-- Content (end) -->
		
		<!-- Arrow icon (start) -->
        <img class="mx-auto lg:pt-0 pt-40 pb-40 arrowAnimate" src="<?php bloginfo('template_directory') ?>/img/arrow.png" alt="arrow icon">
		<!-- Arrow icon (end) -->
		
	<!-- Section1-1 (end) -->
    <!-- Section 2 (start) -->

<section class="mt-20 w-full text-center">
  <!-- Chart By Harsh -->
  
</section>

<!-- Old Chart -->
<section class="mt-20 w-full text-center">

	<!-- Chart (start) -->
  
	<div class="chartsWrap bg-gray-100 text-justify">
		<div class="chart0 active lg:p-10 p-0">
			<p class="pt-4 px-8 text-gray-700 text-center font-size-24 font-roboto leading-none" style="font-size:20px">
				The survival rate of patients with one of the 5 major cancers compared <br class="lg:hidden block">to that in the U.S.
			</p>
			<img class="mx-auto w-full pl-4 pr-8" src="<?php bloginfo('template_directory') ?>/img/chart1.png" alt="">
			<div class="flex justify-between py-5 pr-16 pl-8 text-gray-600 text-xs">
				<span>Gastric Cancer</span>
				<span>Colon Cancer</span>
				<span>Breast Cancer</span>
				<span>Liver Cancer</span>
				<span>Cervical Cancer</span>
			</div>
		</div>
		<div class="chart1">
			<p class="pt-4 px-8 text-gray-700 pt-8 text-center font-size-24 font-noto-regular leading-none h-32" style="font-size:20px;height:80px">
				No. of hospitals per a thousand people among OECD countries
			</p>
			<img class="mx-auto w-full pt-5 pr-0 pl-4" src="<?php bloginfo('template_directory') ?>/img/chart2.svg" alt="">
			<div class="flex justify-between py-5 pr-0 pl-0 text-gray-600 text-xs">
				<!-- <span class="inline-block" style="transform: rotate(-45deg);">South Korea</span>
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
				<span class="inline-block" style="transform: rotate(-45deg);">Hungary</span> -->
			</div>
		</div>
		<div class="chart2">
			<p class="pt-4 px-8 text-gray-700 text-center font-size-24 ont-noto-regular leading-none" style="font-size:20px;background-color:#f2f3f5">
				Medical expenses for serious illnesses in Germany VS Korea
			</p>
			<img class="mx-auto w-full mt-10" src="<?php bloginfo('template_directory') ?>/img/chart3.svg" alt="">
			<div class="flex justify-center pt-5 pb-5 text-gray-600 text-xs">
				<span class="w-1/2">Hematologic malignancy</span>
				<span>Brain cancer</span>
			</div>
		</div>
	</div>
	<!-- Chart (end) -->

	<!-- Chart Trigger (start) -->
	<div class="lg:pt-32 pt-10 flex justify-between px-10 py-10">
		<button class="chartTrig0 border-2 border-dashed border-blue-500 shadow-md focus:outline-none outline-none rounded-full p-5 mr-3 text-lg leading-tight" style="width: 10em; height:10em; text-shadow: 0px 2px 5px #777">5 major cancers compared to that in the U.S.</button>
		<button class="chartTrig1 border-dashed border-blue-500 shadow-md focus:outline-none outline-none rounded-full p-5 text-lg mr-3 leading-tight" style="width: 10em; height:10em; text-shadow: 0px 2px 5px #777">No. of hospitals per a thousand people among OECD countries</button>
		<button class="chartTrig2 border-dashed border-blue-500 shadow-md focus:outline-none outline-none rounded-full p-5 text-lg leading-tight" style="width: 10em; height:10em; text-shadow: 0px 2px 5px #777">Korea’s medical service boasts a world-class level.</button>
	</div>
	<!-- Chart Trigger (end) -->

  <!-- Chart Text (start) -->
  <div class="lg:mt-10 mt-10 lg:mb-24 mb-0 lg:p-10 p-2 px-12">
        <h2 class="title-1" >
        Korea’s medical service boasts a world-class level.
        </h2>
        <p class="pt-4 sub-title-1" >
        Every aspect of it—including technology, skills, infrastructures, <br class="lg:hidden block">and prices—is all highly credible.
        </p>
    </div>

	<!-- Chart Text (end) -->

	<!-- Arrow icon (start) -->
	<img class="mx-auto lg:pt-10 pt-32 pb-30 lg:mt-20 mb-40 lg:mb-40 arrowAnimate" src="<?php bloginfo('template_directory') ?>/img/arrow.png" alt="arrow icon">
	<!-- Arrow icon (end) -->		
</section>
<!-- Section 2 (end) -->

<!-- Section 3 (start) -->
<section class="text-center">
	<!-- Content (start) -->
	<div class="relative">
		<div class="bg-black w-full h-full absolute inset-0 opacity-50"></div>
		<img src="<?php bloginfo('template_directory') ?>/img/endCont.jpg">
		<p class="title-1-w-c absolute inset-0 h-full text-5xl px-5 contnet-addtional">
			In addition, <b class="font-extrabold">Himedi</b> has cared for <b class="font-extrabold">4,239</b> patients while addressing <b class="font-extrabold">10,290</b> inquiries in consultation with Korea’s best medical staff.
		</p>
	</div>
	<p class="lg:pt-24 pt-10 px-10 sub-title-1-c">
		You can reserve six world-class hospitals and other great hospitals.<br>(World's best 100 hospitals, April 2020 Newsweek)
	</p>
	<!-- Content (end) -->

	<!-- Sponsor (start) -->
	<div class="w-full pt-10 lg:px-32 px-10 lg:py-32 py-10">
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
	<a href="/interview/">
    <button class="button-1 px-5 py-5 lg:w-1/2 w-12/12 lg:px-0 mt-10  hover:bg-blue-500 " >
		Check Success Story
	  </button>
  </a>
	<!-- Button (end) -->

</section>
<!-- Section 3 (end) -->

<!-- Section 3-1 (start) -->
<section class="text-center mt-40 pt-20" style="background-color:#f2f3f5">
  <!-- Content (start) -->

    <h2 class="px-5 mb-10 title-3">
      Get a personalized consultation suitable to you
    </h2>	
    <!-- <button class="bg-brand px-3 py-3 text-white w-48 mx-auto mt-10 mb-10 ont-noto-regular font-size-24" style="border-radius:30px;">
      01
    </button> -->
    <div class="text-4xl">01</div>
    <div class="w-full flex itmes-center justify-center items-start mt-3" >
        <svg class="h-16 w-16" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="hospital-user" class="svg-inline--fa fa-hospital-user fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentcolor" d="M148 192h-40a12 12 0 0 0-12 12v40a12 12 0 0 0 12 12h40a12 12 0 0 0 12-12v-40a12 12 0 0 0-12-12zm0 96h-40a12 12 0 0 0-12 12v40a12 12 0 0 0 12 12h40a12 12 0 0 0 12-12v-40a12 12 0 0 0-12-12zm0 96h-40a12 12 0 0 0-12 12v40a12 12 0 0 0 12 12h40a12 12 0 0 0 12-12v-40a12 12 0 0 0-12-12zm96-96h-40a12 12 0 0 0-12 12v40a12 12 0 0 0 12 12h40a12 12 0 0 0 12-12v-40a12 12 0 0 0-12-12zm0-96h-40a12 12 0 0 0-12 12v40a12 12 0 0 0 12 12h40a12 12 0 0 0 12-12v-40a12 12 0 0 0-12-12zm0 192h-40a12 12 0 0 0-12 12v40a12 12 0 0 0 12 12h40a12 12 0 0 0 12-12v-40a12 12 0 0 0-12-12zm-52-256h26a6 6 0 0 0 6-6v-20a6 6 0 0 0-6-6h-26V70a6 6 0 0 0-6-6h-20a6 6 0 0 0-6 6v26h-26a6 6 0 0 0-6 6v20a6 6 0 0 0 6 6h26v26a6 6 0 0 0 6 6h20a6 6 0 0 0 6-6zm288 192a96 96 0 1 0-96-96 96 96 0 0 0 96 96zm0-160a64 64 0 1 1-64 64 64.07 64.07 0 0 1 64-64zm143.69 221.13C606.44 355.5 577 342 546.79 342 519 342 512 352 480 352s-38.95-10-66.79-10c-30.23 0-59.65 13.48-76.9 39.11A95.5 95.5 0 0 0 320 434.67V472a40 40 0 0 0 40 40h240a40 40 0 0 0 40-40v-37.33a95.5 95.5 0 0 0-16.31-53.54zM608 472a8 8 0 0 1-8 8H360a8 8 0 0 1-8-8v-37.33A63.61 63.61 0 0 1 362.85 399c10.53-15.64 29.35-25 50.36-25 21.8 0 30 10 66.79 10s45-10 66.79-10c21 0 39.83 9.34 50.36 25A63.61 63.61 0 0 1 608 434.67zM320 128v222.31a119.48 119.48 0 0 1 32-25V128a32 32 0 0 0-32-32h-16V32a32 32 0 0 0-32-32H80a32 32 0 0 0-32 32v64H32a32 32 0 0 0-32 32v376a8 8 0 0 0 8 8h16a8 8 0 0 0 8-8V128h48V32h192v96z"></path></svg>
      </div>
    <div class=" px-8 sub-title-3">
      <div class="mb-5">
        <div class="mb-5 px-3 pt-3">
        Consulting directly with a doctor on behalf of you
      </div>
        <div class="text-xl leading-none" style="">
        *Available only for patients <br class="lg:hidden">already with medical records
      </div>
      </div>
    </div>
  
    <div class="text-4xl mt-10">02</div>
    <div class="w-full flex itmes-center justify-center items-start mt-3" >
    <svg class="h-16 w-16" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="user-md-chat" class="svg-inline--fa fa-user-md-chat fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentcolor" d="M512 0c-70.69 0-128 50.17-128 112 0 28.76 12.75 54.72 33.11 74.55a312.08 312.08 0 0 1-31.29 55.37 9.86 9.86 0 0 0-1.25 9.07c1.09 3.13 3.43 5 6.1 5 39.85 0 72.35-17.13 95.23-34.36A146 146 0 0 0 512 224c70.7 0 128-50.14 128-112S582.7 0 512 0zm0 192a114.76 114.76 0 0 1-20.38-1.84l-13.78-2.5-11.18 8.42a155.47 155.47 0 0 1-26.13 16.07c2-4.08 4-8.35 5.91-12.79l8.87-20.28-15.87-15.45C428.75 153.24 416 135.83 416 112c0-44.11 43.06-80 96-80s96 35.89 96 80-43.06 80-96 80zm-194.31 96.1c-33.8-1-44.3 15.9-93.7 15.9s-59.79-16.9-93.59-15.9A134.33 134.33 0 0 0 0 422.4V504a8 8 0 0 0 8 8h16a8 8 0 0 0 8-8v-81.6c0-54.3 42.6-98.4 96-101.8v81.7a56 56 0 1 0 32 0v-76.9a200.3 200.3 0 0 0 128 0v68.8c-28.2 7.5-48 34.5-48 64.6V488a16.06 16.06 0 0 0 4.7 11.3l10.3 10.3a8 8 0 0 0 11.3 0l11.3-11.3a8 8 0 0 0 0-11.3l-5.7-5.7V456a32.14 32.14 0 0 1 37.4-31.6c15.7 2.6 26.6 17.4 26.6 33.3v23.6l-5.7 5.7a8 8 0 0 0 0 11.3l11.3 11.3a8 8 0 0 0 11.3 0l10.3-10.3a16.06 16.06 0 0 0 4.7-11.3v-32a63.8 63.8 0 0 0-48-61.6v-73.7c53.4 3.4 96 47.5 96 101.8V504a8 8 0 0 0 8 8h16a8 8 0 0 0 8-8v-81.6a134 134 0 0 0-130.11-134.3zM168 456a24 24 0 1 1-24-24 24.06 24.06 0 0 1 24 24zm56-200A128 128 0 1 0 96 128a128 128 0 0 0 128 128zm0-224a96 96 0 1 1-96 96 96.15 96.15 0 0 1 96-96z"></path></svg>
      </div>
    <div class=" px-8 sub-title-3">
      <div class="mb-5">
        <div class="mb-5 px-3 text-center pt-3">
          Telemedicine consultation
        </div>
        <div class="text-xl leading-none" style="">
        *Available for new patients as well
        </div>
      </div>
    </div>

    <div class="text-4xl mt-10">03</div>
    <div class="w-full flex itmes-center justify-center items-start mt-3" >
    <svg class="h-16 w-16" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="notes-medical" class="svg-inline--fa fa-notes-medical fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentcolor" d="M336 64h-88.6c.4-2.6.6-5.3.6-8 0-30.9-25.1-56-56-56s-56 25.1-56 56c0 2.7.2 5.4.6 8H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM192 32c13.3 0 24 10.7 24 24s-10.7 24-24 24-24-10.7-24-24 10.7-24 24-24zm160 432c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16h48v20c0 6.6 5.4 12 12 12h168c6.6 0 12-5.4 12-12V96h48c8.8 0 16 7.2 16 16v352zm-72-176h-56v-56c0-4.4-3.6-8-8-8h-48c-4.4 0-8 3.6-8 8v56h-56c-4.4 0-8 3.6-8 8v48c0 4.4 3.6 8 8 8h56v56c0 4.4 3.6 8 8 8h48c4.4 0 8-3.6 8-8v-56h56c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8z"></path></svg>
      </div>
    <div class=" px-8 sub-title-3">
      <div class="mb-5">
        <div class="mb-5 px-3 text-center pt-3">
          Request for the 2nd opinion
        </div>
        <div class="text-xl leading-none" style="">
          *Available for new patients as well
        </div>
      </div>
    </div>

	<!-- <button class="bg-brand px-3 py-3 text-white w-48 mx-auto mt-10 mb-10 ont-noto-regular font-size-24" style="border-radius:30px;">
		02
	</button>
	<div class="flex px-8">
		<div class="lg:h-32 h-20 lg:w-32 w-20 flex itmes-center justify-center items-start mt-3" style="color:blue">
		<img src="<?php bloginfo('template_directory') ?>/img/user-md-chat-light.svg" >
		</div>
    <div class="mb-5 w-full">
	<div class="text-white mb-5 font-bold text-center px-3 font-size-24 ont-noto-regular leading-none">
		  Telemedicine consultation
		</div>
		<div class="text-xl leading-none" style="">
			  *Available for new patients as well
		</div>
    </div>
	</div>

	<button class="bg-brand px-3 py-3 text-white w-48 mx-auto mt-10 mb-10 ont-noto-regular font-size-24" style="border-radius:30px;">
		03
	</button>
	<div class="flex px-8">
    <div class="lg:h-32 h-20 lg:w-32 w-20 flex itmes-center justify-center items-start mt-3" style="color:blue">
      <img src="<?php bloginfo('template_directory') ?>/img/notes-medical-light.svg" >
    </div>
    <div class="mb-5 w-full">
		<div class="text-white mb-5 font-bold text-center px-3 font-size-24 ont-noto-regular leading-none">
		  Request for the 2nd opinion
		</div>
		<div class="text-xl leading-none" style="">
		  *Available for new patients as well
		</div>
    </div>
	</div> -->
  <!-- Button (start) -->
  <div class="flex justify-center">
  
    <!-- <button class="bg-white px-5 py-5 text-blue-500 w-56 mx-auto mt-10 mb-24" style="border-radius:10px; font-size:18px"> -->
	<a href="/inquiry" class="w-full">
    <button class="bg-white text-blue-500 text-white text-white lg:w-1/2 w-5/12 mx-auto px-5 py-5 mb-40 lg:px-0 mt-10 text-xs hover:bg-blue-500 hover:text-white" style="border-radius:10px; font-size:18px">
      Inquiry
    </button>
  </a>
  </div>
	<!-- Button (end) -->

	<!-- Content (end) -->
</section>
<!-- Section 3-1 (end) -->
<!-- Section 3-2 (start) -->
<div class="mt-20 px-5">
  <div class="flex justify-center">
    <div class="border-gray-700 border w-16 h-16 rounded-full py-2 px-2 flex items-center justify-center text-gray-700">
      <svg class="w-8 h-8"aria-hidden="true" focusable="false" data-prefix="fal" data-icon="user-nurse" class="svg-inline--fa fa-user-nurse fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M319.41,318,224,413.39,128.59,318C57.09,321.09,0,379.59,0,451.8A58.23,58.23,0,0,0,58.2,510H389.8A58.23,58.23,0,0,0,448,451.8C448,379.59,390.91,321.09,319.41,318ZM208,478H58.2A26.28,26.28,0,0,1,32,451.8c0-47.46,38-92.44,84.73-100.41L208,442.66Zm181.8,0H240V442.64l91.25-91.25C378,359.36,416,404.34,416,451.8A26.28,26.28,0,0,1,389.8,478ZM224,302A128,128,0,0,0,352,174V63.82a32,32,0,0,0-20.76-30L246.47,2.07a64.06,64.06,0,0,0-44.94,0L116.76,33.86A32,32,0,0,0,96,63.82V174A128,128,0,0,0,224,302ZM128,63.82,212.77,32a32,32,0,0,1,22.47,0L320,63.82V142H128ZM320,174a96,96,0,0,1-192,0ZM259,72.67H237.33V51a5,5,0,0,0-5-5H215.67a5,5,0,0,0-5,5V72.67H189a5,5,0,0,0-5,5V94.33a5,5,0,0,0,5,5h21.67V121a5,5,0,0,0,5,5h16.66a5,5,0,0,0,5-5V99.33H259a5,5,0,0,0,5-5V77.67A5,5,0,0,0,259,72.67Z"></path></svg>
    </div>
  </div>
  <h2 class="title-3 px-16">
    Himedi recommends remedies and best doctors for you.
  </div>
  <div class="mt-20 px-6 title-4">
    STEP 01
  </div>
  <div class="px-6 title-5">
    Let Himedi know your disease name and questions you want to ask doctors. 
  </div>
  <p class="px-6 lg:pt-24 pt-0 mt-3 sub-title-5" >
    Based on the information you share and consultations, Himedi will recommend best-suitable remedies and doctors for you.
  </div>
  <!-- <div style="height:500px"> #safari issue
    <div class="relative content-check-hospital">
      <img class="mx-auto mb-24 mt-5 absolute" src="<?php bloginfo('template_directory') ?>/img/section3-2-phone.png" width="346px" height="346px" alt="">
      <img class="absolute" src="<?php bloginfo('template_directory') ?>/img/inquiry.png" style="height:240px;top:90px;left:108px">
    </div>
  </div> -->
  <div style="height:500px">
    <div class="relative ">
      <img class="mx-auto mb-24 mt-5" src="<?php bloginfo('template_directory') ?>/img/himedi-inquiry-screen.png" width="346px" height="346px" alt="">      
    </div>
  </div>

  <!-- Button (start) -->
  <div class="flex justify-center">
    <button class="bg-brand px-5 py-5 text-white w-6/12 lg:w-4/12 mx-auto mt-10 mb-20 ont-noto-regular font-size-24 hover:bg-blue-500" style="border-radius:10px;">
      <a href="/affiliate" class="button-1">Check hospitals</a>
    </button>
  </div>
  <!-- Button (end) -->

  
	<div class="mt-20 px-6 title-4">
    STEP 02
  </div>
  <div class="px-6 title-5">
  If you would like to receive the second opinion or deputy consultation from the recommended doctors, please share more detailed medical records.
  </div>
  <!-- Main slider (start) -->
  <div class="swiper-container content-step2" style="">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper mt-12">
          <!-- Slides -->
          <div class="swiper-slide object-fit-slide">
            <img src="<?php bloginfo('template_directory') ?>/img/section3-2-1.jpg" alt="">
          </div>
          <div class="swiper-slide object-fit-slide">
            <img src="<?php bloginfo('template_directory') ?>/img/section3-2-2.jpg" alt="" >
          </div>
          <div class="swiper-slide object-fit-slide">
            <img src="<?php bloginfo('template_directory') ?>/img/section3-2-3.jpg" alt="">
          </div>
          <!-- ... (use in case of pagination) -->
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>
      <!-- If we need scrollbar -->
      <div class="swiper-scrollbar"></div>
  </div>
  <!-- Main slider (end) -->
  <div class="mt-20 px-6 title-4">
    STEP 03
  </div>
  <div class="px-6 title-5">
    Based on the shared materials, Himedi proposes a plan for treatment available in Korea.
  </div>
  <div class="mt-12">
    <img src="<?php bloginfo('template_directory') ?>/img/section3-3-1.jpg" width="632px" height="348px" alt="">
  </div>
  <!-- Button (start) -->
  <div class="flex justify-center mt-24">
	<!-- <button class="bg-brand px-5 py-5 text-white mx-auto mt-10" style="border-radius:10px; font-size:18px"> -->
	<button class="button-1 px-2 py-5 w-9/12 lg:w-6/12 mt-10 mb-20 hover:bg-blue-500" >
      <a href="/success-cases" style="color:white">Check medical diagnoses</a>
    </button>
  </div>
	  <!-- Button (end) -->
  </div>
  <div class="mt-56">
    <h2 class="px-8 title-1" >
      Feel free to ask us anything. <br>We will reply<br> kindly and promptly.
    </div>
    <p class="pt-4 px-8 sub-title-1" style="font-size:20px">
      Do you have difficulty in inquiring? <br>We give sincere answers to any question for patients’ recovery.
    </div>
    <div class="mt-20 px-6 title-4">
      START Consultation  > 
    </div>
    <div>
      <img class="mx-auto mb-24 mt-10" src="<?php bloginfo('template_directory') ?>/img/himedi-whatsapp.png" width="346px" height="346px" alt="himedi-whatsapp">
    </div>
  </div>

  </div>
  <div class="mt-56">
  <h2 class="px-8 title-1">
      Himedi solves problems that patients and their caregivers face.
    </div>
    <p class="pt-4 px-8 sub-title-1">
      Himedi dreams of a heartwarming world where everyone enjoys a healthy life. Going beyond the step of medical tourism, Himedi, as a complex medical service platform, presents a new direction for medical service.
    </div>
    <!-- Button (start) -->
    <div class="flex justify-center my-24 mb-32">
      <a href="/about-us">
        <button class="border button-2 px-12 py-5 mx-auto mt-10 hover:bg-blue-500 hover:text-white">
          Himedi Story
        </button>
      </a>
    </div>
	  <!-- Button (end) -->
    
  </div>

  <!-- Section 3-2 (end) -->
	<!--.entry-content-->


 
</article>