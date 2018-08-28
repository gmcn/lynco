<div class="newsfilter">
  <p>Filter by Year</p>

  <select name="archive-menu" onChange="document.location.href=this.options[this.selectedIndex].value;">
  <option value="">Select year</option>
  <option value="/news/">All years</option>
  <?php wp_get_archives('type=yearly&format=option'); ?>
  </select>

</div>
