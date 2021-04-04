<?php
	/**
	 * Template Name: Promo Page
	 */

	global $fevr_meta_fields;
?>

<?php get_header(); ?>

<div id="page-header-wrapper" data-full-height-header="true">
	<div id="page-header-custom" class="promo-container <?php echo fevr_enqueue_inline_css(array('style' => 'background-image: url(' . $fevr_meta_fields['page-promo-bg-img'] . ')'));?>"></div>
	<div class="promo-container content <?php echo fevr_enqueue_inline_css(array('style' => 'background-image: url(' . $fevr_meta_fields['page-promo-content-img'] . ')'));?>"></div>
</div>
	
	<?php if ( have_posts() ) :
			while ( have_posts() ) : the_post();
	?>

				<div id="content-wrapper">
					<?php
						// If we have custom title/subtitle/content we display the custom header
						fevr_header();
					?>
					<div class="container">
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