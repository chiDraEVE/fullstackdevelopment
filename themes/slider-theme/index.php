<?php

get_header();

?>
<div class="slider-track">

<?php while ( have_posts() ) : the_post(); ?>

    <article class="slide">
        <div class="slider-container">
        <?php
            the_title( '<h2 class="entry-title">', '</h2>' );
            the_excerpt();

            the_post_thumbnail('large');
        ?>
        </div>

    </article>

<?php endwhile; ?>

</div>

<?php
get_footer();
?>