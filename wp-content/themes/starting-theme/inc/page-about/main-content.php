<?php

$section_1_heading = get_field('section_1_heading');
$section_1_grid_layout = get_field('section_1_grid_layout');
$section_1_copy = get_field('section_1_copy');

$section_2_heading = get_field('section_2_heading');
$section_2_grid_layout = get_field('section_2_grid_layout');
$section_2_copy = get_field('section_2_copy');

$section_3_heading = get_field('section_3_heading');
$section_3_grid_layout = get_field('section_3_grid_layout');
$section_3_copy = get_field('section_3_copy');

 ?>


<div class="container-fluid copy">
  <div class="row">

      <?php if($section_1_grid_layout == 'no') : ?>

        <div class="col-md-3 col-md-offset-1 section1">

        <h3><?php echo $section_1_heading ?></h3>

        <?php echo $section_1_copy; ?>

        </div>


      <?php elseif($section_1_grid_layout == 'yes') : ?>
        <?php if( have_rows('section_1_grid_copy') ): ?>

          <div class="col-md-3 col-md-offset-1 section1_grid">

          	<div class="row no-gutter">

              <h3><?php echo $section_1_heading ?></h3>

          	<?php while( have_rows('section_1_grid_copy') ): the_row();

          		// vars
          		$subsection_title = get_sub_field('sub-section_title');
          		$subsection_copy = get_sub_field('sub-section_copy');

          		?>

          		<div class="col-md-12">

                <p>
                  <?php echo $subsection_title ?>
                </p>
                <?php echo $subsection_copy ?>

          		</div>

          	<?php endwhile; ?>

          </div>

        </div>

        <?php endif; ?>
      <?php endif; ?>

      <?php if($section_2_grid_layout == 'no') : ?>

        <div class="col-md-8 section2">

        <h3><?php echo $section_2_heading ?></h3>

        <?php echo $section_2_copy; ?>

        </div>


      <?php elseif($section_2_grid_layout == 'yes') : ?>
        <?php if( have_rows('section_2_grid_copy') ): ?>

          <div class="col-md-5 col-md-offset-1 section2_grid">

            <h3><?php echo $section_2_heading ?></h3>

          	<div class="row">

          	<?php while( have_rows('section_2_grid_copy') ): the_row();

          		// vars
          		$subsection_title = get_sub_field('sub-section_title');
          		$subsection_copy = get_sub_field('sub-section_copy');

          		?>

          		<div class="col-sm-6 servicesheight">

                <p>
                  <?php echo $subsection_title ?>
                </p>
                <?php echo $subsection_copy ?>

          		</div>

          	<?php endwhile; ?>

          </div>

        </div>

        <?php endif; ?>
      <?php endif; ?>

  </div>
</div>
