<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package devenvironment
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            
            <div class="grid-container outlines">
                <div class="row">
                    <div class="col-4 outlines">
                        <section class="error-404 not-found">
                            <header class="page-header">
                                <h1 class="page-title"><?php esc_html_e( '404', 'devenvironment' ); ?></h1>
                            </header><!-- .page-header -->

                            <div class="page-content">
                                <p><?php esc_html_e( 'Nope, nothing here.', 'devenvironment' ); ?></p>

                            </div><!-- .page-content -->
                        </section><!-- .error-404 -->
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
