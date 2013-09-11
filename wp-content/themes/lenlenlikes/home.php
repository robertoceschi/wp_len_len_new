<?php
/**
 * Landing Page für alle Artikel => Blog Archive
 *
 */


get_header(); ?>





    <!--Start Main Content-->
    <div id="site-content">
        Blog Archive soll angezeigt werden:<br>Alle Kategorien (Filter by Tags) -The latest 50 posts -Monthly Archive

        <h2>The Monthly Archive:<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
        </h2>

    </div>
    <!--End Main Content-->

    // no posts found


<?php get_footer(); ?>?>