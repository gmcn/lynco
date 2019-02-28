<?php

$intro_main_copy = get_field('intro_main_copy');
$intro_sub_paragraph = get_field('intro_sub_paragraph');

 ?>


<div class="container-fluid intro">
  <div class="row">
    <div class="col-md-6 main">

      <?php if ( is_404() ) : ?>
        It looks like nothing was found at this location.
      <?php endif; ?>

      <?php if ( is_search() ) : ?>
        Sorry, but nothing matched your search terms. Please try again with some different keywords.
      <?php endif; ?>

      <?php
        echo $intro_main_copy;
      ?>

    </div>
    <div class="col-md-6 sub">

      <?php if ( is_404() ) : ?>
        Maybe try one of the links above or a search?

        <form role="search" method="get" class="search-form" action="/">
  				<label>
  					<span class="screen-reader-text">Search for:</span>
  					<input type="search" class="search-field" placeholder="Search …" value="" name="s">
  				</label>
  				<input type="submit" class="search-submit" value="Search">
  			</form>

    <?php endif; ?>

    <?php if ( is_search() ) : ?>
      Maybe try one of the links above or another search?

      <form role="search" method="get" class="search-form" action="/">
        <label>
          <span class="screen-reader-text">Search for:</span>
          <input type="search" class="search-field" placeholder="Search …" value="" name="s">
        </label>
        <input type="submit" class="search-submit" value="Search">
      </form>

  <?php endif; ?>

      <?php

        echo $intro_sub_paragraph;

      ?>
    </div>
  </div><!-- /.row -->
</div><!-- /.container-fluid intro -->
