<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Install</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/foundation-flex.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/icons/foundation-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  </head>
  <body>
   
    <section id="javiera" class="callout large">
      <div class="row text-center">
          <div class="small-12 columns show-for-small-only  align-center">
              <?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
              <?php query_posts('post_per_pages=1 ') ?>
              <?php query_posts('order=Desc&cat=6') ?> <!-- categoria card2 -->
              <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
                <h2><?php the_title() ?></h2>
              <?php endwhile; ?>
               <?php else : ?>
              <?php get_template_part( 'template-parts/content', 'none' ); ?>
              <?php endif; // End have_posts() check. ?>

          </div>

      </div>

      <div  class="row align-middle ">
          <div class="small-6 columns align-center">
              <?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
              <?php query_posts('post_per_pages=3 ') ?>
              <?php query_posts('order=Desc&cat=3') ?> <!-- categoria card2 -->
              <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
             
              <figure class="imgHome">
                <?php the_post_thumbnail('full') ?>
              </figure>          
               
               <?php endwhile; ?>
              
              <?php else : ?>
              <?php get_template_part( 'template-parts/content', 'none' ); ?>
              <?php endif; // End have_posts() check. ?>
          </div>
          <div class="small-6 columns">
            <?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
            <?php query_posts('post_per_pages=1 ') ?>
            <?php query_posts('order=Desc&cat=5') ?> <!-- categoria card2 -->
            <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
            <div class="row hide-for-small-only">
                <h2><?php the_title()  ?></h2>
            </div>
            <div class="row">
              <div class="callout text-justify">
                 <?php the_excerpt() ?>
              </div>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
            <?php endif; // End have_posts() check. ?>
            
            <div class="tabs-content" data-tabs-content="lineup-tabs">
                  <div class="row text-center hide-for-small-only" >
                       <?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
                       <?php query_posts('post_per_pages=8 ') ?>
                       <?php query_posts('order=Desc&cat=4') ?> <!-- categoria card2 -->
                       <?php remove_filter ('the_content', 'wpautop'); ?>
                       <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
                       <div class="small-6 columns appsRow">
                          <figure  class="btn" onclick="location.href='itms-services://?action=download-manifest&url=<?php the_content() ?>'">
                             <?php the_post_thumbnail('full') ?>

                          </figure>
                       </div>
                      <?php endwhile; ?>
                      <?php else : ?>
                      <?php get_template_part( 'template-parts/content', 'none' ); ?>
                      <?php endif; // End have_posts() check. ?>
                       
                  </div>

            </div>
          </div>
          <div class="small-12 columns show-for-small-only ">
             
             <div class="row text-center">
                       <?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
                       <?php query_posts('post_per_pages=8 ') ?>
                       <?php query_posts('order=Desc&cat=4') ?> <!-- categoria card2 -->
                       <?php remove_filter ('the_content', 'wpautop'); ?>
                       <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
                       <div class="small-6 columns appsRow">
                          <figure  class="btn" onclick="location.href='itms-services://?action=download-manifest&url=<?php the_content() ?>'">
                             <?php the_post_thumbnail('full') ?>

                          </figure>
                       </div>
                      <?php endwhile; ?>
                      <?php else : ?>
                      <?php get_template_part( 'template-parts/content', 'none' ); ?>
                      <?php endif; // End have_posts() check. ?>
                       
                  </div>
          </div>
      </div>
   
    </section>
 
    <script src="<?php bloginfo('stylesheet_directory')?>/js/vendor/jquery.js"></script>
    <script src="<?php bloginfo('stylesheet_directory')?>/js/vendor/what-input.js"></script>
    <script src="<?php bloginfo('stylesheet_directory')?>/js/vendor/foundation.js"></script>
    <script src="<?php bloginfo('stylesheet_directory')?>/js/vendor/foundation.interchange.js"></script>
   
    <script src="<?php bloginfo('stylesheet_directory')?>/js/app.js"></script>
	
  </body>
</html>

