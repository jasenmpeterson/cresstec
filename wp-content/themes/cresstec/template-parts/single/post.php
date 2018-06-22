<?php
/**
 * Single Post
 *
 * @package Cresstec\Template_Parts\Single
 */

use Cresstec\Theme\Utils as Utils;

$images = new Utils\Images();
$image  = $images->get_post_image( 'full_width' );
$args = array(
	'numberposts' => 10,
	'offset' => 0,
	'category' => 0,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_type' => 'post',
	'post_status' => 'publish',
	'suppress_filters' => true
);

$recent_posts = wp_get_recent_posts( $args, ARRAY_A );

$date = get_the_date('M j, Y');

?>

<!-- Single Content Section -->
<section class="single" id="<?php echo esc_attr( $post->ID ); ?>">
      <div class="single__content content-style content-media-style">
          <div class="columns">
              <div class="column is-3">
                  <aside class="sidebar">
                      <div class="aside--inner">
                          <h5>Recent Posts</h5>
                          <?php
                          if(!empty($recent_posts)) {
	                          echo '<ul class="posts--list recent--posts">';
	                          foreach($recent_posts as $recent_post) {
	                              //print_r($recent_post);
		                          echo '<li><a href="'.get_permalink($recent_post['ID']).'">' . get_the_title($recent_post['ID']) .'<span class="date">'.get_the_date('M j, Y').'</span></a>';
	                          }
	                          wp_reset_query();
	                          echo '</li>';
	                          echo '</ul>';
                          }
                          ?>
                      </div>
                  </aside>
              </div>
              <div class="column is-9">
                  <section class="post--wrap">
                      <header>
                          <h1 class="single__title">
			                  <?php the_title(); ?>
                              <span class="date"><?php  echo $date; ?></span>
                          </h1>
                      </header>
	                  <?php the_content(); ?>
                  </section>
              </div>
          </div>
    </div>
    <?php require locate_template( 'template-parts/parts/google-rich-snippets.php' ); ?>
</section>
