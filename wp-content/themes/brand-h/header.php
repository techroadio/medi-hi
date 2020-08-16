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
		.medi-cover {
			background-image: url("<?php bloginfo('template_directory') ?>/img/main_cover.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			min-height: 520px;
		}

		.endCont {
			width: 100%;
			height: 500px;
			background-image: url("<?php bloginfo('template_url') ?>/img/bg-end.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}

		.swiper-container {
			cursor: pointer;
			min-height: 340px;
		}

		.swiper-scrollbar {
			bottom: 15px !important;
		}

		.swiper-scrollbar-drag {
			background: #ffffff;
		}
	</style>

</head>

<body <?php body_class(); ?>>

	<!-- Header (start) -->
	<header class="flex h-30 bg-white">
		<!-- Logo (start) -->
		<div class="w-3/4">
			<img class="w-3/4 mx-auto" src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="">
		</div>
		<!-- Logo (end) -->
		<!-- Nav Menu (start) -->
		<div class="w-1/4">
			<nav class="flex items-center justify-between flex-wrap p-6">
				<div class="block">
					<button class="flex text-4xl items-center px-5 py-3 border rounded text-gray-700 border-gray-700">
						<svg class="fill-current h-5 w-5" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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