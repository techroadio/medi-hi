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
        <div class="mt-32 mb-24 p-10">
            <h2 class="font-bold">
                Just send us your medical records. You do not need to come to Korea.
            </h2>
            <p class="text-4xl pt-12 text-gray-600">
                We lead you to world-best medical staff and medical remedies
            </p>
        </div>
        <!-- Content (end) -->
    
        <!-- Arrow icon (start) -->
		
        <img class="mx-auto pt-40 arrowAnimate" src="<?php bloginfo('template_directory') ?>/img/arrow.png" alt="arrow icon">
        <!-- Arrow icon (end) -->
    
    </section>
    <!-- Section 1 (end) -->
	<!-- Section1-1 (start) -->
	  <!-- Content (start) -->
	  <div class="flex">
	  <img src="<?php bloginfo('template_directory') ?>/img/section1-1.jpg" width="632px" height="348px" alt="">
	  </div>
	  <div class="mt-32 mb-24 p-10">
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
<!-- Section 3-3 (start) -->
  <div class="mt-20">
    <img class="mx-auto mb-24 h-32" src="<?php bloginfo('template_directory') ?>/img/hospital-alt-light.svg" >
  </div>
  <div class="w-full mb-32 ">
    <div class="mt-20 text-5xl font-bold text-center">
      Check out Korea’s best medical staff.
    </div>
  </div>
  <div class="mt-20">
    <div class="flex">
      <img class="mx-auto mb-24 h-40" src="<?php bloginfo('template_directory') ?>/img/partners/01-logo.png" >
      <img class="mx-auto mb-24 h-40" src="<?php bloginfo('template_directory') ?>/img/partners/02-logo.png" >
      <img class="mx-auto mb-24 h-40" src="<?php bloginfo('template_directory') ?>/img/partners/03-logo.png" >
    </div>
    <div class="flex">
      <img class="mx-auto mb-24 h-40" src="<?php bloginfo('template_directory') ?>/img/partners/04-logo.png" >
      <img class="mx-auto mb-24 h-40" src="<?php bloginfo('template_directory') ?>/img/partners/05-logo.png" >
      <img class="mx-auto mb-24 h-40" src="<?php bloginfo('template_directory') ?>/img/partners/06-logo.png" >
    </div>
    <div class="flex">
      <img class="mx-auto mb-24 h-40" src="<?php bloginfo('template_directory') ?>/img/partners/07-logo.png" >
      <img class="mx-auto mb-24 h-40" src="<?php bloginfo('template_directory') ?>/img/partners/08-logo.png" >
      <img class="mx-auto mb-24 h-40" src="<?php bloginfo('template_directory') ?>/img/partners/09-logo.png" >
    </div>
    <div class="flex">
      <img class="mx-auto mb-24 h-40" src="<?php bloginfo('template_directory') ?>/img/partners/10-logo.png" >
      <img class="mx-auto mb-24 h-40" src="<?php bloginfo('template_directory') ?>/img/partners/11-logo.png" >
      <img class="mx-auto mb-24 h-40" src="<?php bloginfo('template_directory') ?>/img/partners/12-logo.png" >
    </div>
    <div class="flex">
      <img class="mx-auto mb-24 h-40" src="<?php bloginfo('template_directory') ?>/img/partners/13-logo.png" >
      <img class="mx-auto mb-24 h-40" src="<?php bloginfo('template_directory') ?>/img/partners/14-logo.png" >
    </div>
  </div>
