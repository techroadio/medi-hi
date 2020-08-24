<?php

/*
	
@package sunsettheme
-- Page Template

*/

?>
<style>
@media only screen and (max-width: 600px) {
.object-fit-slide img {
	width:400px!important;
	height:350px!important;
	object-fit:cover;
  }
}
</style>
<article id="post-<?php the_ID();
					?>" <?php post_class();
						?>>
 

 

   
 <div class="mt-20 px-5">
  <div>
    <img class="mx-auto mb-24 mt-5 lg:h-24 h-24 w-24 lg:w-24" src="<?php bloginfo('template_directory') ?>/img/user-nurse-light.svg"> 
  </div>
  <h2 class="font-bold text-center px-6 font-size-24 font-roboto leading-relaxed " style="font-size:22px">
    Himedi recommends remedies and best doctors for you.
  </div>
  <div class="text-bold mt-20 font-bold text-left px-6 font-size-24 font-roboto leading-relaxed" style="color:#2681F3">
    STEP 01
  </div>
  <div class="text-bold font-bold text-left px-6 font-size-24 font-roboto leading-none">
    Let Himedi know your disease name and questions you want to ask doctors. 
  </div>
  <p class="px-6 lg:pt-24 pt-0 font-roboto leading-none mt-3" style="font-size:20px">
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
    <button class="bg-brand px-5 py-5 text-white w-6/12 lg:w-4/12 mx-auto mt-10 mb-20 font-roboto font-size-24" style="border-radius:10px;">
      <a href style="color:white!important;">Check hospitals</a>
    </button>
  </div>
	<!-- Button (end) -->
	<div class="text-bold mt-20 font-bold text-left px-6 font-size-24 font-roboto leading-relaxed" style="color:#2681F3">
    STEP 02
  </div>
  <div class="text-bold font-bold text-left px-6 font-size-24 font-roboto leading-none">
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

      <!-- If we need navigation buttons -->
      <!-- <div class="swiper-button-prev"></div> -->
      <!-- <div class="swiper-button-next"></div> -->

      <!-- If we need scrollbar -->
      <div class="swiper-scrollbar"></div>
  </div>
  <!-- Main slider (end) -->
  <div class="text-bold mt-20 font-bold text-left px-6 font-size-24 font-roboto leading-relaxed" style="color:#2681F3">
    STEP 03
  </div>
  <div class="text-bold font-bold text-left px-6 font-size-24 font-roboto leading-none">
    Based on the shared materials, Himedi proposes a plan for treatment available in Korea.
  </div>
  <div class="mt-12">
    <img src="<?php bloginfo('template_directory') ?>/img/section3-3-1.jpg" width="632px" height="348px" alt="">
  </div>
  <!-- Button (start) -->
  <div class="flex justify-center mt-24">
	<!-- <button class="bg-brand px-5 py-5 text-white mx-auto mt-10" style="border-radius:10px; font-size:18px"> -->
	<button class="bg-brand px-5 py-5 text-white w-9/12 lg:w-6/12 mx-auto mt-10 mb-20 font-roboto font-size-24" style="border-radius:10px;">
      <a href="/success-cases" style="color:white">Check medical diagnoses</a>
    </button>
  </div>
	  <!-- Button (end) -->
  </div>
  <div class="mt-56">
    <h2 class="px-8 font-bold text-left font-size-24 font-roboto leading-relaxed " style="font-size:22px">
      Feel free to ask us anything. <br>We will reply<br> kindly and promptly.
    </div>
    <p class="pt-4 px-8 text-gray-700 text-left font-size-24 font-roboto leading-none" style="font-size:20px">
      Do you have difficulty in inquiring? <br>We give sincere answers to any question for patients’ recovery.
    </div>
    <div class="text-bold mt-20 font-bold text-left px-6 font-size-24 font-roboto leading-relaxed" style="color:#2681F3">
      Start consultation
    </div>
    <div>
      <!-- <img class="mx-auto mb-24 mt-10" src="<?php bloginfo('template_directory') ?>/img/section3-2-phone.png" width="346px" height="346px" alt=""> -->
      <img class="mx-auto mb-24 mt-10" src="<?php bloginfo('template_directory') ?>/img/himedi-whatsapp.png" width="346px" height="346px" alt="himedi-whatsapp">
    </div>
  </div>
  <div class="px-5"> 
    <h2 class="text-bold mt-20 font-bold text-left px-0 font-size-24 font-roboto leading-none" style="color:#2681F3">
      * Period required: about 10 days
    </h2>
    <p class="pt-0 px-5 text-gray-700 text-left font-size-24 font-roboto leading-none" style="font-size:20px">
      Examination results are made available within 10 days from the time when records are received and delivered.
    </p>
    
    <h2 class="text-bold mt-20 font-bold text-left px-0 font-size-24 font-roboto leading-none" style="color:#2681F3">
      * Estimated cost: Please inquire.
    </h2>
    <p class="pt-0 px-5 text-gray-700 text-left font-size-24 font-roboto leading-none" style="font-size:20px">
      Examination results are made available within 10 days from the time when records are received and delivered.
    </p>
  
    <!-- Button (start) -->
    <div class="flex justify-center mt-3">
      <button class="bg-brand px-5 py-5 w-56 text-white mx-auto mt-8 mb-56" style="border-radius:10px; font-size:18px">
        <a href="/inquiry" style="color:white">Inquiry</a>
      </button>
    </div>
	  <!-- Button (end) -->
  </div>
 
  <!-- Section 3-2 (end) -->
	<!--.entry-content-->


</article>