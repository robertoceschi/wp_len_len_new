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
                    $linksPosts = new WP_Query();
                    $linksPosts->query('showposts=1&cat=7');
                ?>
                <?php while ($linksPosts->have_posts()) : $linksPosts->the_post(); ?>
                <div class="item">
                    <!--<img src="img/single-1.jpg" alt=""/>-->
                    <h4><a href="<?php if(get_post_meta($post->ID, "url", true)) echo get_post_meta($post->ID, "url", true); else the_permalink(); ?>"><?php the_title(); ?></a></h4>
                </div>


            </div>
    <?php endwhile; ?>
        </div>


<?php get_footer(); ?>
