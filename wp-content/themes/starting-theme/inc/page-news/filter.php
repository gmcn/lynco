<div class="newsfilter">
  <p>Filter by Year</p>

  <div class="dropdown show">
    <a class="btn btn-secondary dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Select year
    </a>

    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      <li><a class="dropdown-item" href="/news/">All Years</a></li>
      <?php wp_get_archives('type=yearly&format=html'); ?>
    </div>
  </div>

</div>
