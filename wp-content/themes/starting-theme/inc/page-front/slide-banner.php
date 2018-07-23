<?php
/**
 * Note: The design shows a section in the banner 'tile' that seems to indicate that there should
 * be reference made to a particular project however none of the slides in the banner relate to
 * projects so this is not being coded.
 */
?>

<!-- BX Slider with Caption & Read More Link -->
<div id="bxslider">

	<?php if(have_rows('slides')): ?>

		<ul class="bxslider">

			<?php while(have_rows('slides')) : the_row();

					// ACF Sub fields
      		$slide_image = get_sub_field('slide_image');
      		$slide_title = get_sub_field('slide_title');
      		$slide_title_colour = get_sub_field('slide_title_colour');
          $slide_project_title = get_sub_field('project_title');
          $slide_project_link = get_sub_field('project_link');
					?>

				<li class="slide" style="background:url(<?php echo $slide_image; ?>) center; background-size: cover">

          <div style="width: 100%; height: 100%; background: rgba(0,0,0,.5);">

            <div class="container-fluid">

              <div class="slide__title vert-align">
                <h1 style="background: <?php echo $slide_title_colour ?>"><?php echo $slide_title; ?></h1>
              </div>

            </div>

          </div>

          <?php if ($slide_project_title): ?>

            <div class="container slide-project__title">
              <span><?php echo $slide_project_title; ?></span>
              <?php if ($slide_project_link): ?>
                <a style="color: <?php echo $slide_title_colour ?>" href="<?php echo $slide_project_link ?>"> VIEW MORE</a>
              <?php endif; ?>

            </div>

          <?php endif; ?>

				</li>

			<?php endwhile; ?>

		</ul>
  <?php endif; ?>

</div>
