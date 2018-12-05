<?php

$project_location = get_field('project_location');
$project_service = get_field('project_service');
$project_client = get_field('project_client');
$project_cost = get_field('project_cost');
$project_architect = get_field('project_architect');
$project_main_contractor = get_field('project_main_contractor');
$project_timeframe = get_field('project_timeframe');
$products_used = get_field('products_used');

$column_left = get_field('column_left');
$column_right = get_field('column_right');

$term_obj_list = get_the_terms( $post->ID, 'projects_category' );
$terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));

?>


<div class="container-fluid single-project <?php if(pa_in_taxonomy('projects_type','case-studies' )) : ?>case-studies<?php endif ?>">
  <div class="row">
    <div class="col-sm-1 hidden-xs projects__title_col matchheight">
      <div class="vert-align">
        <h2>Projects</h2>
      </div>
    </div><!-- /.col-sm-1 -->
    <div class="col-sm-3 matchheight">
      <h3><?php echo the_title(); ?></h3>

      <div class="info">
        Category

        <p class="<?php echo $terms_string ?>">
          <?php echo $terms_string ?>
        </p>
      </div>

      <?php if ($project_service) : ?>
        <div class="info">
          Service
          <p class="<?php echo $terms_string ?>"><?php echo $project_service ?></p>
        </div>
      <?php endif; ?>

      <?php if ($project_client) : ?>
        <div class="info">
          Client
          <p class="<?php echo $terms_string ?>"><?php echo $project_client ?></p>
        </div>
      <?php endif; ?>

      <?php if ($project_cost) : ?>
        <div class="info">
          Cost
          <p class="<?php echo $terms_string ?>"><?php echo $project_cost ?></p>
        </div>
      <?php endif; ?>

      <?php if ($project_architect) : ?>
        <div class="info">
          Architect
          <p class="<?php echo $terms_string ?>"><?php echo $project_architect ?></p>
        </div>
      <?php endif; ?>

      <?php if ($project_timeframe) : ?>
        <div class="info">
          Timeframe
          <p class="<?php echo $terms_string ?>"><?php echo $project_timeframe ?></p>
        </div>
      <?php endif; ?>

      <?php if ($products_used) : ?>
        <div class="info">
          Products Used
          <p class="<?php echo $terms_string ?>"><?php echo $products_used ?></p>
        </div>
      <?php endif; ?>

      <div class="content">
        <?php the_content(); ?>

        <?php if (!$column_left || !$column_right): ?>
          <div class="back_wrapper">
            <a class="back" href="/projects">Back to Projects</a>
          </div>
        <?php endif; ?>

      </div>

    </div><!-- /.col-sm-4 -->
    <div class="col-sm-1 hidden-xs projects__title_col <?php echo $terms_string ?> matchheight">
      <div class="vert-align">
        <h2><?php echo $terms_string ?></h2>
      </div>
    </div>
    <div class="col-sm-7 gallery matchheight">
      <!-- BX Slider with Caption & Read More Link -->

      	<?php if(have_rows('gallery')): ?>

      		<ul class="servicegallery">

      			<?php while(have_rows('gallery')) : the_row();

      					// ACF Sub fields
            		$slide_image = get_sub_field('slide_image');
            		$slide_title = get_sub_field('slide_title');
      					?>
                <li class="slide" style="background:url(<?php echo $slide_image; ?>) center; background-size: cover"></li>

      			<?php endwhile; ?>

      		</ul>
          <div id="bx-pager">
            <?php $i = 0; while(have_rows('gallery')) : the_row();

      					// ACF Sub fields
            		$slide_image = get_sub_field('slide_image');
            		$slide_title = get_sub_field('slide_title');
      					?>
            <a data-slide-index="<?php echo $i; ?>" href=""><img width="100px" src="<?php echo $slide_image; ?>" /></a>
            <?php $i++; endwhile; ?>
          </div>
        <?php endif; ?>
    </div><!-- /.col-sm-4 -->
  </div><!-- /.row -->

  <?php if ($column_left || $column_right): ?>

  <div class="row additional-info">
    <div class="col-sm-3 col-md-offset-1">
      <?php echo $column_left ?>
    </div>
    <div class="col-sm-9 col-md-7 col-lg-6">
      <?php echo $column_right ?>
    </div>
    <div class="col-sm-3 col-md-offset-1">
      <div class="back_wrapper">
        <a class="back" href="/projects">Back to Projects</a>
      </div>
    </div>
  </div><!-- /.row -->

  <?php endif; ?>


</div><!-- /.container-fluid .single-projects -->
