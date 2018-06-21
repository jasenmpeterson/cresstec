<?php
/**
 * Display regular search page with
 * title and regular listing sorted by date
 *
 * @package Cresstec
 */

get_header();
?>
<?php
if ( have_posts() ) {
	?>
	<div class="page--content--wrap search--content--wrap">
	<header>
		<h1>
			<?php
			// translators: 1: Search Query.
			printf( esc_html__( 'Search Results for: %s', 'cresstec' ), '<span>' . get_search_query() . '</span>' );
			?>
		</h1>
	</header>
	<?php
		while ( have_posts() ) {
			the_post();
			get_template_part( 'template-parts/search-results/content' );
		};

		the_posts_pagination(
			array(
				'screen_reader_text' => ' ',
			)
		);
	?>
	</div>
<?php
} else {
  get_template_part( 'template-parts/listing/articles/empty' );

};

get_footer();
