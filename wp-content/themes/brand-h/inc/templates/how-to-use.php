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
 
	
   
<!-- Section 3-2 (start) -->
<div class="mt-20 px-5">
  <div>
    <img class="mx-auto mb-24 mt-5 h-24" src="<?php bloginfo('template_directory') ?>/img/user-nurse-light.svg"> 
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
  
<!-- Section 3-2 (end) -->

	<!--.entry-content-->

</article>