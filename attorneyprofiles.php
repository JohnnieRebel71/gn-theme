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

<section id="attorney-profile">
  <div class="container">
    <div class="row attorney-profile-sec">
      <div class="col-md-10 col-md-offset-7 col-xs-44 col-xs-offset-2 profile-pic-col foo">
        <div class="photo-wrap">
          <img class="profile-pic" src="<?php the_field('profile_pic_1'); ?>" />
        </div>
      </div>
      <div class="col-md-23 col-md-offset-2 col-xs-44 col-xs-offset-2 profile-txt-col foo">
        <h2><?php the_field('profile_1_headline'); ?></h2>
        <p><?php the_field('profile_1_paragraph'); ?></p>
      </div>
    </div>
    <div class="row attorney-profile-sec">
      <div class="col-md-10 col-md-offset-7 col-md-push-26 col-xs-44 col-xs-offset-2 profile-pic-col foo">
        <div class="photo-wrap">
          <img class="profile-pic" src="<?php the_field('profile_pic_2'); ?>" />
        </div>
      </div>
      <div class="col-md-23 col-md-offset-2 col-md-pull-13 col-xs-44 col-xs-offset-2 profile-txt-col foo">
        <h2><?php the_field('profile_2_headline'); ?></h2>
        <p><?php the_field('profile_2_paragraph'); ?></p>
      </div>
  </div>
</section>
