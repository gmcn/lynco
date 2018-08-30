<?php

$application_form = get_field('application_form');

 ?>

<div class="container-fluid apply">
  <div class="row">
    <div class="col-md-12">
      <h3>Apply for <br  />this position</h3>
    </div>
    <div class="col-md-3">

      <p>
        Download:
      </p>
      <p>
        To apply for this job click the link below to download an application form. Complete and upload via the form below before the closing date.
      </p>
      <p>
        Alternatively send your application to <a href="mailto:careers@lyncofacades.com">careers@lyncofacades.com</a>
      </p>
      <?php if($application_form) : ?>
        <a class="download-app" href="<?php echo $application_form ?>" download>Download Application</a>
      <?php endif; ?>
    </div><!-- /.col-md-4 -->
    <div class="col-md-8 col-md-offset-1">
      <p>
        Details:
      </p>
      <?php echo do_shortcode('[contact-form-7 id="214" title="Career Application"]'); ?>
    </div><!-- /.col-md-8 -->
  </div><!-- /.row -->
</div><!-- /.container-fluid apply -->