<!-- Section 3-3 (end) -->
<!-- Section 3-4 (start) -->
  <div>
    <img class="mx-auto mb-24 h-32" src="<?php bloginfo('template_directory') ?>/img/user-check-light.svg" >
  </div>
  <div class="text-5xl font-bold text-center mb-20">
    Please listen to patients who have been cared for by Himedi.
  </div>
	
	<!-- Main slider (start) -->
	<div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper mt-12">
                <!-- Slides -->
                <div class="swiper-slide">
					<div>
						<svg class="mb-12 h-8 text-gray-500" viewBox="0 0 512 448" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M464 224H384V160C384 124.7 412.7 96 448 96H456C469.3 96 480 85.3 480 72V24C480 10.7 469.3 0 456 0H448C359.6 0 288 71.6 288 160V400C288 426.5 309.5 448 336 448H464C490.5 448 512 426.5 512 400V272C512 245.5 490.5 224 464 224ZM176 224H96V160C96 124.7 124.7 96 160 96H168C181.3 96 192 85.3 192 72V24C192 10.7 181.3 0 168 0H160C71.6 0 0 71.6 0 160V400C0 426.5 21.5 448 48 448H176C202.5 448 224 426.5 224 400V272C224 245.5 202.5 224 176 224Z" fill="currentcolor"/>
						</svg>

						<div class="italic text-3xl text-gray-700">
							Regarding Himedi, to be honest, they did all their best for us, starting from the airport where they greeted us in a friendly manner to recommending the best hotels in Seoul for us. They took care of everything, especially hospital recommendations, recommending one of the best hospitals in Seoul that is specialized in cancer treatments.
						</div>	
						<div class="mt-10 text-gray-500 mb-32 italic text-3xl">
							Yousif
						</div>
					</div>
					<div>
						
					</div>
					<a href="https://youtu.be/_XIwRAO57wI"><img src="<?php bloginfo('template_directory') ?>/img/interview1.jpg" width="632px" height="348px" alt="">
						<!-- <iframe id="ytplayer" type="text/html" width="720" height="405"
								src="https://www.youtube.com/embed/M7lc1UVf-VE"
								frameborder="0" allowfullscreen> -->
					</a>
                </div>
                <div class="swiper-slide">
							<div>
								<svg class="mb-12 h-8 text-gray-500" viewBox="0 0 512 448" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M464 224H384V160C384 124.7 412.7 96 448 96H456C469.3 96 480 85.3 480 72V24C480 10.7 469.3 0 456 0H448C359.6 0 288 71.6 288 160V400C288 426.5 309.5 448 336 448H464C490.5 448 512 426.5 512 400V272C512 245.5 490.5 224 464 224ZM176 224H96V160C96 124.7 124.7 96 160 96H168C181.3 96 192 85.3 192 72V24C192 10.7 181.3 0 168 0H160C71.6 0 0 71.6 0 160V400C0 426.5 21.5 448 48 448H176C202.5 448 224 426.5 224 400V272C224 245.5 202.5 224 176 224Z" fill="currentcolor"/>
								</svg>

								<div class="italic text-3xl text-gray-700">
									Frankly, Everything they provide is good, including organizing and all what they do is just well provided.
								</div>	
								<div class="mt-10 text-gray-500 mb-32 italic text-3xl">
									Mariam
								</div>
							</div>
				          <a href="https://youtu.be/DXg_vmpIlmE"><img src="<?php bloginfo('template_directory') ?>/img/interview2.jpg" width="632px" height="348px" alt=""></a>
                </div>
                <div class="swiper-slide">
							<div>
								<svg class="mb-12 h-8 text-gray-500" viewBox="0 0 512 448" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M464 224H384V160C384 124.7 412.7 96 448 96H456C469.3 96 480 85.3 480 72V24C480 10.7 469.3 0 456 0H448C359.6 0 288 71.6 288 160V400C288 426.5 309.5 448 336 448H464C490.5 448 512 426.5 512 400V272C512 245.5 490.5 224 464 224ZM176 224H96V160C96 124.7 124.7 96 160 96H168C181.3 96 192 85.3 192 72V24C192 10.7 181.3 0 168 0H160C71.6 0 0 71.6 0 160V400C0 426.5 21.5 448 48 448H176C202.5 448 224 426.5 224 400V272C224 245.5 202.5 224 176 224Z" fill="currentcolor"/>
								</svg>

								<div class="italic text-3xl text-gray-700">
									I should mention that Himedi provides services rather than hospital related services, such as recommending not just large hospitals but also simple and small clinics, as well as recommending tourism services for those who are interested in tours and traveling around. Moreover, translation and interpretation service, unlike other tourism agencies, communicating with Himedi was easy and comfortable, Himedi facilitates connecting with hospitals, moreover, this is available for 24 hours.
								</div>	
								<div class="mt-10 text-gray-500 mb-32 italic text-3xl">
									Saeed abdullah 
								</div>
							</div>
				          <a href="https://youtu.be/IaoksqOG9eo?t=44"><img src="<?php bloginfo('template_directory') ?>/img/interview3.jpg" width="632px" height="348px" alt=""></a>
                </div>
				<div class="swiper-slide">
						<div>
								<svg class="mb-12 h-8 text-gray-500" viewBox="0 0 512 448" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M464 224H384V160C384 124.7 412.7 96 448 96H456C469.3 96 480 85.3 480 72V24C480 10.7 469.3 0 456 0H448C359.6 0 288 71.6 288 160V400C288 426.5 309.5 448 336 448H464C490.5 448 512 426.5 512 400V272C512 245.5 490.5 224 464 224ZM176 224H96V160C96 124.7 124.7 96 160 96H168C181.3 96 192 85.3 192 72V24C192 10.7 181.3 0 168 0H160C71.6 0 0 71.6 0 160V400C0 426.5 21.5 448 48 448H176C202.5 448 224 426.5 224 400V272C224 245.5 202.5 224 176 224Z" fill="currentcolor"/>
								</svg>

								<div class="italic text-3xl text-gray-700">
									Himedi is a specialized company, I am glad that I had the opportunity of getting to know it. When we came in Seoul we were able to experience its services all. Those who work there, they can speak Arabic and English very well, and I just felt as if I am in my homeland.
								</div>	
								<div class="mt-10 text-gray-500 mb-32 italic text-3xl">
									Badee
								</div>
							</div>
				          <a href="https://youtu.be/AbLHU1mED5A"><img src="<?php bloginfo('template_directory') ?>/img/interview4.jpg" width="632px" height="348px" alt=""></a>
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
    
		
	

  </div>
