<?php
/**
 * Home-Site
 *
 */


get_header(); ?>
<?php

if (have_posts()) : while (have_posts()) : the_post(); ?>
    <!--Bild wird geladen und mit CSS unsichtbar gemacht-->
    <div id="hidden_image">
        <img src="<?php the_field('main_image'); ?>" alt="Main Image Home-Site">
    </div>

    <!--Bild wird mit jQuery als Background-Image ins CSS geladen-->
    <div id="main_image">

        <!--Headline wird ausgegeben-->
        <h1 class="headline"><?php the_field('headline'); ?><br></h1>

        <!--Text unterhalb Headline wird ausgegeben-->
        <p><?php the_field('text'); ?></p>
        <!--Button zu den Artikel-->
        <a href="#content" title="Show Content"><span aria-hidden="true"
                                                      data-icon="&#xe003;"
                                                      class=" icon-arrow-down-alt1"></span></a>
    </div>
<?php endwhile; else: ?>
    // no posts found
<?php endif; ?>


<div id="content" class="container clearfix">
    <div id="site-content">
<?php
$linksPosts = new WP_Query('posts_per_page=6');
?>
<?php while ($linksPosts->have_posts()) :
    $linksPosts->the_post(); ?>
    <article id="post-<?php the_ID(); ?>" class="item">
        <div class="overlay">
            <header class="entry-header">
                <div class="featured-post"></div>
                <div class="entry-postformat"><a href="<?php the_permalink(); ?>"></a></div>
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf(
                        esc_attr__('Permalink to %s', 'renkon'), the_title_attribute('echo=0')
                    ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            </header>
            <!--end .entry-header -->
            <footer class="entry-meta">
                <div class="entry-date"><a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a></div>
                <div class="entry-comments">
                    <?php comments_popup_link(); ?>
                </div>
                <div class="view-post"><a href="<?php the_permalink(); ?>" title=""><?php _e('View Post', 'renkon') ?></a></div>
            </footer><!-- end .entry-meta -->


        </div>
        <!--Link zum Post -->
        <div class="thumb-wrap">
            <a href="<?php the_permalink(); ?>" class="thumb"><?php the_post_thumbnail('thumbnail'); ?></a>
        </div>
    </article> <?php endwhile; ?>
    </div>
</div>


<?php get_footer(); ?>