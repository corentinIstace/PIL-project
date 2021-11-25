<?php 

/**
 * Add website name in page's title
 */
add_theme_support( 'title-tag' );

/**
 * Prepare website for producion by removing unnecessary or dangerous admin parts
 */
function my_wpadmin_sidebar_menu() {
  //remove_menu_page( 'index.php' );          // 'Dashboard'
  remove_menu_page('edit.php');             // Classic posts (specific post types created)
  //remove_menu_page( 'upload.php' );         // 'Media'
  remove_menu_page( 'themes.php' );         // 'Appearance
  remove_submenu_page('upload.php','media-new.php'); // TODO ?

  /**
   * Remove sub links but not plugin menu
   * Plugin editor can be dangerous, removing it is safe 
   */
  remove_submenu_page('plugins.php','plugin-install.php');
  remove_submenu_page('plugins.php','plugin-editor.php');

  /**
   * Remove comment options
   * Comments are already disabled, removing submenu
   */
  remove_menu_page( 'edit-comments.php' );  // Comments
  remove_submenu_page('options-general.php','options-discussion.php'); // Submenu for comments

  /**
   * Remove comment support
   */
  remove_post_type_support( 'post', 'comments' );
  remove_post_type_support( 'page', 'comments' );

  /**
   * Remove permalink menu
   * Changing permalinks structure is dangerous and can break the website
   */
  remove_submenu_page( 'options-general.php','options-permalink.php' );
}
add_action('admin_menu','my_wpadmin_sidebar_menu', 999);

/**
 * Append css file with WP function
 */
function themeslug_enqueue_style() {
  wp_enqueue_style( 'screen', '/wp-content/themes/pil-theme/dist/css/screen.css' );
}
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );