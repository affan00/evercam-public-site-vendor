<?php
/**
 * @package tdminimal
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<?php if( tdminimal_is_woo_sidebar() ): ?>
		<div id="primary" class="content-area col-lg-8 col-md-8 woo-has-sidebar">
		<?php else: ?>
		<div id="primary" class="content-area col-lg-12 col-md-12">
		<?php endif; ?>
			
			<div id="main" class="site-main" role="main">
				<div class="hentry-container">
					<header class="entry-header">
						<h2 class="entry-title">
							<?php woocommerce_page_title(); ?>
						</h2>
					</header>
					<?php woocommerce_content(); ?>
				</div><!-- .hentry-container -->
			</div><!-- #main -->
		</div><!-- #primary -->
		
		<?php if( tdminimal_is_woo_sidebar() ): ?>
		<div class="col-lg-4 col-md-4">
			<?php get_sidebar(); ?>
		</div>
		<?php endif; ?>
		
	</div><!-- .row -->
</div><!-- .container -->

<script type='text/javascript'>
jQuery(function() {
		jQuery(document).imagesLoaded(function(){
			var productContainer = jQuery('ul.products');
			productContainer.isotope({
				itemSelector : 'li.product',
				layoutMode : 'fitRows'
			});
	
			 jQuery(window).smartresize(function(){
				jQuery('ul.products').isotope({
					itemSelector : 'li.product',
					layoutMode : 'fitRows'
				});
			});
		});
	});
</script>

<?php get_footer(); ?>
 