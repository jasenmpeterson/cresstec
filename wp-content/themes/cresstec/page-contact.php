<?php

get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/pages/contact/content' );
	}
}

get_footer();
