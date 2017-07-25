<?php
/**
 * Template Name: Template-Contact
 */
?>
<?php get_header('home'); // get header ?>

<section id="contact-form">
  <div class="container">
    <div class="row">
      <div class="col-md-48 col-md-offset-0 col-xs-44 col-xs-offset-2 text-center foo">
        <h2><?php echo get_the_title(); ?></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-32 col-md-offset-8 col-xs-44 col-xs-offset-2 text-center welcome-area foo">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; wp_reset_postdata(); // end of the loop. ?>
      </div>
    </div>
  </div>
</section>

<!-- <section id="map">
  <div class="container">
    <div class="row">
      <div class="col-md-18 col-md-offset-8 col-xs-44 col-xs-offset-2">
        <p>

        </p>
      </div>
    </div>
  </div>
</section> -->

<?php get_footer(); // get footer ?>
