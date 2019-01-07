<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php

include(locate_template("inc/page-elements/title.php"));
include(locate_template("inc/page-news/filter.php"));

?>

  <?php
  if ( have_posts() ) : ?>

  <div class="container-fluid news">
    <div class="row">

    <?php
    /* Start the Loop */
    while ( have_posts() ) : the_post();
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
    ?>



        <div class="col-md-6 newsitem">
          <div class="row">
            <div class="col-md-6 newscopy matchheight">
              <h2><?php the_title(); ?></h2>
              <?php //the_content(); ?>
              <p><?php $content = get_the_content(); echo substr($content, 0, 350); ?></p>
              <a href="<?php the_permalink(); ?>">View More</a>
              <div class="date">
                <?php echo the_date(); ?>
              </div>
            </div>
            <div class="col-md-6 matchheight" style="padding: 0;">
              <img src="<?php echo $thumb[0] ?>" alt="<?php the_title(); ?>">
            </div>
          </div>
          <hr>
        </div>

    <?php endwhile;

    the_posts_navigation();

  else :

    get_template_part( 'template-parts/content', 'none' );

  endif; ?>



  </div>
</div>

<?php
//get_sidebar();
get_footer();
