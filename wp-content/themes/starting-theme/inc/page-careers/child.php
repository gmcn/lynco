<?php

$intro_main_copy = get_field('intro_main_copy');
$intro_sub_paragraph = get_field('intro_sub_paragraph');

$salary = get_field('salary');
$closing_date = get_field('closing_date');
$application_form = get_field('application_form');
$post_date = get_the_date( 'j.m.Y' );

 ?>

 <div class="container-fluid careers">
   <div class="row">

    <div class="col-md-12 career wow fadeInLeft">

      <div class="career__header">
        <div class="row">
          <div class="col-md-6">
            <h2><?php the_title(); ?></h2>
            <span><?php echo $salary ?></span>
          </div>
          <div class="col-md-6 dates">
            Job Posted: <?php echo $post_date; ?><br />
            Closing Date: <?php echo $closing_date; ?>
          </div>
        </div>
      </div>

      <div class="row">

        <div class="col-md-3 matchheight career__intro">
          <?php echo $intro_main_copy ?>
        </div>

        <div class="col-md-7 career__copy matchheight col-md-offset-1">
          <?php echo $intro_sub_paragraph ?>
          <?php the_content(); ?>
        </div>

      </div>

    </div>

  </div>

</div>

<?php
include(locate_template("inc/page-careers/apply.php"));
 ?>
