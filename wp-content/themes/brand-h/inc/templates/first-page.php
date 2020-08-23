<?php

/*
	
@package sunsettheme
-- Page Template

*/

?>
<style>
@media only screen and (max-width: 600px) { /* mobile */
.object-fit-slide img {
	width:450px!important;
	height:375px!important;
	object-fit:cover;
  }
.br-hidden{
	display:none;
  }	
}

@media only screen and (min-width: 635px) { /* desktop */
    .sidebar-open {  
      top: 8px;
       }      
	   .object-fit-slide img {
	width:635px!important;
	object-fit:cover;
  }
}

</style>
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
        <div class="lg:mt-10 mt-10 lg:mb-24 mb-0 lg:p-10 p-2">
            <h2 class="font-bold text-center font-size-24 font-roboto leading-relaxed " style="font-size:22px">
				Himedi meets doctors of first-class hospitals in Korea <br class="br-hidden">on behalf of you.
            </h2>
            <p class="pt-4 px-8 text-gray-700 text-center font-size-24 font-roboto leading-none" style="font-size:20px">
				We lead you to world-best medical staff<br class="br-hidden"> and best remedies.
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
	  <div class="flex mt-40">
	  <img src="<?php bloginfo('template_directory') ?>/img/section1-1.jpg" width="632px" height="348px" alt="">
	  </div>
	  <div class="mb-24 p-10">
            <h2 class="font-bold">
				Just send us your medical records. You do not need to come to Korea.
            </h2>
            <p class="text-4xl pt-10 text-gray-600">
				Send your relevant medical records such as treatment history, image, etc.
            </p>
        </div>
        <!-- Content (end) -->
	<!-- Section1-1 (end) -->
    <!-- Section 2 (start) -->
