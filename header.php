<!DOCTYPE html>
<html lang="">
<!-- Pour attribuer la langue en cours-->
  <head>

    <meta charset="<?php bloginfo('charset'); ?>"/>
<!-- Recupere le charset-->
    <title><?php bloginfo('title'); ?></title>
<!-- Recupere le titre du site-->
<?php wp_head(); ?>
<!--hook pour les scripts des plugings Wordpress-->

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/normalize.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/main.css" type="text/css" />

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


  </head>

  <body>
    <header>

  <!--Menu dynamique-->

  <nav id="menu">
    <div class="nav-wrapper">
      <a id="logo" href="index.php" class="brand-logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt="logo"/></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <?php wp_nav_menu(); ?>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <?php wp_nav_menu(); ?>
      </ul>
    </div>
  </nav>


  </header>
