<?php

/*
		This is the template for the hedaer
		
		@package sunsettheme
	*/

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<title><?php bloginfo('name');
			wp_title(); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!--Begin tailwind-->
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--End tailwind-->
	<?php if (is_singular() && pings_open(get_queried_object())) : ?>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>

	<?php
	$custom_css = esc_attr(get_option('sunset_css'));
	if (!empty($custom_css)) :
		echo '<style>' . $custom_css . '</style>';
	endif;
	?>

	<style>
		.swiper-container {
			cursor: pointer;
			min-height: 340px;
		}

		.swiper-scrollbar {
			bottom: 15px !important;
			margin-left: 2em;
			width: 90% !important;
		}

		.swiper-scrollbar-drag {
			background: #ffffff;
		}

		.endCont {
			width: 635px;
			height: 500px;
			background-image: url("<?php bloginfo('template_directory') ?>/img/endCont.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}

		.overlay {
			background: #00000030;
		}

		.active {
			display: inline-block !important;
		}

		.applyBtn {
			border-radius: 10px;
		}

		.applyBtn:hover:after {
			content: '>';
		}

		.arrowAnimate {
			animation-name: bounce;
			animation-duration: 1.8s;
			animation-iteration-count: infinite;
		}

		@keyframes bounce {

			0%,
			20%,
			50%,
			80%,
			100% {
				transform: translateY(0px);
			}

			40% {
				transform: translateY(-15px);
			}

			60% {
				transform: translateY(-5px);
			}
		}
	</style>

</head>

<body <?php body_class(); ?>>

	<!-- Header (start) -->
	<header class="flex md:w-1/2 bg-white fixed h-24 items-center shadow" style="z-index: 50;">
		<!-- Logo (start) -->
		<div class="w-3/4">
			<img class="w-3/4 h-20 mx-auto" src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="">
		</div>
		<!-- Logo (end) -->
		<!-- Nav Menu (start) -->
		<div class="w-1/4">
			<nav class="flex items-center">
				<div class="block mx-auto pl-24">
					<button class="flex text-4xl items-center" style="color: #646464;">
						<svg class="fill-current h-10 w-10" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
							<title>Menu</title>
							<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
						</svg>
					</button>
				</div>
			</nav>
		</div>
		<!-- Nav Menu (end) -->
	</header>
	<!-- Header (end) -->