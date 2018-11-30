<?php

$projects_types = get_terms( 'projects_type', 'orderby=count&hide_empty=1' );
$projects_categories = get_terms( 'projects_category', 'orderby=count&hide_empty=1' );

?>

<div class="container-fluid projects-filter">
  <div class="row">
    <div class="col-md-5 projects-type">

      <h4>TYPE <span>(Click to Filter)</span></h4>

      <?php if ( ! empty( $projects_types ) && ! is_wp_error( $projects_types ) ) : ?>

      <ul>

        <?php foreach ( $projects_types as $projects_type ) { ?>
            <li>
              <a href="/projects_type/<?php echo $projects_type->slug ?>">
                <?php echo $projects_type->description ?>
              </a>
              <p>
                <?php echo $projects_type->name ?>
              </p>
            </li>
        <?php  } ?>

      </ul>

    <?php endif ?>
    </div>
    <div class="col-md-7 projects-cat">

      <h4>CATEGORIES <span>(Click to Filter)</span></h4>

      <?php

      if ( ! empty( $projects_categories ) && ! is_wp_error( $projects_categories ) ) :

      ?>

      <ul>
        <?php foreach ( $projects_categories as $projects_category ) { ?>
            <li>
              <a href="/projects_category/<?php echo $projects_category->slug ?>">
                <?php echo $projects_category->description ?>
              </a>
              <p>
                <?php echo $projects_category->name ?>
              </p>
            </li>
        <?php  } ?>
      </ul>

      <?php endif ?>
    </div>
  </div>
</div>
