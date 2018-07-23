<div class="container-fluid intro">
  <div class="row">
    <div class="col-md-6">
      <h1><?php echo the_title(); ?></h1>
    </div>
    <div class="col-md-6 breadcrumbs">
      <?php
        if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb( '</p><p id="breadcrumbs">','</p><p>' );
        }
      ?>
    </div>
  </div><!-- /.row -->
</div><!-- /.container-fluid intro -->