<!-- Section 3-4 (end) -->
<!-- Section 3-5 (start) -->
<section class="items-center pt-40">
<div class="flex justify-center flex-wrap mx-10">
        <div class="flex justify-center flex-wrap w-full">
            <svg class="w-6 m-2 lg:h-32 lg:w-32" viewBox="0 0 384 512" fill="black" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M336 64H247.4C247.8 61.4 248 58.7 248 56C248 25.1 222.9 0 192 0C161.1 0 136 25.1 136 56C136 58.7 136.2 61.4 136.6 64H48C21.5 64 0 85.5 0 112V464C0 490.5 21.5 512 48 512H336C362.5 512 384 490.5 384 464V112C384 85.5 362.5 64 336 64ZM192 32C205.3 32 216 42.7 216 56C216 69.3 205.3 80 192 80C178.7 80 168 69.3 168 56C168 42.7 178.7 32 192 32ZM352 464C352 472.8 344.8 480 336 480H48C39.2 480 32 472.8 32 464V112C32 103.2 39.2 96 48 96H96V116C96 122.6 101.4 128 108 128H276C282.6 128 288 122.6 288 116V96H336C344.8 96 352 103.2 352 112V464ZM280 288H224V232C224 227.6 220.4 224 216 224H168C163.6 224 160 227.6 160 232V288H104C99.6 288 96 291.6 96 296V344C96 348.4 99.6 352 104 352H160V408C160 412.4 163.6 416 168 416H216C220.4 416 224 412.4 224 408V352H280C284.4 352 288 348.4 288 344V296C288 291.6 284.4 288 280 288Z"
                    fill="black" />
            </svg>
        </div>
        <div class="flex justify-center flex-wrap w-full">
            <h3 class="text-base lg:text-5xl font-bold mt-2 lg:mt-10 mb-4 lg:mb-16 text-center">Check out these diagnosis examples and methods best
                suitable for you.</h3>
        </div>

        <div class="flex justify-center flex-wrap w-40 lg:w-5/12 lg:text-3xl">
            <button id="choleithiasis_button"
                class="relative flex items-center justify-center content-center bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 lg:py-3 border border-blue-500 hover:border-transparent rounded-full m-2 min-w-full">
                Choleithiasis
                <svg class="w-3 lg:w-10 absolute right-0 mr-2 lg:mr-5" viewBox="0 0 640 512" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M227 417C216 417 207 408 207 397V333C207 322 216 313 227 313C238 313 247 322 247 333V397C247 408 238 417 227 417ZM480.5 -4.11593e-05C392 -0.300041 320 71.6 320 160V224H48C21.5 224 0 245.5 0 272V464C0 490.5 21.5 512 48 512H400C426.5 512 448 490.5 448 464V272C448 245.5 426.5 224 400 224H352V161.4C352 90.7 408.7 32.4 479.3 32C550.2 31.6 608 89.2 608 160V244C608 250.6 613.4 256 620 256H628C634.6 256 640 250.6 640 244V161.5C640 73.1 568.9 0.299959 480.5 -4.11593e-05ZM400 256C408.8 256 416 263.2 416 272V464C416 472.8 408.8 480 400 480H48C39.2 480 32 472.8 32 464V272C32 263.2 39.2 256 48 256H400Z"
                        fill="#2b6cb0" />
                </svg>

            </button>

            <button
			class="relative flex items-center justify-center content-center bg-transparent hover:bg-blue-500 text-gray-500 py-1 lg:py-3 border border-gray-500 pointer-events-none rounded-full m-4 min-w-full">
                text1
                <svg class="w-2 lg:w-8 absolute right-0 mr-2 lg:mr-5" viewBox="0 0 448 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M224 420C213 420 204 411 204 400V336C204 325 213 316 224 316C235 316 244 325 244 336V400C244 411 235 420 224 420ZM448 272V464C448 490.5 426.5 512 400 512H48C21.5 512 0 490.5 0 464V272C0 245.5 21.5 224 48 224H64V160C64 71.6 136 -0.300041 224.5 -4.11593e-05C312.9 0.299959 384 73.1 384 161.5V224H400C426.5 224 448 245.5 448 272ZM96 224H352V160C352 89.4 294.6 32 224 32C153.4 32 96 89.4 96 160V224ZM416 464V272C416 263.2 408.8 256 400 256H48C39.2 256 32 263.2 32 272V464C32 472.8 39.2 480 48 480H400C408.8 480 416 472.8 416 464Z"
                        fill="currentcolor" />
                </svg>
            </button>

            <button
			class="relative flex items-center justify-center content-center bg-transparent hover:bg-blue-500 text-gray-500 py-1 lg:py-3 border border-gray-500 pointer-events-none rounded-full m-4 min-w-full">
                text2
                <svg class="w-2 lg:w-8 absolute right-0 mr-2 lg:mr-5 " viewBox="0 0 448 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M224 420C213 420 204 411 204 400V336C204 325 213 316 224 316C235 316 244 325 244 336V400C244 411 235 420 224 420ZM448 272V464C448 490.5 426.5 512 400 512H48C21.5 512 0 490.5 0 464V272C0 245.5 21.5 224 48 224H64V160C64 71.6 136 -0.300041 224.5 -4.11593e-05C312.9 0.299959 384 73.1 384 161.5V224H400C426.5 224 448 245.5 448 272ZM96 224H352V160C352 89.4 294.6 32 224 32C153.4 32 96 89.4 96 160V224ZM416 464V272C416 263.2 408.8 256 400 256H48C39.2 256 32 263.2 32 272V464C32 472.8 39.2 480 48 480H400C408.8 480 416 472.8 416 464Z"
                        fill="currentcolor" />
                </svg>
            </button>

            <button
			class="relative flex items-center justify-center content-center bg-transparent hover:bg-blue-500 text-gray-500 py-1 lg:py-3 border border-gray-500 pointer-events-none rounded-full m-4 min-w-full">
                text3
                <svg class="w-2 lg:w-8 absolute right-0 mr-2 lg:mr-5" viewBox="0 0 448 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M224 420C213 420 204 411 204 400V336C204 325 213 316 224 316C235 316 244 325 244 336V400C244 411 235 420 224 420ZM448 272V464C448 490.5 426.5 512 400 512H48C21.5 512 0 490.5 0 464V272C0 245.5 21.5 224 48 224H64V160C64 71.6 136 -0.300041 224.5 -4.11593e-05C312.9 0.299959 384 73.1 384 161.5V224H400C426.5 224 448 245.5 448 272ZM96 224H352V160C352 89.4 294.6 32 224 32C153.4 32 96 89.4 96 160V224ZM416 464V272C416 263.2 408.8 256 400 256H48C39.2 256 32 263.2 32 272V464C32 472.8 39.2 480 48 480H400C408.8 480 416 472.8 416 464Z"
                        fill="currentcolor" />
                </svg>
            </button>
        </div>
    </div>

    <div id="pop_up_bg" class="absolute w-screen h-screen top-0 right-0 hidden" style="background-color: rgba(0, 0, 0, 0.6);"></div>
    <div id="main_pop_up" class="w-full absolute top-0 hidden" style="height: 70vh; background-image: url(<?php bloginfo('template_directory') ?>/img/static/chart.png\);background-repeat: no-repeat;background-size:cover;top:50%; transform: translateY(-50%);">
        <!-- PopUp Content goes here. -->
    </div>

