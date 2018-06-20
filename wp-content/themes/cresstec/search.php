<?php
/**
 * Display regular search page with
 * title and regular listing sorted by date
 *
 * @package Cresstec
 */

get_header();

if ( have_posts() ) {
    
  while ( have_posts() ) {
    the_post();
    get_template_part( 'template-parts/search-results/content' );
  };

  the_posts_pagination(
    array(
        'screen_reader_text' => ' ',
    )
  );

} else {
  get_template_part( 'template-parts/listing/articles/empty' );

};

get_footer();
