<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage webTemplate Animal Creativo
 * @since webTemplate Animal Creativo 1.0
 */

get_header('404'); ?>

	<div class="row">
	  <div class="small-12 columns text-center">
	  	<?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
            <?php query_posts('order=Asc&cat=16') ?> <!-- categoria error 404-->
            <picture id="error-404Picture">
            	<?php if ( have_posts() ) {
            	the_post();
            	the_post_thumbnail('full') ;
            	} ?>
            </picture>
            
	  </div>

		<?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
	    <?php query_posts('post_per_pages=10') ?>
	    <?php query_posts('order=Asc&cat=17') ?> <!-- categoria orbit -->
	    <?php 
	    $i = 0; 
	    if (have_posts()) : while ( have_posts() ) : the_post(); ?>
	    <?php if (  $i ==  0 ) { ?>
	    	<div class="small-12 columns text-center" id="error-404Title">
	        	<h3><?php the_content() ?></h3>
	        </div>
	       <?php } else {  ?>
	        <div class="small-12 columns text-center" id="error-404">
	          <?php the_content() ?> 
	        </div>
	        <?php } ?>
	    <?php
	    $i = $i +1;  
	    endwhile; ?>
	    <?php else : ?>
	          <?php get_template_part( 'template-parts/content', 'none' ); ?>
	    <?php endif; // End have_posts() check. ?>

	</div>


<?php get_footer('404'); ?>
