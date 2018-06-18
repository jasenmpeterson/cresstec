<?php get_header(); ?>
<div class="columns is-gapless">
	<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/pages/products/sidebar' );
			}
		}
	?>
</div>
<?php get_footer(); ?>