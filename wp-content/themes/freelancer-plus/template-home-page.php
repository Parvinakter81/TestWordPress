<?php
/**
 * The Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Freelancer Plus
 */

get_header(); ?>

<div id="content">
  <?php
    $hidcatslide = get_theme_mod('freelancer_plus_hide_categorysec', '1');
    if( $hidcatslide == ''){
  ?>
    <section id="catsliderarea">
      <div class="catwrapslider">
        <div class="owl-carousel">
          <?php if( get_theme_mod('freelancer_plus_slidersection',false) ) { ?>
          <?php $queryvar = new WP_Query('cat='.esc_attr(get_theme_mod('freelancer_plus_slidersection',true)));
            while( $queryvar->have_posts() ) : $queryvar->the_post(); ?>
              <div class="slidesection"> 
                <?php the_post_thumbnail( 'full' ); ?>
                <div class="slider-box">
                  <h3><?php the_title(); ?></h3>
                  <?php
                    $trimexcerpt = get_the_excerpt();
                    $shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 15 );
                    echo '<p class="mt-4">' . esc_html( $shortexcerpt ) . '</p>'; 
                  ?>
                  <?php if ( get_theme_mod('freelancer_plus_button_text') != "") { ?>
                    <div class="slide-btn mt-5">
                      <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('freelancer_plus_button_text',__('Hire Me','freelancer-plus'))); ?><i class="fas fa-long-arrow-alt-right ml-2"></i></a>
                    </div>
                  <?php }?>
                </div>
              </div>
            <?php endwhile; wp_reset_postdata(); ?>
          <?php } ?>
        </div>
      </div>
      <div class="clear"></div>
    </section>
  <?php } ?>

  <?php
    $freelancer_plus_hidepageboxes = get_theme_mod('freelancer_plus_disabled_pgboxes', '1');
    if( $freelancer_plus_hidepageboxes == ''){
  ?>
  <section id="serives_box" class="py-4">
    <div class="container">
      <h3 class="text-center mb-5"><?php echo esc_html(get_theme_mod('freelancer_plus_main_title','')); ?></h3>
      <p class="main_text text-center w-50 mx-auto"><?php echo esc_html(get_theme_mod('freelancer_plus_main_text','')); ?></p>
      <div class="mt-5">
        <div class="row">
          <?php if( get_theme_mod('freelancer_plus_services_cat',false) ) { ?>
            <?php $queryvar = new WP_Query('cat='.esc_attr(get_theme_mod('freelancer_plus_services_cat',true)));
              while( $queryvar->have_posts() ) : $queryvar->the_post(); ?>
                <div class="col-lg-4 col-md-6">
                  <div class="services_inner_box text-center p-4">
                    <?php the_post_thumbnail( 'full' ); ?>
                    <h4 class="pt-4 pb-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <?php
                      $trimexcerpt = get_the_excerpt();
                      $shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 15 );
                      echo '<p class="mb-3">' . esc_html( $shortexcerpt ) . '</p>'; 
                    ?>
                  </div>
                </div>
              <?php endwhile; wp_reset_postdata(); ?>
            <?php } ?>
          <?php }?>
        </div>
      </div>
    </div>
  </section>

  <section class="py-4">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  <section>
</div>

<?php get_footer(); ?>