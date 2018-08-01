<?php

$intro_main_copy = get_field('intro_main_copy');
$intro_sub_paragraph = get_field('intro_sub_paragraph');

// Display a page parent's slug
$post_data = get_post($post->post_parent);
$parent_slug = $post_data->post_name;

 ?>


<div class="container-fluid services-child">
  <div class="row">
    <div class="col-md-4 content">

      <?php
        echo $intro_main_copy;
      ?>

      <?php

        echo $intro_sub_paragraph;

      ?>

      <?php

      echo the_content();

       ?>

       <a href="/sevices/<?php echo $parent_slug; ?>" >Back to <?php echo get_the_title( $post->post_parent ); ?></a>
       <a class="view-projects" href="/<?php echo $parent_slug; ?>" >View Case Studies</a>

    </div>
    <div class="col-md-6 col-md-offset-2 gallery">


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
  </div><!-- /.row -->
</div><!-- /.container-fluid intro -->
