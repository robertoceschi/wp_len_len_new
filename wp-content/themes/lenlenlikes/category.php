<?php
    /**
     * The template for displaying Category pages.
     *
     * Learn more: http://codex.wordpress.org/Template_Hierarchy
     *
     */




get_header(); ?>

<h1>Category: <?php single_cat_title();?> </h1>




    <?php get_template_part ('content', 'post'); ?>




<?php get_footer(); ?>?>