<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>PDV Legal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon.png">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/home.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/solutions.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/cases.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/integrations.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/resale.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/about.css">
    <?php
      if(get_post_field('post_name', get_post()) === 'solutions') {
        echo '<script type="text/javascript" src="'.get_template_directory_uri().'/assets/js/solutions.js"></script>';
      } else if(get_post_field('post_name', get_post()) === 'cases') {
        echo '<script type="text/javascript" src="'.get_template_directory_uri().'/assets/js/cases.js"></script>';
      } else if(get_post_field('post_name', get_post()) === 'about') {
        echo '<script type="text/javascript" src="'.get_template_directory_uri().'/assets/js/about.js"></script>'; 
      } else if(get_post_field('post_name', get_post()) === 'resale') {
        echo '<script type="text/javascript" src="'.get_template_directory_uri().'/assets/js/resale.js"></script>';
      } else {
        echo '<script type="text/javascript" src="'.get_template_directory_uri().'/assets/js/main.js"></script>';
      }
    ?>
  </head>
  <body>
    <header class="<?php echo is_front_page() || is_page('about') || is_page('resale') ? 'header-home' : 'header-home no-shadow'; ?>">
      <div class="container header-container">
        <div class="header-home-mobile">
          <button class="menu-toggle" aria-label="Abrir menu">
            <?php 
                if (is_front_page()) {
                  echo '<img src="'.get_template_directory_uri().'/assets/icons/menu.svg" alt="Menu PDV Legal">';
                } else if (is_page('about')) {
                  echo '<img src="'.get_template_directory_uri().'/assets/icons/menu.svg" alt="Menu PDV Legal">';
                }else if (is_page('resale')) {
                  echo '<img src="'.get_template_directory_uri().'/assets/icons/menu.svg" alt="Menu PDV Legal">';
                } else {
                  echo '<img src="'.get_template_directory_uri().'/assets/icons/menu-dark.svg" alt="Menu PDV Legal">';
                } ;
              ?>
          </button>
          <div class="logo">
            <a href="<?php echo home_url(); ?>">
              <?php 
                if (is_front_page()) {
                  echo '<img src="'.get_template_directory_uri().'/assets/images/home/logo.png" alt="PDV Legal">';
                } else if (is_page('about')) {
                  echo '<img src="'.get_template_directory_uri().'/assets/images/home/logo.png" alt="PDV Legal">';
                } else if (is_page('resale')) {
                  echo '<img src="'.get_template_directory_uri().'/assets/images/home/logo.png" alt="PDV Legal">';
                } else {
                  echo '<img src="'.get_template_directory_uri().'/assets/icons/logo-blue.svg" alt="PDV Legal">';
                };
              ?>
            </a>
          </div>

          <?php get_template_part('components/button', null, [
              'url' => '/contato',
              'label' => 'Contato',
              'class' => is_page('resale') ? 'btn btn-blue' : 'btn btn-primary'
            ]); ?>
        </div>
        <div class="logo-desktop">
            <a href="<?php echo home_url(); ?>">
              <?php 
                if (is_front_page()) {
                  echo '<img src="'.get_template_directory_uri().'/assets/images/home/logo.png" alt="PDV Legal">';
                } else if (is_page('about'))  {
                  echo '<img src="'.get_template_directory_uri().'/assets/images/home/logo.png" alt="PDV Legal">';
                } else if (is_page('resale'))  {
                  echo '<img src="'.get_template_directory_uri().'/assets/images/home/logo.png" alt="PDV Legal">';
                } else {
                  echo '<img src="'.get_template_directory_uri().'/assets/icons/logo-blue.svg" alt="PDV Legal">';
                };
              ?>
            </a>
          </div>
        <nav class="main-menu">
          <?php
          wp_nav_menu([
            'theme_location' => 'main-menu',
            'container' => false,
            'menu_class' => is_front_page() || is_page('about') || is_page('resale') ? 'menu-list' : 'menu-list-dark'
          ]);
        ?>
        </nav>
        <div class="header-actions">
          <?php get_template_part('components/button', null, [
            'url' => '/login',
            'label' => 'Login',
            'class' =>  is_front_page() || is_page('about') || is_page('resale') ? 'btn-outline btn' : 'btn-outline-dark btn'
          ]); ?>
          <?php get_template_part('components/button', null, [
            'url' => '/contato',
            'label' => 'Falar com especialista →',
            'class' => is_page('resale') ? 'btn btn-blue' : 'btn btn-primary'
          ]); ?>
        </div>
      </div>
    </header>
    