<?php get_header(); ?>
		        <?php $general_options = get_option( 'meanthemes_theme_general_options_lolly' ); ?>
		        <?php $content_options = get_option ( 'meanthemes_theme_content_options_lolly' ); ?>
		       
		       
		       
		       <div class="wrapper full-wrap page-wrap">
		       
		       	<div class="content archive-content pnf">
		       	
		       	<div id="post-<?php the_ID(); ?>">
		       	
		       	 <?php if ( have_posts() ) { ?>
		       	<h1 class="searching"><?php printf( __( 'Search Results for: %s', 'meanthemes' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		       	
		       	
		       		<?php
		       		rewind_posts();
		       		if (have_posts()) :
		       		while (have_posts()) : the_post();
		       		if(!get_post_format()) {
		       		   get_template_part('format', 'standard');
		       		} else {
		       		   get_template_part('format', get_post_format());
		       		}
		       		endwhile;
		       		endif;
		       		?>
		       		
		       		<?php } else { ?>
		       			           <h1 class="searching"><?php printf( __( 'Nothing Found for: %s', 'meanthemes' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		       			    <div class="post-content">
		       			     <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'meanthemes' ); ?></p>
		       				</div>
		       		<?php } ?>
		       
		       </div>
		       </div>
		       </div>
		       
		       		<?php if ( $wp_query->max_num_pages > 1 ) : ?>
		       		<div class="navigation">
		       				<div class="wrapper">
		       					<?php meanthemes_pagination(); ?>
		       					<div class="nav-next"><?php next_posts_link( __( 'Next Page &gt;', 'meanthemes' ) ); ?></div>
		       					<div class="nav-previous"><?php previous_posts_link( __( '&lt; Previous Page', 'meanthemes' ) ); ?></div>
		       			</div><!-- /wrapper -->
		       		</div><!-- /navigation -->
		       <?php endif; ?>
		       
		       <?php if($general_options[ 'show_nav' ] ) { ?>
		       	<div class="sidebar">
		       		<?php get_sidebar(); ?>
		       	</div>
		       <?php } ?>
		       
		         
		       <?php get_footer();  ?>
