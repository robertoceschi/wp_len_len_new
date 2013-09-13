<?php
/**
 * The template for displaying search results.
 *
 * @package Renkon
 * @since   Renkon 1.0
 */

get_header(); ?>

<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package    WordPress
 * @subpackage Twenty_Thirteen
 * @since      Twenty Thirteen 1.0
 */

get_header(); ?>

<div class="archive-header">

<?php if (have_posts()) : ?>

    <h2><?php echo $wp_query->found_posts; ?> <?php printf(__('Search Results for: %s', 'lenlenlikes'), get_search_query()); ?></h2>
    </div>

<?php endif; ?>

    <!--Start Main Content-->
    <div id="content">

        <div id="site-content">

            <?php

            if (have_posts()) : while (have_posts()) : the_post();
                ?>

                <!-- end .entry-header -->
                <article id="post-0" class="item">
                    <div class="overlay">
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title=""
                                                       rel="bookmark"><?php the_title(); ?></a></h2>
                        </header>
                        <!--<footer class="entry-meta">
                                        <div class="entry-date"><a href="<?php the_permalink(); ?>"><?php echo get_the_date(
                                                ); ?></a></div>
                                        <div class="entry-comments">
                                            <?php comments_popup_link(); ?>
                                        </div>
                                        <div class="view-post"><a href="<?php the_permalink(); ?>" title=""><?php _e(
                                                    'View Post', 'renkon'
                                                ) ?></a></div>
                                    </footer>-->
                    </div>
                    <!--Link zum Post -->
                    <div class="thumb-wrap">
                        <a href="<?php the_permalink(); ?>" class="thumb"><?php the_post_thumbnail(
                                'homepage-thumb'
                            ); ?></a>
                    </div>
                </article>

            <?php endwhile; else: ?>
                // no posts found
            <?php endif; ?>
        </div>
    </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>