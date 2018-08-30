<?php
$current = get_query_var('cat');
?>
<div class="container-fluid title">
  <div class="row">
    <div class="col-md-6">
      <h1>
        <?php if($post->post_parent == 168) : ?>
          Careers
        <?php elseif( is_page() ): ?>
          <?php echo the_title(); ?>
        <?php else : ?>
          <?php
            foreach((get_the_category()) as $category){
                echo $category->name."<br>";
                echo category_description($category);
                }
            ?>
        <?php endif; ?>
       </h1>
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
