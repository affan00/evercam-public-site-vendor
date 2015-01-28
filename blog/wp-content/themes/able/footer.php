<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Able
 * @since Able 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav role="navigation" class="site-navigation footer-navigation">
					<h1 class="assistive-text">
						<?php _e( 'Menu', 'able' ); ?>
					</h1>

					<?php wp_nav_menu( array( 'theme_location' => 'footer', 'depth' => 1 ) ); ?>
				</nav><!-- .site-navigation -->
			<?php endif; ?>

			<div class="site-info">
				<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'able' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'able' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'able' ), 'Able', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>
			</div><!-- .site-info -->
		</footer><!-- #colophon .site-footer -->
	</div><!-- #page-liner -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>