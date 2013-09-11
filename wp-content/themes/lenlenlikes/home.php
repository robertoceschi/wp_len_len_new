<?php
/**
 * Landing Page für alle Artikel => Blog Archive
 *
 */


get_header(); ?>
<?php

if (have_posts()) : while (have_posts()) : the_post(); ?>



    <!--Start Main Content-->
    <div id="site-content">
        Blog Archive soll angezeigt werden:<br>Alle Kategorien (Filter by Tags) -The latest 50 posts -Monthly Archive
    </div>
    <!--End Main Content-->

<?php endwhile; else: ?>
    // no posts found
<?php endif; ?>


<?php get_footer(); ?>?>