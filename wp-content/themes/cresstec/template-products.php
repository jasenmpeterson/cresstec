<?php
/**
 * Created by IntelliJ IDEA.
 * User: jasen
 * Date: 6/15/18
 * Time: 1:25 PM
 * Template Name: Products/Parts Template
 */
	get_header();
 ?>
	<div class="columns is-gapless">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/pages/products/sidebar' );
				get_template_part( 'template-parts/pages/products/content' );
			}
		}
		?>
	</div>
<?php
	get_footer();