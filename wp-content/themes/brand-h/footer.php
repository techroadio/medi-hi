<?php

/*
		This is the template for the footer
		
		@package sunsettheme
	*/

?>

<footer class="text-center mt-20">
	<!-- Footer links (start) -->
	<div class="text-3xl">
		<a href="#">Terms of Use</a> .
		<a href="#">Privacy Policy</a>
	</div>
	<!-- Footer links (end) -->

	<!-- Address (start) -->
	<p class="text-gray-500">
		10, Anson Road, #34-10, International Plaza, Singapore 079903
	</p>
	<!-- Address (end) -->

	<!-- Copyright notice (start) -->
	<p class="text-gray-500">
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
</body>

</html>