<?php
/**
 *  Template Name: Gallery Template
 *
 *
 */


get_header();

if (have_posts()) : while (have_posts()) : the_post(); ?>


<h2><?php the_title();?></h2>


    <h4><?php the_content();?></h4>


<?php endwhile; else: ?>
    // no posts found
<?php endif; ?>


<?php get_footer(); ?>