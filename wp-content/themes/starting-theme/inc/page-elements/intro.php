<?php

$intro_main_copy = get_field('intro_main_copy');
$intro_sub_paragraph = get_field('intro_sub_paragraph');

 ?>


<div class="container-fluid intro">
  <div class="row">
    <div class="col-md-6 main">

      <?php
        echo $intro_main_copy;
      ?>

    </div>
    <div class="col-md-6 sub">
      <?php

        echo $intro_sub_paragraph;

      ?>
    </div>
  </div><!-- /.row -->
</div><!-- /.container-fluid intro -->
