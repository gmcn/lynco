<?php

//address
$acf_address_line_1 = get_field( 'acf_address_line_1' );
$acf_address_line_2 = get_field( 'acf_address_line_2' );
$acf_address_line_3 = get_field( 'acf_address_line_3' );
$acf_address_line_4 = get_field( 'acf_address_line_4' );
$acf_post_code 		= get_field( 'acf_post_code' );

//contact numbers
$acf_main_tel_no = get_field( 'acf_main_tel_no' );
$acf_mobile_no = get_field( 'acf_mobile_no' );
$acf_fax_no = get_field( 'acf_fax_no' );
$acf_pr_email_addr= get_field( 'acf_pr_email_addr' );

 ?>

<div class="container-fluid map">

  <div class="row contact">

    <div class="col-md-5 wow fadeInLeft">
      <span>Message us:</span>
      <?php echo do_shortcode( '[formidable id=2]' ); ?>
    </div>

    <div class="col-md-3 col-md-offset-1 wow fadeInRight">
      <?php

        if(
          $acf_address_line_1 != "" ||
          $acf_address_line_2 != "" ||
          $acf_address_line_3 != "" ||
          $acf_address_line_4 != "" ||
          $acf_post_code != ""
        ):

      ?>
      <span>Address:</span>
      <div class="contact-addr">

        <?php if($acf_address_line_1 != ""):  ?>
          <?php echo $acf_address_line_1; ?><br>
        <?php endif; ?>
        <?php if($acf_address_line_2 != ""):  ?>
          <?php echo $acf_address_line_2; ?><br>
        <?php endif; ?>
        <?php if($acf_address_line_3 != ""):  ?>
          <?php echo $acf_address_line_3; ?><br>
        <?php endif; ?>
        <?php if($acf_post_code != ""):  ?>
          <?php echo $acf_post_code; ?><br>
        <?php endif; ?>


      </div><!-- .contact-addr -->
    <?php endif; ?>
    </div>

    <div class="col-md-3 wow fadeInRight">
      <?php if($acf_main_tel_no != ""):  ?>
        <a href="tel:<?php echo $acf_main_tel_no ?>">
      <span>Telephone:</span><br  /><?php echo $acf_main_tel_no ?></a><br  />
      <?php endif; ?>

      <?php if($acf_pr_email_addr != ""):  ?>
        <span>Email:</span><br  /><a href="mailto:<?php echo $acf_pr_email_addr ?>"><?php echo $acf_pr_email_addr ?></a><br  />
      <?php endif; ?>

    <?php if($acf_email_addr != ""):  ?>
      <a href="mailto:<?php echo $acf_email_addr; ?>">
        <?php echo $acf_email_addr; ?>
      </a>
    <?php endif; ?>
    </div>

  </div>

</div>

<div class="part-contact-addr">







</div>
