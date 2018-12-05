<?php

  $projects = array(
    'post_type' => 'projects', // it's default, you can skip it
    'posts_per_page' => '-1',
    'order_by' => 'date', // it's also default
    'order' => 'DESC', // it's also default
    'tax_query' => array(
        array(
            'taxonomy' => 'projects_type',
            'field' => 'slug',
            'terms' => array ('projects')
        )
    )
  );

  $projectquery = new WP_Query( $projects );

?>

<?php if ( $projectquery->have_posts() ) : ?>

  <div class="container-fluid projects">
    <div class="row">
      <div class="col-sm-1 hidden-xs projects__title_col matchheight">
        <div class="vert-align">
          <h2>Projects</h2>
        </div>
      </div>

      <div class="col-sm-11 projects__loop matchheight">


  <?php while ( $projectquery->have_posts() ) : $projectquery->the_post(); ?>
    <div class="col-md-3 col-sm-6 projects__info_col wow fadeInLeft projectheight" <?php post_class() ?>>

      <?php
        $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

        $project_location = get_field('project_location');
        $project_service = get_field('project_service');
        $project_client = get_field('project_client');
        $project_cost = get_field('project_cost');
        $project_architect = get_field('project_architect');
        $project_main_contractor = get_field('project_main_contractor');
        $project_timeframe = get_field('project_timeframe');
        $products_used = get_field('products_used');

        $term_obj_list = get_the_terms( $post->ID, 'projects_category' );
        $terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));

        ?>

        <div class="image_wrapper" style="height: 300px; background: url(<?php echo $feat_image; ?>) center center;">
          <div class="category_box <?php echo $terms_string ?>">

          </div>
        </div>

        <div class="content_wrapper">
          <h3>
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?>
            </a>
          </h3>

          <div class="info">
            Category

            <p class="<?php echo $terms_string ?>">
              <?php echo $terms_string ?>
            </p>
          </div>
          <?php if ($project_client) : ?>
            <div class="info">
              Client
              <p class="<?php echo $terms_string ?>"><?php echo $project_client ?></p>
            </div>
          <?php endif; ?>
          <?php if ($project_service) : ?>
            <div class="info">
              Service
              <p class="<?php echo $terms_string ?>"><?php echo $project_service ?></p>
            </div>
          <?php endif; ?>
          <?php if ($project_cost) : ?>
            <div class="info">
              Cost
              <p class="<?php echo $terms_string ?>"><?php echo $project_cost ?></p>
            </div>
          <?php endif; ?>

          <a class="more" href="<?php echo the_permalink(); ?>">View More</a>

        </div>

      </div>
  <?php endwhile; wp_reset_postdata(); endif; ?>
  </div>
</div>
</div>

<?php

  $casestudies = array(
    'post_type' => 'projects', // it's default, you can skip it
    'posts_per_page' => '-1',
    'order_by' => 'date', // it's also default
    'order' => 'DESC', // it's also default
    'tax_query' => array(
        array(
            'taxonomy' => 'projects_type',
            'field' => 'slug',
            'terms' => array ('case-studies')
        )
    )
  );

  $casestudiesquery = new WP_Query( $casestudies );

?>

<?php if ( $casestudiesquery->have_posts() ) : ?>

  <div class="container-fluid projects case-studies">
    <div class="row">
      <div class="col-sm-1 hidden-xs projects__title_col matchheight">
        <div class="vert-align">
          <h2>Case Studies</h2>
        </div>
      </div>

      <div class="col-sm-11 projects__loop matchheight">


  <?php while ( $casestudiesquery->have_posts() ) : $casestudiesquery->the_post(); ?>
    <div class="col-md-3 col-sm-6 projects__info_col projectheight" <?php post_class() ?>>

      <?php
        $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

        $project_location = get_field('project_location');
        $project_service = get_field('project_service');
        $project_client = get_field('project_client');
        $project_cost = get_field('project_cost');
        $project_architect = get_field('project_architect');
        $project_main_contractor = get_field('project_main_contractor');
        $project_timeframe = get_field('project_timeframe');
        $products_used = get_field('products_used');

        $term_obj_list = get_the_terms( $post->ID, 'projects_category' );
        $terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));

        ?>

        <div class="image_wrapper" style="height: 300px; background: url(<?php echo $feat_image; ?>) center center;">
          <div class="category_box <?php echo $terms_string ?>">

          </div>
        </div>

        <div class="content_wrapper">
          <h3>
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?>
            </a>
          </h3>

          <div class="info">
            Category

            <p class="<?php echo $terms_string ?>">
              <?php echo $terms_string ?>
            </p>
          </div>
          <?php if ($project_client) : ?>
            <div class="info">
              Client
              <p class="<?php echo $terms_string ?>"><?php echo $project_client ?></p>
            </div>
          <?php endif; ?>
          <?php if ($project_service) : ?>
            <div class="info">
              Service
              <p class="<?php echo $terms_string ?>"><?php echo $project_service ?></p>
            </div>
          <?php endif; ?>
          <?php if ($project_cost) : ?>
            <div class="info">
              Cost
              <p class="<?php echo $terms_string ?>"><?php echo $project_cost ?></p>
            </div>
          <?php endif; ?>

          <a class="more" href="<?php echo the_permalink(); ?>">View More</a>

        </div>

      </div>
  <?php endwhile; wp_reset_postdata(); endif; ?>
  </div>
</div>
</div>
