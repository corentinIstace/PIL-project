<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="header_logo_container">
      <a href="<?= get_site_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Image Logo">
      </a>
    </div>
    <nav id="header_nav_horizontal">
      <?php
          wp_nav_menu(
            array(
              'theme_location'  => 'primary',
              'container'       => false,
              'menu_class'      => 'header_menu_horizontal',
              'fallback_cb'     => '',
              'depth'           => 2,
              'menu'            => 2,
              )
            );
            ?>
        <a id="contact-button" title="Contact" href="/contact/" class="nav-link">
        <img id='arrow-contact' src="<?php echo get_template_directory_uri(); ?>/img/arrow-conctact.svg" alt="arrow">
      </a>
    </nav>
  </div>
  <nav id="header_nav_vertical">
    <?php
        wp_nav_menu(
          array(
            'theme_location'  => 'primary',
            'container'       => false,
            'menu_class'      => 'header_menu_vertical',
            'fallback_cb'     => '',
            'depth'           => 2,
            'menu'            => 3,
            )
          );
          ?>
    </nav>
  </header>
  <?php body_class(); ?>    
  <?php wp_body_open(); ?>