</section>
<!-- Section 3-5 (end) -->

<!-- Section 3-6 (start) -->

<div class="flex flex-wrap">

	<div class="flex flex-wrap relative">
		<img class="w-full" src="<?php bloginfo('template_directory') ?>/img/static/p_himedi_1_m.jpg" alt="">
		<div class="absolute top-0 right-0 flex flex-wrap items-center justify-center content-center w-full h-full p-6"
			style="background-color: rgba(0, 0, 0, 0.4);">
			<h1 class="text-lg font-bold m-4 text-center text-white">About Himedi</h1>
			<p class="text-xs text-center text-white">Himedi makes known excellent medical technology and service of
				Korea and address inconveniences in medical tourism so as to contribute to a happy and healthy life
				of foreign patients who need treatment as well as the development of Korea’s medical tourism
				industry.</p>
		</div>
	</div>

	<div class="flex justify-center content-center flex-wrap w-full">
		<img class="w-32 m-6" src="<?php bloginfo('template_directory') ?>/img/static/lobo.png" alt="" srcset="">
	</div>

	<div class="flex flex-wrap m-2 mx-6">
		<p class="text-sm">‘Himedi’ is a combined word of ‘Hi’ which is a friendly greeting and ‘Medical’ which
			means medical science. It reflects the intention to provide friendly service that wipes out fear from
			foreign patients coming from overseas.</p>
	</div>

	<div class="flex flex-wrap w-full px-6 pt-10" style="background-color: #f7f7f7;">
		<h4 class="uppercase font-bold">History</h4>
		<p class="text-sm my-4">The path that Himedi has followed since 2011 as ‘an enterprise of innovation that
			realizes easy and comfortable medical tourism.’</p>
		<div class="flex mt-2 pb-4 border-solid border-b-2 border-gray-200">
			<div class="text-sm font-bold mr-4">
				2020
			</div>

			<div class="flex flex-wrap">
				<div class="flex mb-2">
					<div class="text-sm mr-4">
						04
					</div>
					<div class="text-sm">
						Attracted Series B investment amounting to 6 billion won
					</div>
				</div>
			</div>

		</div>


		<div class="flex mt-2 pb-4 border-solid border-b-2 border-gray-200">
			<div class="text-sm font-bold mr-4">
				2019
			</div>

			<div class="flex flex-wrap">
				<div class="flex mb-2">
					<div class="text-sm mr-4">
						04
					</div>
					<div class="text-sm">
						Himedi Korea Co., Ltd. Separated as an affiliate
					</div>
				</div>

				<div class="flex mb-2">
					<div class="text-sm mr-4">
						04
					</div>
					<div class="text-sm">
						Changed the company name to Himedi Co., Ltd.
					</div>
				</div>
			</div>
		</div>

		<div class="flex mt-2 pb-4 border-solid border-b-2 border-gray-200">
			<div class="text-sm font-bold mr-4">
				2018
			</div>

			<div class="flex flex-wrap">
				<div class="flex mb-2">
					<div class="text-sm mr-4">
						10
					</div>
					<div class="text-sm">
						Attracted Series A investment amounting to 2 billion won from Murex Partners
					</div>
				</div>

				<div class="flex mb-2">
					<div class="text-sm mr-4">
						09
					</div>
					<div class="text-sm">
						Concluded the concierge contract of Russian patients with Severance Check-up
					</div>
				</div>

				<div class="flex mb-2">
					<div class="text-sm mr-4">
						08
					</div>
					<div class="text-sm">
						Founded the Uzbekistan corporation of Himedi
					</div>
				</div>

				<div class="flex mb-2">
					<div class="text-sm mr-4">
						08
					</div>
					<div class="text-sm">
						Concluded the concierge operation/management contract of Arab Muslim patients with BOBATH
						Memorial Hospital
					</div>
				</div>

				<div class="flex mb-2">
					<div class="text-sm mr-4">
						06
					</div>
					<div class="text-sm">
						Concluded the concierge operation/management contract of Arab Muslim patients with Wooridul
						Hospital in Cheongdam
					</div>
				</div>

				<div class="flex mb-2">
					<div class="text-sm mr-4">
						02
					</div>
					<div class="text-sm">
						Concluded the concierge operation/management contract of Arab Muslim patients with Seoul National University Bundang Hospital
					</div>
				</div>

				<div class="flex mb-2">
					<div class="text-sm mr-4">
						01
					</div>
					<div class="text-sm">
						Concluded the concierge operation/management contract of Arab Muslim patients with Seoul National University Hospital (Main)
					</div>
				</div>
			</div>
		</div>

		<div class="flex mt-2 pb-4 border-solid border-b-2 border-gray-200">
			<div class="text-sm font-bold mr-4">
				2015
			</div>

			<div class="flex flex-wrap">
				<div class="flex mb-2">
					<div class="text-sm mr-4">
						12
					</div>
					<div class="text-sm">
						Concluded the concierge operation/management contract of Arab Muslim patients with Cha University Gangnam Medical Center
					</div>
				</div>

				<div class="flex mb-2">
					<div class="text-sm mr-4">
						11
					</div>
					<div class="text-sm">
						Concluded the concierge operation/management contract of Arab Muslim patients with Samsung Medical Center
					</div>
				</div>

				<div class="flex mb-2">
					<div class="text-sm mr-4">
						09
					</div>
					<div class="text-sm">
						Concluded the UAE health insurance patient registration/billing service contract with Daman Health Insurance
					</div>
				</div>

				<div class="flex mb-2">
					<div class="text-sm mr-4">
						03
					</div>
					<div class="text-sm">
						An internship program with Arabic Department of Chosun University
					</div>
				</div>

				<div class="flex mb-2">
					<div class="text-sm mr-4">
						03
					</div>
					<div class="text-sm">
						An internship program with Arabic Studies Department, Myongji University
					</div>
				</div>
				
			</div>
		</div>

		<div class="flex mt-2 pb-4 border-solid border-b-2 border-gray-200">
			<div class="text-sm font-bold mr-4">
				2014
			</div>

			<div class="flex flex-wrap">
				<div class="flex mb-2">
					<div class="text-sm mr-4">
						12
					</div>
					<div class="text-sm">
						Concluded the medical checkup service contract for the staff of the Russian airline Air Bridge Cargo
					</div>
				</div>

				<div class="flex mb-2">
					<div class="text-sm mr-4">
						07
					</div>
					<div class="text-sm">
						Founded the corporation of Widers Korea
					</div>
				</div>
				
			</div>
		</div>

		<div class="flex mt-2 pb-4 border-solid border-b-2 border-gray-200">
			<div class="text-sm font-bold mr-4">
				2011
			</div>

			<div class="flex flex-wrap">
				<div class="flex mb-2">
					<div class="text-sm mr-4">
						12
					</div>
					<div class="text-sm">
						Concluded the concierge operation/management contract of Arab Muslim patients with Severance Hospital
					</div>
				</div>

				<div class="flex mb-2">
					<div class="text-sm mr-4">
						12
					</div>
					<div class="text-sm">
						Founded Widers Company
					</div>
				</div>
				
			</div>
		</div>

	</div>

	<div class="flex flex-wrap w-full px-6 py-5">
		<h4 class="uppercase font-bold mb-4">Location</h4>

		<iframe class="w-full h-56 mb-4" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDgl81NrLLD43y1Qep_Dc8INyr8ilgvSwE
	&q=Space+Needle,Seattle+WA" allowfullscreen>
		</iframe>

		<h4 class="mb-4 w-full">Himedi Headquarters</h4>

		<div class="">
			<table>
				<tr class="text-sm">
					<td class="pr-4">Address</td>
					<td class="py-2">7th Floor, Hongwu-2-Building, 78-gil 22, Seochodaero, Seocho-gu, Seoul</td>
				</tr>

				<tr class="text-sm">
					<td class="pr-4">Location</td>
					<td class="py-2">5 minutes from Exit No. 6 of Gangnam Station (Shinbundang subway line)</td>
				</tr>

				<tr class="text-sm">
					<td class="pr-4">Tel</td>
					<td class="py-2">070-8146-8986</td>
				</tr>

				<tr class="text-sm">
					<td class="pr-4">Fax</td>
					<td class="py-2">02-545-0420</td>
				</tr>

				<tr class="text-sm">
					<td class="pr-4">E-mail</td>
					<td class="py-2">acc@himedi.com</td>
				</tr>

			</table>
		</div>

	</div>

