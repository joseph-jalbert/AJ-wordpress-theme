<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package aj
 */
?>
		<?php tha_content_bottom(); ?>
		</main><!-- #main -->
		<?php tha_content_after(); ?>
			<?php tha_footer_before(); ?>
		<footer id="colophon" class="site-footer wrap" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
		<?php tha_footer_top(); ?>
			<div class="site-info">
				<?php do_action( 'aj_credits' ); ?>
				<?php if ( 'no' === get_theme_mod( 'some-like-it-neat_hide_WordPress_credits' ) ) : ?>
					<a class="wordpress" href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly powered by %s WordPress', 'some-like-it-neat' ), '<span class="genericon genericon-wordpress"></span>' ); ?></a>
					<span class="sep"> | </span>
				<?php endif; ?>

				<?php echo esc_attr( get_theme_mod( 'aj_footer_colophon', __( 'AJ, by Joe Jalbert', 'some-like-it-neat' ) ) );  ?><br />

			</div><!-- .site-info -->
		<?php tha_footer_bottom(); ?>
		</footer><!-- #colophon -->
		<?php tha_footer_after(); ?>
	</div><!-- .wrap -->
</div><!-- #page -->


<!-- Add Scripts for Lightbox(Magnific) and Masonry(Isotope)  -->

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.magnific-init.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/vendor/isotope.pkgd.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/isotope.js"></script>


<?php tha_body_bottom(); ?>
<?php wp_footer(); ?>
</body>
</html>
