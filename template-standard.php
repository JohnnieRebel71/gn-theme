<?php
/**
 * Template Name: Template-Standard
 */
?>
<?php get_header('home'); // get header ?>

<section id="standard">
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
</section>

<?php get_footer(); // get footer ?>