</div>
<!-- Section 3-6 (end) -->
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
                
                <option selected>Nation</option>
                <option data-countryCode="KR" value="82">S. Korea (+82)</option>
                <option data-countryCode="US" value="1">USA (+1)</option>
                <option data-countryCode="GB" value="44">UK (+44)</option>
                
                <option disabled="disabled">Other Countries</option>
                <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                <option data-countryCode="AD" value="376">Andorra (+376)</option>
                <option data-countryCode="AO" value="244">Angola (+244)</option>
                <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                <option data-countryCode="AG" value="1268"
                  >Antigua &amp; Barbuda (+1268)</option
                >
                <option data-countryCode="AR" value="54">Argentina (+54)</option>
                <option data-countryCode="AM" value="374">Armenia (+374)</option>
                <option data-countryCode="AW" value="297">Aruba (+297)</option>
                <option data-countryCode="AU" value="61">Australia (+61)</option>
                <option data-countryCode="AT" value="43">Austria (+43)</option>
                <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                <option data-countryCode="BY" value="375">Belarus (+375)</option>
                <option data-countryCode="BE" value="32">Belgium (+32)</option>
                <option data-countryCode="BZ" value="501">Belize (+501)</option>
                <option data-countryCode="BJ" value="229">Benin (+229)</option>
                <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                <option data-countryCode="BW" value="267">Botswana (+267)</option>
                <option data-countryCode="BR" value="55">Brazil (+55)</option>
                <option data-countryCode="BN" value="673">Brunei (+673)</option>
                <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                <option data-countryCode="BI" value="257">Burundi (+257)</option>
                <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                <option data-countryCode="CA" value="1">Canada (+1)</option>
                <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                <option data-countryCode="CF" value="236"
                  >Central African Republic (+236)</option
                >
                <option data-countryCode="CL" value="56">Chile (+56)</option>
                <option data-countryCode="CN" value="86">China (+86)</option>
                <option data-countryCode="CO" value="57">Colombia (+57)</option>
                <option data-countryCode="KM" value="269">Comoros (+269)</option>
                <option data-countryCode="CG" value="242">Congo (+242)</option>
                <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                <option data-countryCode="HR" value="385">Croatia (+385)</option>
                <!-- <option data-countryCode="CU" value="53">Cuba (+53)</option> -->
                <option data-countryCode="CY" value="90">Cyprus - North (+90)</option>
                <option data-countryCode="CY" value="357">Cyprus - South (+357)</option>
                <option data-countryCode="CZ" value="420">Czech Republic (+420)</option>
                <option data-countryCode="DK" value="45">Denmark (+45)</option>
                <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                <option data-countryCode="EG" value="20">Egypt (+20)</option>
                <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                <option data-countryCode="EE" value="372">Estonia (+372)</option>
                <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                <option data-countryCode="FI" value="358">Finland (+358)</option>
                <option data-countryCode="FR" value="33">France (+33)</option>
                <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                <option data-countryCode="GA" value="241">Gabon (+241)</option>
                <option data-countryCode="GM" value="220">Gambia (+220)</option>
                <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                <option data-countryCode="DE" value="49">Germany (+49)</option>
                <option data-countryCode="GH" value="233">Ghana (+233)</option>
                <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                <option data-countryCode="GR" value="30">Greece (+30)</option>
                <option data-countryCode="GL" value="299">Greenland (+299)</option>
                <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                <option data-countryCode="GU" value="671">Guam (+671)</option>
                <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                <option data-countryCode="GN" value="224">Guinea (+224)</option>
                <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                <option data-countryCode="GY" value="592">Guyana (+592)</option>
                <option data-countryCode="HT" value="509">Haiti (+509)</option>
                <option data-countryCode="HN" value="504">Honduras (+504)</option>
                <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                <option data-countryCode="HU" value="36">Hungary (+36)</option>
                <option data-countryCode="IS" value="354">Iceland (+354)</option>
                <option data-countryCode="IN" value="91">India (+91)</option>
                <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                <!-- <option data-countryCode="IR" value="98">Iran (+98)</option> -->
                <option data-countryCode="IE" value="353">Ireland (+353)</option>
                <option data-countryCode="IL" value="972">Israel (+972)</option>
                <option data-countryCode="IT" value="39">Italy (+39)</option>
                <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                <option data-countryCode="JP" value="81">Japan (+81)</option>
                <option data-countryCode="JO" value="962">Jordan (+962)</option>
                <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                <option data-countryCode="KE" value="254">Kenya (+254)</option>
                <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                <!-- <option data-countryCode="KP" value="850">Korea - North (+850)</option> -->
                <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                <option data-countryCode="LA" value="856">Laos (+856)</option>
                <option data-countryCode="LV" value="371">Latvia (+371)</option>
                <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                <option data-countryCode="LR" value="231">Liberia (+231)</option>
                <option data-countryCode="LY" value="218">Libya (+218)</option>
                <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                <option data-countryCode="MO" value="853">Macao (+853)</option>
                <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                <option data-countryCode="MW" value="265">Malawi (+265)</option>
                <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                <option data-countryCode="MV" value="960">Maldives (+960)</option>
                <option data-countryCode="ML" value="223">Mali (+223)</option>
                <option data-countryCode="MT" value="356">Malta (+356)</option>
                <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                <option data-countryCode="MX" value="52">Mexico (+52)</option>
                <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                <option data-countryCode="MD" value="373">Moldova (+373)</option>
                <option data-countryCode="MC" value="377">Monaco (+377)</option>
                <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                <option data-countryCode="MA" value="212">Morocco (+212)</option>
                <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                <option data-countryCode="NA" value="264">Namibia (+264)</option>
                <option data-countryCode="NR" value="674">Nauru (+674)</option>
                <option data-countryCode="NP" value="977">Nepal (+977)</option>
                <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                <option data-countryCode="NE" value="227">Niger (+227)</option>
                <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                <option data-countryCode="NU" value="683">Niue (+683)</option>
                <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                <option data-countryCode="NO" value="47">Norway (+47)</option>
                <option data-countryCode="OM" value="968">Oman (+968)</option>
                <option data-countryCode="PK" value="92">Pakistan (+92)</option>
                <option data-countryCode="PW" value="680">Palau (+680)</option>
                <option data-countryCode="PA" value="507">Panama (+507)</option>
                <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                <option data-countryCode="PE" value="51">Peru (+51)</option>
                <option data-countryCode="PH" value="63">Philippines (+63)</option>
                <option data-countryCode="PL" value="48">Poland (+48)</option>
                <option data-countryCode="PT" value="351">Portugal (+351)</option>
                <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                <option data-countryCode="QA" value="974">Qatar (+974)</option>
                <option data-countryCode="RE" value="262">Reunion (+262)</option>
                <option data-countryCode="RO" value="40">Romania (+40)</option>
                <option data-countryCode="RU" value="7">Russia (+7)</option>
                <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                <option data-countryCode="SM" value="378">San Marino (+378)</option>
                <option data-countryCode="ST" value="239"
                  >Sao Tome &amp; Principe (+239)</option
                >
                <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                <option data-countryCode="SN" value="221">Senegal (+221)</option>
                <option data-countryCode="CS" value="381">Serbia (+381)</option>
                <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                <option data-countryCode="SG" value="65">Singapore (+65)</option>
                <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                <option data-countryCode="SO" value="252">Somalia (+252)</option>
                <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                <option data-countryCode="ES" value="34">Spain (+34)</option>
                <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                <option data-countryCode="SR" value="597">Suriname (+597)</option>
                <option data-countryCode="SD" value="249">Sudan (+249)</option>
                <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                <option data-countryCode="SE" value="46">Sweden (+46)</option>
                <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                <!-- <option data-countryCode="SY" value="963">Syria (+963)</option> -->
                <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                <option data-countryCode="TJ" value="992">Tajikistan (+992)</option>
                <option data-countryCode="TH" value="66">Thailand (+66)</option>
                <option data-countryCode="TG" value="228">Togo (+228)</option>
                <option data-countryCode="TO" value="676">Tonga (+676)</option>
                <option data-countryCode="TT" value="1868"
                  >Trinidad &amp; Tobago (+1868)</option
                >
                <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                <option data-countryCode="TR" value="90">Turkey (+90)</option>
                <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                <option data-countryCode="TC" value="1649"
                  >Turks &amp; Caicos Islands (+1649)</option
                >
                <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                <option data-countryCode="UG" value="256">Uganda (+256)</option>
                <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                <option data-countryCode="UZ" value="998">Uzbekistan (+998)</option>
                <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                <option data-countryCode="VG" value="1">Virgin Islands - British (+1)</option>
                <option data-countryCode="VI" value="1">Virgin Islands - US (+1)</option>
                <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                

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
	<!--.entry-content-->

</article>