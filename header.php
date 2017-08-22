<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage webTemplate Animal Creativo
 * @since webTemplate Animal Creativo
 */
?>

<html class="no-js" lang="en" dir="ltr">
  <head>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('stylesheet_directory')?>/icons/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/foundation-flex.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/icons/foundation-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  </head>

  <body>
   
    <header class="row container">
     
        <div class="columns small-9  large-3  " id = "imgHeader">
            <?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
            <?php query_posts('order=Asc&cat=10') ?> <!-- categoria Footer Logo-->
            <?php if ( have_posts() ) {
              the_post();
              the_post_thumbnail('full') ;
              } ?>
        </div>
        <div class="columns show-for-large medium-9">
          <?php include TEMPLATEPATH . "/nav.php" ?>
        </div>
         <div class="columns hide-for-large small-3" id = "menuListHeader">
            <ul class="dropdown menu" data-dropdown-menu>
                <li>
                  <a>
                    <?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
                    <?php query_posts('order=Asc&cat=15') ?> <!-- categoria Footer Logo-->
                    <?php if ( have_posts() ) {
                      the_post();
                      the_post_thumbnail('full') ;
                      } ?>
                  </a>
                  <ul class="menu" id="listMenuHeader">
                     <?php include TEMPLATEPATH . "/nav_Mobile.php" ?>
                  </ul>
                </li>
            </ul>

            
        </div>


       

        

    </header>