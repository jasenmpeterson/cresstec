<?php
/**
 * Created by IntelliJ IDEA.
 * User: jasen
 * Date: 6/15/18
 * Time: 1:25 PM
 * Template Name: Parts Database
 */
get_header();
?>
	<div class="columns is-gapless">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/pages/parts-database/sidebar' );
				get_template_part( 'template-parts/pages/parts-database/content' );
			}
		}
		?>
	</div>
<?php
get_footer();