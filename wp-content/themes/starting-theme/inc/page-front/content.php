<div class="container-fluid home-content">
  <?php if( have_rows('content_section') ): ?>

    <div class="container">

    	<div class="row">

      	<?php while( have_rows('content_section') ): the_row();

      		// vars
      		$title = get_sub_field('title');
      		$copy = get_sub_field('copy');

      		?>

      		<div class="col-md-5 col-md-offset-1">

            <h2><?php echo $title ?></h2>

            <?php echo $copy; ?>

      		</div>

      	<?php endwhile; ?>

      </div>

    </div>

  <?php endif; ?>

</div><!-- /.container-fluid -->
