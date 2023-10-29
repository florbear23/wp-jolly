<?php

define ('THEME_NAME',		'JollyGroup' );
define ('THEME_FOLDER',		'JollyGroup' );
define ('THEME_VER',		'1.0.0'  );

if ( ! isset( $content_width ) ) $content_width = 618;

// Main Functions
require_once ( get_template_directory() . '/framework/functions/theme-functions.php');
require_once ( get_template_directory() . '/framework/functions/common-scripts.php' );
require_once ( get_template_directory() . '/framework/functions/mega-menus.php'     );
require_once ( get_template_directory() . '/framework/functions/pagenavi.php'       );
require_once ( get_template_directory() . '/framework/functions/breadcrumbs.php'    );
require_once ( get_template_directory() . '/framework/functions/tie-views.php'      );
require_once ( get_template_directory() . '/framework/functions/translation.php'    );
require_once ( get_template_directory() . '/framework/widgets.php'                  );
require_once ( get_template_directory() . '/framework/admin/framework-admin.php'    );
require_once ( get_template_directory() . '/framework/shortcodes/shortcodes.php'    );
require_once ( get_template_directory() . '/framework/admin/remove-everything.php'  );
require_once ( get_template_directory() . '/framework/admin/wp-override.php'   		);

if( tie_get_option( 'live_search' ) )
	require_once ( get_template_directory() . '/framework/functions/search-live.php');

if( !tie_get_option( 'disable_arqam_lite' ) )
	require_once ( get_template_directory() . '/framework/functions/arqam-lite.php');

// Homepage Banner



function bannerSection_shortcode() {
    $page_id = get_post(5);
	$bannerslider = get_field("bannerslider", $page_id);
		foreach ($bannerslider as $sm) {
				$bannerslider_all .= '
				<div class="contentContainer" style="background: #ffffff url('.$sm['bg_picture'].') center center/cover no-repeat;">
					<div class="contentArea">
						<h2>'.$sm['tittle_1'].'</h2>
						<img src="'.$sm['company_logo'].'" alt="logo">
						<p>'.$sm['sub_text'].'</p>
						<a href="'.$sm['slider_button_link'].'">'.$sm['slider_button_text'].'</a>
					</div>
				</div>
				';
			}
		

    return '
		<section class="bannerSection" >
			<div class="bannerContainer"  id="#section-banner">
				'.$bannerslider_all.'
			</div>
		</section>
	';
}
add_shortcode( 'bannerSection', 'bannerSection_shortcode' );

function videoSection_shortcode() {
    $page_id = get_post(5);
	$product_main_title = get_field("product_main_title", $page_id);
	$product_sub_tittle = get_field("product_sub_tittle", $page_id);
	$product_video = get_field("product_video", $page_id);
	

    return '
		<section class="videoArea" style="background: #ffffff url(/wp-content/uploads/2023/10/Video-Part-BG.png) center center/cover no-repeat;">
			<div class="videoAreaContainer">
				<h2>'.$product_main_title.'</h2>
				<p>'.$product_sub_tittle.'</p>
				<div class="mainVideo">
				'.$product_video.'
				</div>
			</div>
		</section>
	';
}
add_shortcode( 'videoSection', 'videoSection_shortcode' );

function aboutSection_shortcode() {
    $page_id = get_post(5);
	$about_main_tittle = get_field("about_main_tittle", $page_id);
	$about_sub_tittle = get_field("about_sub_tittle", $page_id);
	$about__button_name = get_field("about__button_name", $page_id);
	$about_button_link = get_field("about_button_link", $page_id);


    return '
		<section class="aboutUsSection">
			<div class="aboutUsContainer">
				<h2>'.$about_main_tittle.'</h2>
				<p>'.$about_sub_tittle.'</p>
				<a href="'.$about_button_link.'">'.$about__button_name.'</a>
			</div>
		</section>
	';
}
add_shortcode( 'aboutSection', 'aboutSection_shortcode' );

function otherCompanySection_shortcode() {
    $page_id = get_post(5);
	$other_company_section_tittle = get_field("other_company_section_tittle", $page_id);
	$other_company_card_container = get_field("other_company_card_container", $page_id);

	foreach ($other_company_card_container as $sm) {
		$other_company_card_container_all .= '
			<div class="companyBox"  style="background: #ffffff url('.$sm['back_ground_img'].') center center/cover no-repeat;">
					<h2>'.$sm['company_card_title'].'</h2>
					<a href="'.$sm['company_button_link'].'">'.$sm['company_button_text'].'</a>
			</div>
		';
	}


    return '
		<section class="otherCompanySection">
			<h2>'.$other_company_section_tittle.'</h2>
			<div class="otherCompanyContainer">
				'.$other_company_card_container_all.'
			</div>
		</section>
	';
}
add_shortcode( 'otherCompanySection', 'otherCompanySection_shortcode' );

