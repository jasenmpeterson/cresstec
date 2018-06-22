<?php
    function getPartsDatabaseChildren($post_id) {
	    $children_args = array(
		    'post_parent' => $post_id,
		    'post_type' => 'page',
		    'numberposts' => -1,
		    'post_status' => 'publish',
		    'orderby' => 'menu_order',
		    'order' => 'ASC'
	    );
	    $children = get_children($children_args);
	    $output = null;
	    if(!empty($children)) {
	        echo '<ul class="collapsible-menu">';
		    foreach($children as $child) {
			    $pages = get_pages('child_of=' . $child->ID);

			    if($pages) {
				    echo '<li class="parent collapsible-trigger"><span>'.$child->post_title.'</span>';
                } else {
				    echo '<li><a href="'.get_permalink($child->ID).'">' . $child->post_title .'</a>';
                }

			    getPartsDatabaseChildren($child->ID);
		    }
		    echo '</li>';
		    echo '</ul>';
	    }
    }
?>
<div class="column is-3">
	<aside class="products--sidebar sidebar">
        <div class="aside--inner">
            <h5><a href="<?php get_permalink(48); ?>">Parts Database</a></h5>
            <a href="<?php echo get_permalink(50); ?>"><?php echo get_the_title(50); ?></a>
	        <?php
	            getPartsDatabaseChildren(48);
	        ?>
        </div>
    </aside>
</div>