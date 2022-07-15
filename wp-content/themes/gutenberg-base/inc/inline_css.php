<?php 
	$main_header_color = get_theme_mod('finaltheme_header_color', '#00235A');

	$main_footer_color = get_theme_mod('finaltheme_footer_color', '#001940');

	$secondary_footer_color = get_theme_mod('finaltheme_secondary_footer_color', '#00122F'); 

	$second_main_color =  get_theme_mod('finaltheme_second_main_color', '#FF5E14');

	$inline_styles = "

		.header-bottom-container, 
		.mobile-navigation-container, 
		.hero-service,
		.team__dark-theme,
		.pricing-plan, 
		.sliders::-webkit-scrollbar-thumb {
			background-color: {$main_header_color};
		}

		.page-numbers {
			color: {$main_header_color};
		}

		.main-footer,
		body.page-template-service .dark-bg, 
		.pricing-page {
			background-color: {$main_footer_color};
		}

		.site-credits {
			background-color: {$secondary_footer_color};
		}

		.base-button, 
		.footer-column .widget_block a,
		#hero-figure__404 .widget_block a,
		.partners,
		.tab-slider__container, 
		.__main, 
		.pagination .nav-links > a {
			background-color: {$second_main_color};
		}

		.site-title, 
		.site-subtitle,
		border,
		.charts__value-percentage.charts__dark-home,
		.charts__value-percentage.charts__dark-service,
		.charts__value-percentage.charts__dark-process,
		.form-icon,
		.current {
			color: {$second_main_color};
		}

		.about__card, 
		.project-card {
			border-bottom:4px solid {$second_main_color};
		}

		.about__paragraph,
		.wp-block-quote {
			border-left: 3px solid {$second_main_color};
		}

		.charts__circle {
			stroke: {$second_main_color};
		}

		.base-button,
		.wp-block-button__link,
		.pagination .nav-links > a  {
			box-shadow: 5px 5px 9px -3px {$second_main_color};
		}

		.base-button:hover,
		.wp-block-button__link:hover,
		.pagination .nav-links > a:hover,
		#hero-figure__home a:hover,
		#hero-figure__about a:hover  {
			box-shadow: 5px 5px 20px -3px {$second_main_color};
		}

		#hero-figure__home a:hover,
		#hero-figure__about a:hover {
			background-color: {$second_main_color};
			border: 3px solid {$second_main_color};
	}

		.base-button:active,
		.wp-block-button__link:active,
		.pagination .nav-links > a:active,
		 #hero-figure__home a:active,
		 #hero-figure__about a:active {
			box-shadow: 0px 4px 8px {$second_main_color};
		}





	";
?>