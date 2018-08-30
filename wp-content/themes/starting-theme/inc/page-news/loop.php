<?php

$args = array(
    'post'    => 'post',
    'order'   => 'ASC',
    // 'year'  => '2012',
);
query_posts( $args );

// the query
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->
  <div class="container-fluid news">
    <div class="row">

  	<!-- the loop -->
  	<?php

    while ( $the_query->have_posts() ) : $the_query->the_post();
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );

     ?>

      <div class="col-md-6 newsitem">
        <div class="row">
          <div class="col-md-6 newscopy matchheight">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <a href="<?php the_permalink(); ?>">View More</a>
            <div class="date">
              <?php echo the_date('j.m.y') ?>
            </div>
          </div>
          <div class="col-md-6 matchheight" style="padding: 0;">
            <img src="<?php echo $thumb[0] ?>" alt="<?php the_title(); ?>">
          </div>
        </div>
      </div>

  	<?php endwhile; ?>
  	<!-- end of the loop -->

    </div> <!-- /.row -->
  </div> <!-- /.container-fluid -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
