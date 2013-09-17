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

    <div id="page_post_content">
        <!--Start Page/Post Content-->
        <article id="" class="post">
            <header class="entry-header">
                <div class="entry-date"><?php the_date('Y-m-d', '<h4>', '</h4>'); ?></div>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
             </header>
            <!-- end .entry-header -->
                <div class="entry-content">
                    <div class="image_text">
                        <a href="<?php the_permalink(); ?>" class="thumb"><?php the_post_thumbnail('homepage-thumb_big'); ?></a>
                        <p class="post_text">
                        <?php the_content(); ?>
                        </p>
                    </div>
                </div>



            <footer class="entry-meta">
                <div class="postinfo-wrap">
                    <div class="category">
                    CATEGORY:<?php the_category() ;?>
                    </div>
                    <div class="tags">
                        TAGS:<?php the_tags();  ?>
                    </div>
                </div>
                <button class="share-btn">Share this</button>
            </footer>
        </article>



    </div>
    <!--End Page/Post Content-->

<?php endwhile; else: ?>
    // no posts found
<?php endif; ?>


<?php get_footer(); ?>