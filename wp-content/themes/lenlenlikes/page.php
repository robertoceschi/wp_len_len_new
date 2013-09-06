<?php
    /**
     * Template Name: Home Page
     *
     */


    get_header();
    if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php endwhile; else: ?>
        // no posts found
    <?php endif; ?>


<?php get_footer(); ?>
