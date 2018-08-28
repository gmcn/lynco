<?php

$intro_main_copy = get_field('intro_main_copy');
$intro_sub_paragraph = get_field('intro_sub_paragraph');

// Display a page parent's slug
$post_data = get_post($post->post_parent);
$parent_slug = $post_data->post_name;

 ?>


<div class="container-fluid news-single">
  <div class="row">
    <div class="col-md-7 content">
      <div class="news-single__header">
        <h2><?php the_title() ?></h2>
        <div class="date">
            <?php echo the_date('j.m.y') ?>
        </div>
      </div>

      <?php

      echo the_content();

       ?>

    </div>
    <div class="col-md-5 gallery">


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



    </div>
    <div class="col-md-12 backto">

      <div class="backto__wrapper">

        <a href="/news/">Back to News</a>

      </div>

    </div>

    <div class="col-md-6 previous">
      <?php previous_post_link( '< %link', 'Previous', true ); ?>
    </div>
    <div class="col-md-6 next">
      <?php next_post_link( '%link >', 'Next', true ); ?>
    </div>


  </div><!-- /.row -->
</div><!-- /.container-fluid news-single -->
