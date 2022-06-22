<?php 
	$main_header_color = get_theme_mod('finaltheme_header_color', '#00235A');

	$main_footer_color = get_theme_mod('finaltheme_footer_color', '#001940');

	$secondary_footer_color = get_theme_mod('finaltheme_secondary_footer_color', '#00122F'); 

	$second_main_color =  get_theme_mod('finaltheme_second_main_color', '#FF5E14');

	$inline_styles = "

		.header-bottom-container, 
		.mobile-navigation-container, 
		.hero-service,
		.team-section,
		.pricing-plan {
			background-color: {$main_header_color};
		}

		.main-footer, 
		.pricing-page {
			background-color: {$main_footer_color};
		}

		.site-credits {
			background-color: {$secondary_footer_color};
		}

		.base-button, 
		.footer-column .widget_block a,
		.partners-section,
		.card-slider__container, 
		.__main {
			background-color: {$second_main_color};
		}

		.site-title, 
		.site-subtitle,
		border,
		.value-percentage bold-text {
			color: {$second_main_color};
		}

		.about-card {
			border-bottom:4px solid {$second_main_color};
		}

		.about__paragraph-container {
			border-left: 3px solid {$second_main_color};
		}

		.circle {
			stroke: {$second_main_color};
		}



	";
?>