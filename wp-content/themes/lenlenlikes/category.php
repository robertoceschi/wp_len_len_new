<?php
    /**
     * The template for displaying Category pages.
     *
     * Learn more: http://codex.wordpress.org/Template_Hierarchy
     *
     */




get_header(); ?>



<div class="archive-header">
    <?php if (is_category()) { ?>
        <h2 class="entry-title"> <?php _e('Category: ', 'lenlenlikes');
            single_cat_title(); ?></h2>
    <?php
    } elseif (is_tag()) {
        ?>
        <h2 class="entry-title"><?php _e('Posts Tagged as: ', 'lenlenlikes');
            single_tag_title(); ?></h2>
    <?php
    } elseif (is_month()) {
        ?>
        <h2 class="entry-title"><?php _e('Monthly Archives of:  ', 'lenlenlikes');
            the_time('F Y'); ?></h2>
    <?php }; ?>
</div>

<!--Start Main Content-->
<div id="content" >

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
                    <a href="<?php the_permalink(); ?>" class="thumb"><?php the_post_thumbnail('homepage-thumb'); ?></a>
                </div>
            </article>

        <?php endwhile; else: ?>
            // no posts found
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>