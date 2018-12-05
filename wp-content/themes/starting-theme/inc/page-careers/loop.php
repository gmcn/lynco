<div class="container-fluid careers">
  <div class="row">

      <?php
      $args = array(
      'post_parent' => $post->ID,
      'post_type' => 'page',
      'orderby' => 'date'
      );

      $child_query = new WP_Query( $args );

      ?>

        <?php
        $i = 1;

        while ( $child_query->have_posts() ) : $child_query->the_post();

        $intro_main_copy = get_field('intro_main_copy');
        $intro_sub_paragraph = get_field('intro_sub_paragraph');

        $salary = get_field('salary');
        $closing_date = get_field('closing_date');
        $application_form = get_field('application_form');
        $post_date = get_the_date( 'j.m.Y' );


        ?>

            <div class="col-md-12 career wow fadeInLeft">

              <div class="career__header">
                <div class="row">
                  <div class="col-md-6">
                    <h2><?php the_title(); ?></h2>
                    <span><?php echo $salary ?></span>
                  </div>
                  <div class="col-md-6 dates">
                    Job Posted: <?php echo $post_date; ?><br />
                    <?php if ($closing_date): ?>
                      Closing Date: <?php echo $closing_date; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>


                <div class="col-md-3 matchheight career__intro hidden-xs hidden-sm">
                  <?php echo $intro_main_copy ?>
                  <ul>
                    <?php if($application_form) : ?>
                      <li><a href="<?php echo $application_form ?>" target="_blank">Dowload Application</a></li>
                    <?php endif; ?>
                    <li><a href="<?php the_permalink() ?>">Apply Now</a></li>
                  </ul>
                </div>

                <div class="col-md-7 career__copy matchheight col-md-offset-1">
                  <?php echo $intro_sub_paragraph ?>
                </div>

                <div class="col-md-3 matchheight career__intro hidden-md hidden-lg">
                  <?php echo $intro_main_copy ?>
                  <ul>
                    <?php if($application_form) : ?>
                      <li><a href="<?php echo $application_form ?>" target="_blank">Dowload Application</a></li>
                    <?php endif; ?>
                    <li><a href="<?php the_permalink() ?>">Apply Now</a></li>
                  </ul>
                </div>

                <hr />

            </div>

      <?php $i++; endwhile; wp_reset_postdata(); ?>

  </div><!-- /.row no-gutter -->
</div><!-- /.container-fluid -->
