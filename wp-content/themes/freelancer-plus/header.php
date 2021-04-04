<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package Freelancer Plus
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) {
  wp_body_open();
} else {
  do_action( 'wp_body_open' );
} ?>

<div id="preloader">
  <div id="status">&nbsp;</div>
</div>

<a class="screen-reader-text skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'freelancer-plus' ); ?></a>

<div id="pageholder" <?php if( get_theme_mod( 'freelancer_plus_box_layout' ) ) { echo 'class="boxlayout"'; } ?>>

<div class="top_header py-3">
  <div class="container">
    <div class="row m-0">
      <div class="col-lg-6 col-md-8 p-0">
        <div class="info-box">
          <?php if ( get_theme_mod('freelancer_plus_email_address') != "") { ?>
            <span class="mr-3"><i class="far fa-envelope mr-2"></i><?php echo esc_html(get_theme_mod ('freelancer_plus_email_address','')); ?></span>
          <?php }?>
          <?php if ( get_theme_mod('freelancer_plus_timming') != "") { ?>
            <span><i class="far fa-clock mr-2"></i><?php echo esc_html(get_theme_mod ('freelancer_plus_timming','')); ?></span>
          <?php }?>
        </div>
      </div>
      <div class="col-lg-6 col-md-4">
        <div class="social-icons text-center text-md-right text-lg-right">
          <?php if ( get_theme_mod('freelancer_plus_fb_link') != "") { ?>
            <a title="<?php esc_attr('facebook', 'freelancer-plus'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('freelancer_plus_fb_link')); ?>"><i class="fab fa-facebook-f"></i></a> 
          <?php } ?>
          <?php if ( get_theme_mod('freelancer_plus_twitt_link') != "") { ?>
            <a title="<?php esc_attr('twitter', 'freelancer-plus'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('freelancer_plus_twitt_link')); ?>"><i class="fab fa-twitter ml-3"></i></a>
          <?php } ?>
          <?php if ( get_theme_mod('freelancer_plus_linked_link') != "") { ?> 
            <a title="<?php esc_attr('linkedin', 'freelancer-plus'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('freelancer_plus_linked_link')); ?>"><i class="fab fa-linkedin-in ml-3"></i></a>
          <?php } ?>
          <?php if ( get_theme_mod('freelancer_plus_insta_link') != "") { ?> 
            <a title="<?php esc_attr('instagram', 'freelancer-plus'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('freelancer_plus_insta_link')); ?>"><i class="fab fa-instagram ml-3"></i></a>
          <?php } ?>
          <?php if ( get_theme_mod('freelancer_plus_youtube_link') != "") { ?> 
            <a title="<?php esc_attr('youtube', 'freelancer-plus'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('freelancer_plus_youtube_link')); ?>"><i class="fab fa-youtube ml-3"></i></a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="header py-3 border-bottom">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-5 col-8">
        <div class="logo">
          <?php freelancer_plus_the_custom_logo(); ?>
          <?php $blog_info = get_bloginfo( 'name' ); ?>
          <?php if ( ! empty( $blog_info ) ) : ?>
            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
            <?php $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
              <span class="site-description"><?php echo esc_html( $description ); ?></span>
            <?php endif; ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-6 col-md-2 col-4">
        <div class="toggle-nav">
          <?php if(has_nav_menu('primary')){ ?>
            <button role="tab"><?php esc_html_e('MENU','freelancer-plus'); ?></button>
          <?php }?>
        </div>
        <div id="mySidenav" class="nav sidenav">
          <nav id="site-navigation" class="main-nav my-2" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu','freelancer-plus' ); ?>">
            <?php if(has_nav_menu('primary')){
              wp_nav_menu( array( 
                'theme_location' => 'primary',
                'container_class' => 'main-menu clearfix' ,
                'menu_class' => 'clearfix',
                'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                'fallback_cb' => 'wp_page_menu',
              ) );
            } ?>
            <a href="javascript:void(0)" class="close-button"><?php esc_html_e('CLOSE','freelancer-plus'); ?></a>
          </nav>
        </div>
      </div>
      <div class="col-lg-3 col-md-5">
        <div class="phone_number text-center text-md-left text-lg-left py-2">
          <?php if ( get_theme_mod('freelancer_plus_phone_number') != "" || get_theme_mod('freelancer_plus_phone_text') != "") { ?>
            <div class="row">
              <div class="col-lg-2 col-md-2 text-center">
                <i class="fas fa-mobile-alt mb-3"></i>
              </div>
              <div class="col-lg-10 col-md-10">
                <strong><?php echo esc_html(get_theme_mod ('freelancer_plus_phone_number','')); ?></strong>
                <p class="py-1"><?php echo esc_html(get_theme_mod ('freelancer_plus_phone_text','')); ?></p>
              </div>
            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
</div>