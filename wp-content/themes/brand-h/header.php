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
		}

		.swiper-scrollbar {
			bottom: 15px !important;
			margin-left: 2em;
			width: 90% !important;
		}

		.swiper-scrollbar-drag {
			background: #ffffff;
		}

		.chartTrigCont button:first-child {
			text-shadow: 0px 2px 5px #777
		}

		.endCont {
			background-image: url("<?php bloginfo('template_directory') ?>/img/endCont.jpg");
		}

		.overlay {
			background: #00000030;
		}

		.active {
			display: inline-block !important;
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
	<header class="flex bg-white items-center shadow" style="z-index: 50; height:65px;">
		<!-- Logo (start) -->
		<div class="flex items-center w-4/5 h-full">
			<a href="<?php echo home_url(); ?>"><img class="w-4/5 float-right" src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt=""></a>
		</div>
		<!-- Logo (end) -->
		<!-- Nav Menu (start) -->
		<div class="flex text-center items-center w-1/5 h-full">
			<nav class="items-center">
				<div class="mx-auto sm:pl-24 sm:pr-0 pl-5 pr-5">
					<button class="text-4xl items-center" style="color: #646464;">
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