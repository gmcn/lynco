<div class="container-fluid services">
  

      <?php
      $args = array(
      'post_parent' => $post->ID,
      'post_type' => 'page',
      'orderby' => 'menu_order'
      );

      $child_query = new WP_Query( $args );

      ?>

        <?php
        $i = 1;

        while ( $child_query->have_posts() ) : $child_query->the_post();

        $thumb = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        $intro_main_copy = get_field('intro_main_copy');
        $intro_sub_paragraph = get_field('intro_sub_paragraph');

        ?>

        <!-- <div class="col-md-6"> -->

          <div class="row service">

            <div class="col-md-6 wow fadeInLeft servicesheight">

              <h2><?php the_title(); ?></h2>

              <div class="vert-align"><?php the_title(); ?></div>

              <div class="wrapper-rotate">
                <div class="inner" style="background: url(<?php echo $thumb ?>) no-repeat left;">
                </div>

              </div>


            </div>

            <div class="col-md-6 wow fadeInRight servicesheight">
              <div class="wrapper">
                <?php echo $intro_main_copy ?>
                <?php echo $intro_sub_paragraph ?>

                <a href="<?php the_permalink(); ?>">
                  Read More
                </a>
                <a class="view-projects" href="/projects">
                  View Projects
                </a>
              </div><!-- /.wrapper -->
            </div><!-- /.col-md-6 -->

          </div><!-- /.row service -->

        <!--</div> /.col-md-6 -->

      <?php $i++; endwhile; wp_reset_postdata(); ?>


</div><!-- /.container-fluid -->
