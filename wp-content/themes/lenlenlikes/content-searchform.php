<?php
/**
 * Search-Form Template
 *
 *
 *
 */
?>

<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search...', 'renkon' ); ?>" />
    <input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'renkon' ); ?>" />
</form>


<!--<?php get_search_form(); ?>-->

