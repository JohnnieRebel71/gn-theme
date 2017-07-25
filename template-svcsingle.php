<?php
/**
 * Template Name: Template-SvcSingle
 */
?>
<?php get_header('home'); // get header ?>

<section id="service-single">
  <div class="container">
    <div class="row">
      <div class="col-md-48 col-md-offset-0 col-xs-44 col-xs-offset-2 breadcrumb-col">
        <?php breadcrumb_trail() ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-30 col-md-offset-0 col-xs-44 col-xs-offset-2 svc-single-left">
        <h2><?php echo get_the_title(); ?></h2>
        <p>
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
          <?php endwhile; // end of the loop. ?>
          <a href="<?php the_field('contact_button_link'); ?>"><button class="btn"><?php the_field('contact_button_text'); ?></button></a>
        </p>
      </div>
      <div class="col-md-13 col-md-offset-4 col-xs-44 col-xs-offset-2 svc-single-right">
        <div class="photo-wrap">
          <div class="sidebar-interior-outline"><?php dynamic_sidebar( 'Sidebar' ); ?></div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); // get footer ?>
