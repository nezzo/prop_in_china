<?php
/**
 * Template Name: Page Servis
 *
 * @package Modality
 */
 
get_header();







 if ($modality_theme_options['social_section_on'] == '1') {
	get_template_part( 'social', 'section' );	
}
get_footer(); ?>



