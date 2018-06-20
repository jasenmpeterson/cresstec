<div class="page--content--wrap search--content--wrap">
	<header>
		<h1>
			<?php
			// translators: 1: Search Query.
			printf( esc_html__( 'Search Results for: %s', 'cresstec' ), '<span>' . get_search_query() . '</span>' );
			?>
		</h1>
	</header>
    <article>
        <h3><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h3>
        <?php
            $excerpt = wp_trim_words( get_the_excerpt(), 20, '...');
            echo wpautop($excerpt);
        ?>
    </article>
</div>