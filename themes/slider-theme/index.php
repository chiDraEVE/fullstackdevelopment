<?php

get_header();

?>
<div class="slider-track">

<?php while ( have_posts() ) : the_post(); ?>

    <article class="slide">
        <div class="slider-container">
            <div class="slider-content">
                <?php
                    the_title( '<h2 class="entry-title">', '</h2>' );
                    the_excerpt();
                ?>
            </div>
            <div class="slider-image">
                <?php the_post_thumbnail('large'); ?>
            </div>
        </div>

    </article>

<?php endwhile; ?>

</div>

<?php
get_footer();
?>