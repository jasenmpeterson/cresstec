<?php
/**
 * Single Post
 *
 * @package Cresstec\Template_Parts\Single
 */

use Cresstec\Theme\Utils as Utils;

$images = new Utils\Images();
$image  = $images->get_post_image( 'full_width' );
?>

<!-- Single Content Section -->
<section class="single" id="<?php echo esc_attr( $post->ID ); ?>">
    <div class="single__image" data-normal="<?php echo esc_url( $image['image'] ); ?>"></div>
      <div class="single__content content-style content-media-style">
      <div class="columns">
          <div class="column is-9">
              <header>
                  <h1 class="single__title">
			          <?php the_title(); ?>
                  </h1>
              </header>
	          <?php the_content(); ?>
          </div>
          <div class="column">
              Sidebar
          </div>
      </div>
    </div>
    <?php require locate_template( 'template-parts/parts/google-rich-snippets.php' ); ?>
</section>
