<?php

wp_head();

while ( have_posts() ) {
    the_post();
    the_title( '<h1 class="entry-title">', '</h1>' );
    the_content();
    echo '<div class="slider-container">';
    echo '</div>';
}

wp_footer();