<?php
/**
 * Footer template 
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package devenvironment
 */

?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://www.squidinkwebdesign.com', 'devenvironment' ) ); ?>" target="_blank">
            <?php echo esc_html__( '<コ:彡&nbsp;&nbsp; squidinkwebdesign.com', 'devenvironment' ); ?>
            </a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
