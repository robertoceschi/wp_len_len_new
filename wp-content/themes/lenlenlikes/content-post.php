<?php
/**
 * The Template for displaying all single posts.
 *
 *
 *
 */

get_header(); ?>
<?php

if (have_posts()) : while (have_posts()) : the_post(); ?>



    <!--Start Main Content-->
    <article id="" class="post">
        <div class="entry-content">
            <?php the_date('Y-m-d', '<h4>', '</h4>'); ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <!-- end .entry-header -->

            <div class="thumb-wrap">
                <a href="<?php the_permalink(); ?>" class="thumb"><?php the_post_thumbnail('homepage-thumb'); ?></a>
            </div>
            <?php the_content(); ?>
        </div>
        Posted in:<?php the_category() ;?>

        <!-- Comments template wird geladen-->
        <?php comments_template(); ?>





    </article>
    <!--End Main Content-->

<?php endwhile; else: ?>
    // no posts found
<?php endif; ?>


<?php get_footer(); ?>