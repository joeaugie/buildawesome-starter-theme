<?php
  add_action('wp_enqueue_scripts', 'load_scripts');
  function load_scripts()
  {
      wp_enqueue_style('style', get_stylesheet_uri());
  }
  register_nav_menus(
      array(
      'main-menu' => 'Main Menu'
    )
  );
