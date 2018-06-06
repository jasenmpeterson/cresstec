<?php

get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/pages/about/hero' );
		get_template_part( 'template-parts/pages/about/about' );
		get_template_part( 'template-parts/pages/about/nwboc' );
		get_template_part( 'template-parts/pages/about/staff' );
	}
}

get_footer();
