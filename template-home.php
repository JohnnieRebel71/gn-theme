<?php
/**
 * Template Name: Template-Home
 */
?>
<?php get_header('home'); // get header ?>

  <?php get_template_part('homeintro'); ?>
  <?php get_template_part('featuredsection'); ?>
  <?php get_template_part('testimonials'); ?>

<?php get_footer(); // get footer ?>
