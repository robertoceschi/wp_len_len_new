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
    <div class="item">
        <!--Link zum Post -->
        <a href="<?php the_permalink(); ?>" class="thumb"><?php the_post_thumbnail('thumbnail'); ?></a>
    </div> <?php endwhile; ?>
    </div>
</div>
    </div>

<?php get_footer(); ?>