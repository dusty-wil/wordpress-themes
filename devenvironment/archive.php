<?php
/**
 * The template for displaying archive pages
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package devenvironment
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <div class="grid-container outlines">
                <div class="row">
                    <div class="col-4 outlines">
                        <?php
                        if ( have_posts() ) : ?>

                            <?php
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();

                                /*
                                 * Include the Post-Format-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
                                get_template_part( 'template-parts/content', get_post_format() );

                            endwhile;

                            the_posts_navigation();

                        else :

                            get_template_part( 'template-parts/content', 'none' );

                        endif; ?>
                    </div>
                    <div class="col-2 outlines">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
