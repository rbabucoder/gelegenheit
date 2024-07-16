<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and is one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @package MyCustomTheme
 */

get_header(); // Include the header.php template. 
?>

<!-- <main id="primary" class="site-main"> -->
    <?php
    if ( have_posts() ) :

        // Start the Loop.
        while ( have_posts() ) : the_post();

            /*
             * Include the Post-Format-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part( 'template-parts/content', get_post_format() );

            // Add the_content function call to ensure Elementor content is displayed.
            the_content();

        endwhile;

        // Pagination.
        the_posts_pagination( array(
            'prev_text' => __( 'Previous', 'gelegnhit' ),
            'next_text' => __( 'Next', 'gelegnhit' ),
            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'gelegnhit' ) . ' </span>',
        ) );

    else :

        // If no content, include the "No posts found" template.
        get_template_part( 'template-parts/content', 'none' );

    endif;
    ?>
<!-- </main>#main -->

<?php
// get_sidebar(); // Include the sidebar.php template.
get_footer();  // Include the footer.php template.
?>
