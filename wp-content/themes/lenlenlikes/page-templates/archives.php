<?php

/*
Template Name: Archive Template
*/
/**
 *
 *
 *
 *
 */

get_header(); ?>


<div id="site-content" class="clearfix">




            <h1 class="entry-title"><?php the_title(); ?></h1>


        <div class="entry-content clearfix">
            <h3 class="archivepage-title"><?php _e('Filter by Tags', 'lenlenlikes') ?></h3>
            <div class="archive-tags clearfix">
                <?php wp_tag_cloud('orderby=count&number=50'); ?>
            </div><!-- end .archive-tags -->

            <h3 class="archivepage-title"><?php _e('The Latest 50 Posts', 'lenlenlikes') ?></h3>
            <ul class="latest-posts-list">
                <?php wp_get_archives('type=postbypost&limit=10'); ?>
            </ul><!-- end .latest-posts-list -->

            <h3 class="archivepage-title"><?php _e('The Monthly Archive', 'lenlenlikes') ?></h3>
            <ul class="monthly-archive-list">
                <?php wp_get_archives('type=monthly'); ?>
            </ul><!-- end .monthly-archive-list -->
        </div><!-- end .entry-content -->



</div><!-- end #site-content -->

</div><!-- end .content-wrap -->

<?php get_template_part( 'colophon' ); ?>

</div><!-- end .container -->
    <?php get_footer(); ?>


