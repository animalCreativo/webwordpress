<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage  webTemplate Animal Creativo
 * @since  webTemplate Animal Creativo 1.0
 */

get_header(); 

?>

      <?php include TEMPLATEPATH . "/carrusel.php" ?> 

      <?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
      <?php query_posts('post_per_pages=10') ?>
      <?php query_posts('order=Desc&cat=3') ?> <!-- categoria card2 -->
      <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
      <div class="row container">       
                <div class="small-12 medium-6 columns card2">
                   <picture>
                    <?php the_post_thumbnail('full') ?>
                   </picture>
                </div>
                <div class="small-12 medium-6 columns  card2-section ">
                  <h5><?php the_title() ?></h5>
                  <p><?php the_excerpt(); ?></p>
                  <button class="hollow button" href="#">Ver más</button>
                </div>
      </div>
      <?php endwhile; ?>

      <?php else : ?>
          <?php get_template_part( 'template-parts/content', 'none' ); ?>
      <?php endif; // End have_posts() check. ?>


    <div class="row medium-up-2 ">
      <?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
      <?php query_posts('post_per_pages=10') ?>
      <?php query_posts('order=Desc&cat=2') ?> <!-- categoria card1 -->
      <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
        <div class="small-12 medium-6 columns">
          <div class="card columns">
            <picture>
              <?php the_post_thumbnail() ?>
            </picture>
              
            <div class="card-section">
                <h5><?php the_title() ?></h5>
                <p><?php the_excerpt(); ?></p>
                <!-- <?php the_category() ?> -->
                <button class="hollow button" href="#">Ver más</button>
            </div>
          </div>
        </div>
      <?php endwhile; ?>

      <?php else : ?>
          <?php get_template_part( 'template-parts/content', 'none' ); ?>
      <?php endif; // End have_posts() check. ?>
      
    </div>



    <div class="row responsive-embed widescreen">
      <?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
      <?php query_posts('post_per_pages=10') ?>
      <?php query_posts('order=Desc&cat=19') ?> <!-- categoria video -->
      <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
         <div class="columns small-12 " id="videoFrame">
             <?php the_content(); ?> 
        </div>
      <?php endwhile; ?>
      <?php else : ?>
          <?php get_template_part( 'template-parts/content', 'none' ); ?>
      <?php endif; // End have_posts() check. ?>

    </div>
    <br>
<?php get_footer(); ?>

