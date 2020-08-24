<?php

/*
		This is the template for the footer
		
		@package sunsettheme
	*/

?>

<footer class="text-center mt-20 font-roboto ">
	<!-- Footer links (start) -->
	<!-- <h2 class="px-8 font-bold text-left font-size-24 font-roboto leading-relaxed " style="font-size:22px"> -->
	<div class="text-2xl mb-5  font-roboto ">
		<a href="https://himedi.com/en?terms=true" class="text-gray-600 font-bold ">Terms of Use</a> .
		<a href="https://himedi.com/en?privacy=true" class="text-gray-600 font-bold">Privacy Policy</a>
	</div>
	<!-- Footer links (end) -->

	<!-- Address (start) -->
	<p class="text-gray-500 font-roboto " style="font-size:13px">
		10, Anson Road, #34-10, International Plaza,<br class="lg:hidden"> Singapore 079903
	</p>
	<!-- Address (end) -->

	<!-- Copyright notice (start) -->
	<p class="text-gray-500 mt-8 mb-32">
		© HIMEDI SEA PTE. LTD.
	</p>
	<!-- Copyright notice (end) -->


</footer> 

<?php wp_footer(); ?>

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
	var mySwiper = new Swiper('.swiper-container', {
		// Optional parameters
		loop: false,

		// If we need pagination
		// pagination: {
		// 	el: '.swiper-pagination',
		// },

		//Navigation arrows
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},

		// And if we need scrollbar
		scrollbar: {
			el: '.swiper-scrollbar',
		},
	});

	jQuery(document).ready(
		function() {

			for (let i = 0; i < 3; i++) {
				const chart = jQuery('.chart' + i);
				const trig = jQuery('.chartTrig' + i);
				chart.hide();

				trig.on('click', function() {
					jQuery(this).addClass('active').siblings().removeClass('active');
					jQuery(this).addClass('border-2').siblings().removeClass('border-2');
					if (trig.hasClass('active')) {
						chart.addClass('active').siblings().removeClass('active');
					}
				});
			}

			jQuery("form input").on('invalid', function() {
				$('input,textarea,radio').addClass('border border-red-500');
			});
		}
	);
</script>
<script>



	// start logo

	function myFunction1(){
		
	const popUpBgElement = document.getElementById("pop_up_bg");
	const popUpElement = document.getElementById("popup");
	const cancelBtn = document.getElementById("popup_cancel_btn");
	const button = document.getElementById("click_me_btn");
	let isPopUpShowing = false;

	const popUpHandeler = ()=>{
		isPopUpShowing = !isPopUpShowing;
		if(isPopUpShowing){
			popUpBgElement.classList.remove("hidden");
			popUpElement.classList.remove("hidden");
			cancelBtn.classList.remove("hidden");
		}else{
			popUpBgElement.classList.add("hidden");
			popUpElement.classList.add("hidden");
			cancelBtn.classList.add("hidden");
		}
	}

	//** Events */
	button.addEventListener('click', popUpHandeler);
	cancelBtn.addEventListener('click', popUpHandeler);
	}

	function myFunction2(){
		
		const popUpBgElement = document.getElementById("pop_up_bg");
		const cancelBtn = document.getElementById("popup_cancel_btn");

		const popUpElement = document.getElementById("popup2");
		const button = document.getElementById("click_me_btn2");
		let isPopUpShowing = false;
	
		const popUpHandeler = ()=>{
			isPopUpShowing = !isPopUpShowing;
			if(isPopUpShowing){
				popUpBgElement.classList.remove("hidden");
				popUpElement.classList.remove("hidden");
				cancelBtn.classList.remove("hidden");
			}else{
				popUpBgElement.classList.add("hidden");
				popUpElement.classList.add("hidden");
				cancelBtn.classList.add("hidden");
			}
		}
	
		//** Events */
		button.addEventListener('click', popUpHandeler);
		cancelBtn.addEventListener('click', popUpHandeler);
	}	

	function myFunction3(){
		
		const popUpBgElement = document.getElementById("pop_up_bg");
		const cancelBtn = document.getElementById("popup_cancel_btn");

		const popUpElement = document.getElementById("popup3");
		const button = document.getElementById("click_me_btn3");
		let isPopUpShowing = false;
	
		const popUpHandeler = ()=>{
			isPopUpShowing = !isPopUpShowing;
			if(isPopUpShowing){
				popUpBgElement.classList.remove("hidden");
				popUpElement.classList.remove("hidden");
				cancelBtn.classList.remove("hidden");
			}else{
				popUpBgElement.classList.add("hidden");
				popUpElement.classList.add("hidden");
				cancelBtn.classList.add("hidden");
			}
		}
	
		//** Events */
		button.addEventListener('click', popUpHandeler);
		cancelBtn.addEventListener('click', popUpHandeler);
	}	

	function myFunction4(){
		
		const popUpBgElement = document.getElementById("pop_up_bg");
		const cancelBtn = document.getElementById("popup_cancel_btn");

		const popUpElement = document.getElementById("popup4");
		const button = document.getElementById("click_me_btn4");
		let isPopUpShowing = false;
	
		const popUpHandeler = ()=>{
			isPopUpShowing = !isPopUpShowing;
			if(isPopUpShowing){
				popUpBgElement.classList.remove("hidden");
				popUpElement.classList.remove("hidden");
				cancelBtn.classList.remove("hidden");
			}else{
				popUpBgElement.classList.add("hidden");
				popUpElement.classList.add("hidden");
				cancelBtn.classList.add("hidden");
			}
		}
	
		//** Events */
		button.addEventListener('click', popUpHandeler);
		cancelBtn.addEventListener('click', popUpHandeler);
	}	

function success_cases_popup(){

	const popUpBgElement = document.getElementById("pop_up_bg");
	const popUpElement = document.getElementById("main_pop_up");
	const choleithiasisButton = document.getElementById("choleithiasis_button");
	let isPopUpShowing = false;

	const popUpHandeler = ()=>{
	isPopUpShowing = !isPopUpShowing;
	if(isPopUpShowing){
		popUpBgElement.classList.remove("hidden");
		popUpElement.classList.remove("hidden");
	}else{
		popUpBgElement.classList.add("hidden");
		popUpElement.classList.add("hidden");
	}
	}

	/** Events */
	choleithiasisButton.addEventListener('click', popUpHandeler);
	popUpBgElement.addEventListener('click', popUpHandeler);



}	




</script>
</body>

</html>