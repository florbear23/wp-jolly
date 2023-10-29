	<div class="clear"></div>
	<?php
		if ( is_front_page() ):
			echo "<!------ Remove Container ------>";
		else:
			echo '</div><!-- .container /-->';
		endif
	?>

<?php tie_banner('banner_bottom' , '<div class="e3lan e3lan-bottom">' , '</div>' ); ?>

<?php get_sidebar( 'footer' ); ?>				
<div class="clear"></div>


<?= do_shortcode('[footertop]'); ?>








</div><!-- .inner-Wrapper -->
<?= do_shortcode('[footerBootom]'); ?>
</div><!-- #Wrapper -->

</div><!-- .Wrapper-outer -->

<?php if( tie_get_option('footer_top') ): ?>
	<div id="topcontrol" class="fa fa-angle-up" title="<?php _eti( 'Scroll To Top' ); ?>"></div>
<?php endif; ?>
<div id="fb-root"></div>
<?php wp_footer();?>

<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/third-party/slick-1.5.9/slick/slick.min.js"></script>
</body>

<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('.bannerContainer').slick ({
			arrows: false,
			dots: false,
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			fade: true,
			autoplaySpeed: 5000,
		});
	});

	jQuery(document).ready(function(){
		jQuery('.sliderContent').slick ({
			centerMode: false,
			arrows: true,
			dots: false,
			infinite: true,
			speed: 300,
			slidesToShow: 5,
			slidesToScroll:5 ,
			autoplay: false,
			fade: false,
			autoplaySpeed: 5000,
		});
	});

	jQuery(document).ready(function(){
		jQuery('.testimonialContainer').slick ({
			centerMode: false,
			arrows: false,
			dots: true,
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			slidesToScroll:1 ,
			autoplay: false,
			fade: false,
			autoplaySpeed: 5000,
		});
	});

</script>

</html>