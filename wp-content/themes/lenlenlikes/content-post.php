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


        <div class="comments-wrap">
            <!-- Comments template wird geladen-->
            <?php comments_template(); ?>
            <div id="comments" class="comments-area">
                <div id="respond" class="comment-respond">
                    <h3 id="reply-title" class="comment-reply-title"></h3>

                    <h3 id="reply-title">Leave a Comment</h3>
                    <small><a rel="nofollow" id="cancel-comment-reply-link"
                              href="/renkon/2013/04/25/grapefruit/#respond" style="display:none;">Cancel reply</a>
                    </small>
                    <form action="http://themes.elmastudio.de/renkon/wp-comments-post.php" method="post"
                          id="commentform" class="comment-form">
                        <p class="comment-note">Required fields are marked <span class="required">*</span>.</p>

                        <p class="comment-form-author"><label for="author">Name <span class="required">*</span></label>
                            <input id="author" name="author" type="text" value="" size="30" aria-required="true"></p>

                        <p class="comment-form-email"><label for="email">Email <span class="required">*</span></label>
                            <input id="email" name="email" type="text" value="" size="30" aria-required="true"></p>

                        <p class="comment-form-url"><label for="url">Website</label> <input id="url" name="url"
                                                                                            type="text" value=""
                                                                                            size="30"></p>

                        <p class="comment-form-comment"><label for="comment">Message <span
                                    class="required">*</span></label><br><textarea id="comment" name="comment"
                                                                                   rows="8"></textarea></p>

                        <p class="form-submit">
                            <input name="submit" type="submit" id="submit" value="Send Comment">
                            <input type="hidden" name="comment_post_ID" value="236" id="comment_post_ID">
                            <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                        </p>

                        <p style="display: none;"><input type="hidden" id="akismet_comment_nonce"
                                                         name="akismet_comment_nonce" value="e92ddb70a2"></p></form>
                </div>
                <!-- #respond -->

            </div>
    </div><!-- End #comments .comments-area -->

    </div>
    <!--End Page/Post Content-->

<?php endwhile; else: ?>
    // no posts found
<?php endif; ?>


<?php get_footer(); ?>