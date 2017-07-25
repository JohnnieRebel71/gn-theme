<?php
/**
 * Template Name: Template-SvcArchive
 */
?>
<?php get_header('home'); // get header ?>

  <section id="home-intro">
    <div class="container">
      <div class="row">
        <div class="col-md-40 col-md-offset-4 col-xs-44 col-xs-offset-2 text-center welcome-area">
          <h2><?php echo get_the_title(); ?></h2>
          <p>
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          	<?php the_content(); ?>
            <?php endwhile; // end of the loop. ?>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="svcs-nav">
    <div class="container">
      <div class="col-md-48 col-md-offset-0 col-xs-44 col-xs-offset-2">
        <div class="row footer-sec">
          <div class="container">
            <div class="col-md-4"></div>
            <div class="col-lg-10 col-md-12 col-xs-24 footer-nav-sec"><ul><?php dynamic_sidebar( 'Footer Nav Col1' ); ?></ul></div>
            <div class="col-lg-10 col-md-12 col-xs-24 footer-nav-sec"><ul class="sub-menu"><?php dynamic_sidebar( 'Footer Nav Col2' ); ?></ul></div>
            <div class="col-lg-10 col-md-12 col-xs-24 footer-nav-sec"><ul class="sub-menu"><?php dynamic_sidebar( 'Footer Nav Col3' ); ?></ul></div>
            <div class="col-lg-10 col-md-12 col-xs-24 footer-nav-sec"><ul class="sub-menu"><?php dynamic_sidebar( 'Footer Nav Col4' ); ?></ul></div>
            <div class="col-md-4"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div><!-- End Container -->

</section>


<?php get_footer(); // get footer ?>
