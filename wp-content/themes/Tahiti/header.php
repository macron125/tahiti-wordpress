<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php // Title and tagline (description) is provided dynamically ?>
    <?php wp_head(); ?>
  </head>
  
  <body <?php body_class(); ?>>
    <header id="header" class="header">
      <nav class="gn global-width">
        <a href="<?php echo esc_url( get_home_url() ); ?>">
          <div class="logo">
            <img src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>" alt="Tahiti Logo" />
          </div>
        </a>
        <?php 
          
          wp_nav_menu(
            [
              'menu_class'            => 'gn-list',
              'theme_location'        => 'main',
              'depth'                 => '1',
              'li_class'              => 'gn-item',
              'anchor_class'          => 'gn-link'
            ]
          );
          
          ?>
      </nav>
    </header>