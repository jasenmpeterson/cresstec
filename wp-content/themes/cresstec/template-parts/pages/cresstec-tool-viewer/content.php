<div class="column is-9">
	<div class="page--content--wrap products cresstec--tool--viewer">
		<?php get_template_part('template-parts/quote-button/quote-button'); ?>
		<div class="inner--wrap">
			<h1 class="is-uppercase"><?php echo get_the_title(); ?></h1>
			<?php the_content(); the_post_thumbnail(); ?>
		</div>
	</div>
</div>