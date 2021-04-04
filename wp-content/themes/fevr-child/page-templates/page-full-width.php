<?php
	/**
	 * Template Name: Full Width
	 */
?>

<?php get_header(); ?>

	<?php if ( have_posts() ) :
			while ( have_posts() ) : the_post();
	?>

				<div id="content-wrapper">
					<?php
						// If we have custom title/subtitle/content we display the custom header
						fevr_header();
					?>
					<div class="container container-fluid">
						<div class="l-grid-row">
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
						</div>
					</div>
				</div>


<?php get_footer(); ?>