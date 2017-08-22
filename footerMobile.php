<?php
/**
 * The template for displaying the footer Mobile
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage webTemplate Animal Creativo
 * @since webTemplate Animal Creativo
 */
?>

<div class="columns small-12 show-for-small-only">
            <?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
            <?php query_posts('order=Asc&cat=11') ?> <!-- categoria Footer Logo-->
            <?php if ( have_posts() ) {
              the_post();
              the_post_thumbnail('full') ;
              } ?>
        </div>
        <div class="columns small-12 show-for-small-only" id="menuFooterMobile" >
            <?php include TEMPLATEPATH . "/nav_footerMobile.php" ?>
        </div>

        <div class="columns small-12 footermenu show-for-small-only">
                  <?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
                  <?php query_posts('post_per_pages=4 ') ?>
                  <?php query_posts('order=Asc&cat=9') ?> <!-- categoria card2 -->
                  <?php remove_filter ('the_content', 'wpautop'); ?>
                  <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
                  <p> <?php the_content() ?> </p>
                  <?php endwhile; ?>
                  <?php else : ?>
                  <?php get_template_part( 'template-parts/content', 'none' ); ?>
                  <?php endif; // End have_posts() check. ?>
                  <br>
                  <hr size="8px" color="white" />
        </div>
        <div class="columns small-12 footermenu show-for-small-only">
        	
        	 <div class="row footerSocial show-for-small-only">

            <div class="small-6  columns">
              <div class="row">
                <?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
                <?php query_posts('post_per_pages=4 ') ?>
                <?php query_posts('order=Asc&cat=12') ?> <!-- categoria Redes Sociales -->
                <?php remove_filter ('the_content', 'wpautop'); ?>
                <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
                <div class="small-12  columns" id="imgFacebookMobile" >
                  <a href=<?php the_content() ?>> 
                    <?php the_post_thumbnail('full') ?>
                  </a>
                </div>
                <?php endwhile; ?>
                <?php else : ?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?>
                <?php endif; // End have_posts() check. ?>
              </div>
            </div>
            <div class="columns small-6 footermenu" id="imgLogoFooter2Mobile">
                  <?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
                  <?php query_posts('order=Desc&cat=11') ?> <!-- categoria Footer Logo-->
                  <?php if ( have_posts() ) {
                    the_post();
                    the_post_thumbnail('full') ;
                    } ?>
            </div>     
        </div>

        </div>
       