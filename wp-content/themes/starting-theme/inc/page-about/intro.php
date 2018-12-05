<?php

$intro_img_bg = get_field('intro_img_bg');
$intro_text = get_field('intro_text');
$intro_img = get_field('intro_img');

 ?>

<div class="container-fluid about-intro" style="background: url(<?php echo $intro_img ?>) right no-repeat <?php echo $intro_img_bg ?>;">
  <div class="row">
    <div class="col-md-6 col-lg-4 col-md-offset-1">
      <h2><?php echo $intro_text ?></h2>
    </div>
  </div><!-- /.row -->
  <div class="clear">

  </div>
</div><!-- /.container-fluid intro -->
