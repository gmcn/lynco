<div class="container-fluid home-sections">
  <?php if( have_rows('section') ): ?>

  	<div class="row no-gutter">

    	<?php while( have_rows('section') ): the_row();

    		// vars
    		$section_title = get_sub_field('section_title');
    		$section_colour = get_sub_field('section_colour');
        $section_image = get_sub_field('section_image');
        $section_link = get_sub_field('section_link');

    		?>

    		<div class="col-md-6 wow fadeInUp" style="background: <?php echo $section_colour ?>">

          <h2><?php echo $section_title ?>
            <?php if ($section_link) : ?>
            <a href="<?php echo $section_link; ?>"><span>View More</span></a>
          <?php endif; ?>
          </h2>

          <div class="vert-align">
            <?php echo $section_title ?>
          </div>

          <div class="wrapper">
            <div class="inner" style="background: url(<?php echo $section_image ?>) no-repeat bottom left;">
            </div>

          </div>

    		</div>

    	<?php endwhile; ?>

    </div>

  <?php endif; ?>

</div><!-- /.container-fluid -->
