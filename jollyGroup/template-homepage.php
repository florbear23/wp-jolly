<?php 
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>


<?= do_shortcode('[bannerSection]') ?>
<?= do_shortcode('[videoSection]') ?>
<?= do_shortcode('[aboutSection]') ?>
<?= do_shortcode('[otherCompanySection]') ?>
<?= do_shortcode('[jollyCareSection]') ?>
<?= do_shortcode('[testimonialSection]') ?>
<?= do_shortcode('[hiringSection]') ?>
<?= do_shortcode('[ourBlogSection]') ?>
<?= do_shortcode('[questionSection]') ?>


<?php get_footer(); ?>