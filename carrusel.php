<?php
/**
 * The template for displaying the carrusel
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage webTemplate Animal Creativo
 * @since webTemplate Animal Creativo
 */
?>
        <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit >
          <div class="orbit-wrapper">
            <div class="orbit-controls">
              <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
              <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
            </div>
            <ul class="orbit-container" id="rata" style="height: 100%;">
              <?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
              <?php query_posts('post_per_pages=10') ?>
              <?php query_posts('order=Asc&cat=4') ?> <!-- categoria orbit -->
              <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
                <li class="is-active orbit-slide" id="rata" >
                  <picture class="orbit-figure " id="orbit-figure">
                    <source srcset="<?php the_post_thumbnail_url('full'); ?>" media"(min-width: 800px)">
                    <img class="imgOrbit" src="<?php the_post_thumbnail_url('medium') ?>" alt="" >
                  </picture>
                </li>
              <?php endwhile; ?>
              <?php else : ?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?>
              <?php endif; // End have_posts() check. ?>
            </ul>
          </div>
          <nav class="orbit-bullets">
            <?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
            <?php query_posts('post_per_pages=10') ?>
            <?php query_posts('order=Asc&cat=4') ?> <!-- categoria orbit -->
            <?php 
            $i = 0; 
            if (have_posts()) : while ( have_posts() ) : the_post(); ?>
            <?php if (  $i ==  0 ) { ?>
                <button class="is-active" data-slide=<?php $i ?> ><span class="show-for-sr"> <?php the_title() ?> </span></button>

               <?php } else {  ?>
                 <button data-slide=<?php $i ?> ><span class="show-for-sr"> <?php the_title() ?> </span></button>
                <?php } ?>
            <?php
            $i = $i +1;  
            endwhile; ?>
            <?php else : ?>
                  <?php get_template_part( 'template-parts/content', 'none' ); ?>
            <?php endif; // End have_posts() check. ?>
          </nav>
        </div>