<section class="mt-20 w-full text-center">
	<!-- Chart (start) -->
	<div class="chartsWrap bg-gray-100 text-justify">
		<div class="chart0 active lg:p-10 p-0">
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
		<p class="h-full overlay text-white font-bold text-5xl p-5 pt-56">
			In addition, Himedi has cared for 4,239 patients while addressing 10,290 inquiries in consultation with Korea’s best medical staff.
		</p>
	</div>
	<p class="pt-24 text-3xl">
		You can reserve six world-class hospitals and other great hospitals.<br>(World\'s best 100 hospitals, April 2020 Newsweek)
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

<!-- Section 3-1 (start) -->
<section class="text-center mt-40 pt-20" style="background-color:#EAF3FE">
	<!-- Content (start) -->
	<h2 class="font-bold">
		Get a personalized consultation suitable to you
	</h2>	
	<button class="bg-brand p-1 text-white w-48 mx-auto mt-10 mb-10" style="border-radius:30px; font-size:32px">
		01
	</button>
	<div class="flex px-8">
    <div class="h-32 w-32 flex itmes-center justify-center mt-5" style="color:blue">
      <img src="<?php bloginfo('template_directory') ?>/img/hospital-user-light.svg" >
    </div>
    <div class="mb-5">
      <div class="text-white text-4xl mb-5">Consulting directly with a doctor on behalf of you</div>
      <div>*Available only for patients already with medical records</div>
    </div>
	</div>

  <button class="bg-brand p-1 text-white w-48 mx-auto mt-10 mb-10" style="border-radius:30px; font-size:32px">
		02
	</button>
	<div class="flex px-5 w-full">
    <div class="h-32 w-32 flex itmes-center justify-center" style="color:blue">
      <img src="<?php bloginfo('template_directory') ?>/img/user-md-chat-light.svg" >
    </div>
    <div class="mb-5 w-full">
      <div class="text-white text-4xl mb-5 mx-auto w-full"><span>Telemedicine consultation</span></div>
      <div>*Available for new patients as well</div>
    </div>
	</div>

  <button class="bg-brand p-1 text-white w-48 mx-auto mt-10 mb-10" style="border-radius:30px; font-size:32px">
		03
	</button>
	<div class="flex px-5">
    <div class="h-32 w-32 flex itmes-center justify-center" style="color:blue">
      <img src="<?php bloginfo('template_directory') ?>/img/notes-medical-light.svg" >
    </div>
    <div class="mb-5 w-full">
      <div class="text-white text-4xl mb-5">Request for the 2nd opinion</div>
      <div>*Available for new patients as well</div>
    </div>
	</div>
  <!-- Button (start) -->
  <div class="flex justify-center">
    <button class="bg-white px-5 py-5 text-blue-500 w-56 mx-auto mt-10 mb-24" style="border-radius:10px; font-size:18px">
      Inquiry
    </button>
  </div>
	<!-- Button (end) -->

	<!-- Content (end) -->
</section>
<!-- Section 3-1 (end) -->
<!-- Section 3-2 (start) -->
<div class="mt-20 px-5">
  <div>
    <img class="mx-auto mb-24 mt-5 lg:h-24 h-10 w-16 lg:w-16" src="<?php bloginfo('template_directory') ?>/img/user-nurse-light.svg"> 
  </div>
  <div class="text-4xl">
    Himedi recommends remedies and best doctors for you.
  </div>
  <div class="text-blue-500 text-bold mt-20 text-3xl">
    STEP 01
  </div>
  <div class="text-bold text-3xl">
    Let Himedi know your disease name and questions you want to ask doctors. 
  </div>
  <div class="mt-3">
    Based on the information you share and consultations, Himedi will recommend best-suitable remedies and doctors for you.
  </div>
  <div>
    <img class="mx-auto mb-24 mt-5" src="<?php bloginfo('template_directory') ?>/img/section3-2-phone.png" width="346px" height="346px" alt="">
  </div>
  <!-- Button (start) -->
  <div class="flex justify-center">
    <button class="bg-brand px-5 py-5 text-white w-64 mx-auto mt-10" style="border-radius:10px; font-size:18px">
      Check hospitals
    </button>
  </div>
	<!-- Button (end) -->
  <div class="text-blue-500 text-bold mt-20 text-3xl">
    STEP 02
  </div>
  <div class="text-bold text-3xl">
  If you would like to receive the second opinion or deputy consultation from the recommended doctors, please share more detailed medical records.
  </div>
  <!-- Main slider (start) -->
  <div class="swiper-container" style="height:380px">
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

      <!-- If we need navigation buttons -->
      <!-- <div class="swiper-button-prev"></div> -->
      <!-- <div class="swiper-button-next"></div> -->

      <!-- If we need scrollbar -->
      <div class="swiper-scrollbar"></div>
  </div>
  <!-- Main slider (end) -->
  <div class="text-blue-500 text-bold mt-20 text-3xl">
    STEP 03
  </div>
  <div class="text-bold text-3xl mb-16">
    Based on the shared materials, Himedi proposes a plan for treatment available in Korea.
  </div>
  <div>
    <img src="<?php bloginfo('template_directory') ?>/img/section3-3-1.jpg" width="632px" height="348px" alt="">
  </div>
  <!-- Button (start) -->
  <div class="flex justify-center mt-24">
    <button class="bg-brand px-5 py-5 text-white mx-auto mt-10" style="border-radius:10px; font-size:18px">
      Check medical diagnoses
    </button>
  </div>
	  <!-- Button (end) -->
  </div>
  <div class="mt-56">
    <div class="text-6xl">
      Feel free to ask us anything. <br>We will reply<br> kindly and promptly.
    </div>
    <div class="text-3xl px-5 mt-10">
      Do you have difficulty in inquiring? <br>We give sincere answers to any question for patients’ recovery.
    </div>
    <div class="text-3xl text-blue-500 text-bold mt-20 px-5">
      Start consultation
    </div>
    <div>
      <img class="mx-auto mb-24 mt-10" src="<?php bloginfo('template_directory') ?>/img/section3-2-phone.png" width="346px" height="346px" alt="">
    </div>
  </div>
  <div class="px-10"> 
    <div class="font-bold text-blue-500 text-4xl">
      * Period required: about 10 days
    </div>
    <div class="px-8">
      Examination results are made available within 10 days from the time when records are received and delivered.
    </div>
    <div class="font-bold text-blue-500 text-4xl mt-20">
      * Estimated cost: Please inquire.
    </div>
    <div class="px-8">
      Examination results are made available within 10 days from the time when records are received and delivered.
    </div>
    <!-- Button (start) -->
    <div class="flex justify-center mt-24">
      <button class="bg-brand px-5 py-5 w-56 text-white mx-auto mt-10" style="border-radius:10px; font-size:18px">
        Inquiry
      </button>
    </div>
	  <!-- Button (end) -->
  </div>
  <div class="mt-56">
    <div class="text-6xl">
      Himedi solves problems that patients and their caregivers face.
    </div>
    <div class="text-3xl px-5 mt-10">
      Himedi dreams of a heartwarming world where everyone enjoys a healthy life. Going beyond the step of medical tourism, Himedi, as a complex medical service platform, presents a new direction for medical service.
    </div>
    <!-- Button (start) -->
    <div class="flex justify-center mt-24">
      <button class="border border-blue-500 rounded-full px-5 py-5 w-8/12 mx-auto mt-10 text-blue-500 text-3xl">
        Himedi Story
      </button>
    </div>
	  <!-- Button (end) -->
    
  </div>
<!-- Section 3-2 (end) -->




	<!--.entry-content-->

</article>