<?php
/**
 * Display regular index/home page
 *
 * @package Cresstec
 */

get_header();

get_template_part( 'template-parts/pages/home/hero' );
get_template_part( 'template-parts/pages/home/about' );
get_template_part( 'template-parts/pages/home/products' );

get_footer();
