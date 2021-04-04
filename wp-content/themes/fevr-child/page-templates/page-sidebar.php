<?php
	/**
	 * Template Name: Sidebar
	 */
?>

<?php
	get_header();
	
	$fevr_meta_fields = get_post_meta( get_the_ID(), 'fevr_meta', true);
	
	$fevr_grid_classes = array();
	
	// Sidebar position
	if(isset($fevr_meta_fields['page-sidebar-position']) && $fevr_meta_fields['page-sidebar-position'] == 'left-sidebar') {
		$fevr_grid_classes[] = 'left-sidebar';
	}
	
?>

	<?php if ( have_posts() ) :
			while ( have_posts() ) : the_post();
	?>

				<div id="content-wrapper">
					<?php
						// If we have custom title/subtitle/content we display the custom header
						fevr_header();
					?>
					<div class="container">
						<div class="l-grid-row has-sidebar <?php echo esc_attr(implode(' ', $fevr_grid_classes)); ?>">
							<main id="main-content">
								<?php the_content(); ?>
					<?php
							endwhile;
						
						else:
							esc_html_e('No posts were found', 'fevr');
						endif;
						
						if (comments_open() || get_comments_number()) {
							comments_template();
						}
					?>
							</main>
							<?php get_sidebar(); ?>
						</div>
					</div>
				</div>


<?php get_footer(); ?>