function jollyCareSection_shortcode() {
    $page_id = get_post(5);
	$jolly_cares_main_tittle = get_field("jolly_cares_main_tittle", $page_id);
	$jolly_care_sub_ = get_field("jolly_care_sub_", $page_id);
	$jolly_care_bg_banner = get_field("jolly_care_bg_banner", $page_id);
	$jolly_care_slider_container = get_field("jolly_care_slider_container", $page_id);
	foreach ($jolly_care_slider_container as $sm) {
		$jolly_care_slider_container_all .= '
			<div class="sliderBox">
				<img src="'.$sm['slider_img'].'" alt="">
				<h2>'.$sm['slider_text'].'</h2>
			</div>
		';
	}

    return '
		<section class="jollyCaresSection">
			<div class="jollycaresContainer">
				<h2>'.$jolly_cares_main_tittle.'</h2>
				<p >'.$jolly_care_sub_.'</p>
				<div class="banner2" style="background: #ffffff url('.$jolly_care_bg_banner.') center center/cover no-repeat;"></div>
				<div class="sliderContainer1111">
					<div class="sliderArea">
						<div class="sliderContent">
							'.$jolly_care_slider_container_all.'
						</div>
					</div>
				</div>
			</div>
			</div>
		</section>

	';
}
add_shortcode( 'jollyCareSection', 'jollyCareSection_shortcode' );

function testimonialSection_shortcode() {
    $page_id = get_post(5);
	$testimonial_tittle = get_field("testimonial_tittle", $page_id);
	$testimonia_slider = get_field("testimonia_slider", $page_id);

	foreach ($testimonia_slider as $sm) {
		$testimonia_slider_all .= '
			<div class="testimonialContent">
				<img src="'.$sm['testimonial_icon'].'" alt="">
				<p>'.$sm['testimonial_text'].'</p>
				<div class="testimonialName">
					<h2>'.$sm['testimonial_customer_name'].'</h2>
					<p>'.$sm['testimonial_customer_position'].'</p>
				</div>
			</div>
		';
	}

    return '
		<section class="testimonialSection">
			<h2>'.$testimonial_tittle.'</h2>
			<div class="testimonialContainer">
				'.$testimonia_slider_all.'
			</div>
		</section>
	';
}
add_shortcode( 'testimonialSection', 'testimonialSection_shortcode' );

function hiringSection_shortcode() {
    $page_id = get_post(5);
	$left_bg_picture = get_field("left_bg_picture", $page_id);
	$hiring_title1 = get_field("hiring_title1", $page_id);
	$hiring_tittle2 = get_field("hiring_tittle2", $page_id);
	$hiring_sub = get_field("hiring_sub", $page_id);
	$hiring_button_text = get_field("hiring_button_text", $page_id);
	$hiring_button_link = get_field("hiring_button_link", $page_id);

    return '
		<section class="hiringSection">
			<div class="hiringContainer">
				<div class="hiringCol" style="background: #ffffff url('.$left_bg_picture.';"></div>
				<div class="hiringCol">
					<h2>'.$hiring_title1.'</h2>
					<h3>'.$hiring_tittle2.'</h3>
					<div class="border"></div>
					<p>'.$hiring_sub.'</p>
					<a href="'.$hiring_button_link.'">'.$hiring_button_text.'</a>
				</div>
			</div>
		</section>

	';
}
add_shortcode( 'hiringSection', 'hiringSection_shortcode' );

