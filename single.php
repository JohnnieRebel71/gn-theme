<?php get_header(); // get header ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); // get footer ?>