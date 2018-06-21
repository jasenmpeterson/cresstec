<article>
    <h3><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h3>
    <?php
        $excerpt = wp_trim_words( get_the_excerpt(), 20, '...');
        echo wpautop($excerpt);
    ?>
</article>