function ourBlogSection_shortcode() {
    $page_id = get_post(5);
	$ourblogs_tittle = get_field("ourblogs_tittle", $page_id);
	$ourblogs_sub = get_field("ourblogs_sub", $page_id);
	$ourblogs_card_container = get_field("ourblogs_card_container", $page_id);
	$ourblogs_button_name = get_field("ourblogs_button_name", $page_id);
	$ourblogs_link = get_field("ourblogs_link", $page_id);
	foreach ($ourblogs_card_container as $sm) {
		$ourblogs_card_container_all .= '
			<div class="ourBlogCard">
				<img src="'.$sm['ourblogs_card_picture'].'" alt="">
				<div class="ourBlogCardContent">
					<h2>'.$sm['ourblogs_card_tittle'].' Here</h2>
					<p>'.$sm['ourblogs_date_text'].'</p>
					<p>'.$sm['ourblogs_card_sub'].'</p>
					<a href="'.$sm['ourblogs_card_button_link'].'">'.$sm['ourblogs_card_button_name'].'</a>
				</div>
			</div>
		';
	}

    return '
		<section class="ourBlogSection">
			<h2>'.$ourblogs_tittle.'</h2>
			<p>'.$ourblogs_sub.'</p>
			<div class="ourBLogContainer">
				'.$ourblogs_card_container_all.'
			</div>
			<a href="'.$ourblogs_link.'">'.$ourblogs_button_name.'</a>
		</section>

	';
}
add_shortcode( 'ourBlogSection', 'ourBlogSection_shortcode' );

function questionSection_shortcode() {
    $page_id = get_post(5);
	$contact_section_container = get_field("contact_section_container", $page_id);
	foreach ($contact_section_container as $sm) {
		$contact_section_container_all .= '
			<div class="questionBox">
				<img src="'.$sm['contact_section_icon'].'" alt="">
				<div class="questionBoxContent">
					<h2>'.$sm['contact_section_tittle'].'</h2>
					<p>'.$sm['contact_section_sub'].'</p>
				</div>
			</div>
		';
	}

    return '
		<section class="questionSection">
			<div class="questionContainer">
				'.$contact_section_container_all.'
			</div>
		</section>

	';
}
add_shortcode( 'questionSection', 'questionSection_shortcode' );


function footertop_shortcode() {
    $page_id = get_post(5);
	$footer_col_1_logo = get_field("footer_col_1_logo", $page_id);
	$footer_col_1_cta = get_field("footer_col_1_cta", $page_id);
	$footer_shop_container = get_field("footer_shop_container", $page_id);
	$footer_col_2_nav = get_field("footer_col_2_nav", $page_id);
	$footer_col_3_title = get_field("footer_col_3_title", $page_id);
	$footer_col_3_sub = get_field("footer_col_3_sub", $page_id);
	
	foreach ($footer_col_1_cta as $sm) {
		$footer_col_1_cta_all .= '
		<div class="footer-cta">
			<div class="ctaLeft"><img src="'.$sm['footer_icon'].'" alt=""></div>
			<div class="ctaright"><a href="">'.$sm['footer_cta_text'].'</a></div>
		</div>
		';
	}

	foreach ($footer_col_2_nav as $sm) {
		$footer_col_2_nav_all .= '
			<li><a href="'.$sm['footer_nav_link'].'">'.$sm['footer_nav_name'].'</a></li>
		';
	}

    return '
		<div class="footer-top">
			<div class="footer-top-container">
				<div class="footerTopCol">
					<img src="'.$footer_col_1_logo.'" alt="">
					'.$footer_col_1_cta_all.'
					<div class="shopContainer">
						'.$footer_shop_container_all.'
					</div>
				</div>
				<div class="footerTopCol">
					<ul>
						'.$footer_col_2_nav_all.'
					</ul>
				</div>
				<div class="footerTopCol">
					<h2>'.$footer_col_3_title.'</h2>
					<p>'.$footer_col_3_sub.'</p>
					'.do_shortCode('[contact-form-7 id="91" title="news letter"]');'
				</div>
			</div>
		</div>
	';
}
add_shortcode( 'footertop', 'footertop_shortcode' );

function footerBootom_shortcode() {
    $page_id = get_post(5);
	$hallmark_banner2_subtext = get_field("banner2_subtext", $page_id);

    return '
		<div class="footer-bottom">
			<div class="footer-bottom-container">
				<p>© 2023 JOLLY PLASTIC MOLDING CORPORATION. ALL RIGHTS RESERVED.</p>
				<a href="#"><img src="/wp-content/uploads/2023/10/itworks_logo.png" alt=""></a>
			</div>
		</div>
	';
}
add_shortcode( 'footerBootom', 'footerBootom_shortcode' );

function headerIcons_shortcode() {
    $page_id = get_post(5);
	$header_icons_container = get_field("header_icons_container", $page_id);

	foreach ($header_icons_container as $sm) {
		$header_icons_container_all .= '
			<a href="'.$sm['icon_header_link'].'"><img src="'.$sm['icons_header'].'" alt=""></a>
		';
	}

    return '
	<div class="headerSocialIcon">
		'.$header_icons_container_all.'
	</div>
	';
}
add_shortcode( 'headerIcons', 'headerIcons_shortcode' );
?>