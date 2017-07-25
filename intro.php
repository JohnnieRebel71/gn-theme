<section id="home-intro">
  <div class="container">
    <div class="row">
      <div class="col-md-34 col-md-offset-7 col-xs-44 col-xs-offset-2 text-center welcome-area">
        <h2><?php the_field('headline'); ?></h2><br>
        <p class="intro">
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
          <?php endwhile; // end of the loop. ?>
        </p>
      </div>
    </div>
  </div>
</section>
