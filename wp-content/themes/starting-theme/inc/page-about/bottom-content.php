<?php

$section_3_heading = get_field('section_3_heading');
$section_3_grid_layout = get_field('section_3_grid_layout');
$section_3_copy = get_field('section_3_copy');

 ?>


<div class="container-fluid bottom-copy">
  <div class="row">

      <?php if($section_3_grid_layout == 'no') : ?>

        <div class="col-md-3 col-md-offset-1 section3">

        <h3><?php echo $section_3_heading ?></h3>

        <?php echo $section_3_copy; ?>

        </div>


      <?php elseif($section_3_grid_layout == 'yes') : ?>
        <?php if( have_rows('section_3_grid_copy') ): ?>

          <div class="col-md-3 col-md-offset-1 section3_grid">

          	<div class="row no-gutter">

              <h3><?php echo $section_3_heading ?></h3>

          	<?php while( have_rows('section_3_grid_copy') ): the_row();

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

  </div>
</div>
