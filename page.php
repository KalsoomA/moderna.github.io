<?php

     get_header();

     ?>

 <main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?php the_title() ?></h2>
          <h2><a href="<?php echo site_url(); ?>"<i>Home/</i></a>
            <?php the_title() ?>:
      </h2>

        </div>
        <div class="about-content">
            <?php echo get_the_content(); ?>
      </div>

      </div>
    </section><!-- End About Us Section -->
    



<?php

      get_footer();

    ?>