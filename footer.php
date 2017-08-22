<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage webTemplate Animal Creativo
 * @since webTemplate Animal Creativo 1.0
 */
?>

 <div class="footer-container" >
      <footer class="footer row align-justify">
        <div class="small-3 column hide-for-small-only">
          <div class="row">
          	<?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
            <?php query_posts('order=Asc&cat=11') ?> <!-- categoria Footer Logo-->
            <?php if ( have_posts() ) {
            	the_post();
            	the_post_thumbnail('full') ;
            	} ?>
          </div>
          <div class="row footerSocial">
          	<?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
            <?php query_posts('post_per_pages=4 ') ?>
            <?php query_posts('order=Asc&cat=12') ?> <!-- categoria Redes Sociales -->
            <?php remove_filter ('the_content', 'wpautop'); ?>
            <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
            <div class="small-12 medium-4 columns">
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

        <div class="small-9 column show-for-medium">
          <div class="row">
            <?php include TEMPLATEPATH . "/nav_footer.php" ?>
            <hr size="8px" color="white" />
          </div>  
          <div class="row">
            <div class="columns small-9 footermenu">
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

            </div>
            <div class="columns small-3">
              <?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
	            <?php query_posts('post_per_pages=1 ') ?>
	            <?php query_posts('order=Desc&cat=11') ?> <!-- categoria Footer Logo-->
            	<?php if ( have_posts() ) {
            	the_post();
            	the_post_thumbnail('full') ;
            	} ?>
            </div>
          </div>
        </div>

        <?php include TEMPLATEPATH . "/footerMobile.php" ?>
        
      </footer>
    </div>
  
   
 
    <script src="<?php bloginfo('stylesheet_directory')?>/js/vendor/jquery.js"></script>
    <script src="<?php bloginfo('stylesheet_directory')?>/js/vendor/what-input.js"></script>
    <script src="<?php bloginfo('stylesheet_directory')?>/js/vendor/foundation.js"></script>
    <script src="<?php bloginfo('stylesheet_directory')?>/js/vendor/foundation.interchange.js"></script>
    <script src="<?php bloginfo('stylesheet_directory')?>/js/app.js"></script>
	<?php wp_footer(); ?>
  </body>
</html>
