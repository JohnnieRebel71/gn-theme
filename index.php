
<?php get_header(); // get header ?>

	<section id="articles-single">
		<div class="container">
		  <div class="row">
		    <div id="articles-main" class="col-md-30 col-md-offset-0 col-xs-44 col-xs-offset-2">
						<!-- Start the Loop. -->
						<?php $recentCases = new WP_Query( array( 'cat' => 2 ) );
							if ($recentCases->have_posts()) : while ($recentCases->have_posts()) : $recentCases->the_post(); ?>
								<table cellpadding="0" cellspacing="0" style="vertical-align: top;">
								  <tr>
								    <td class="td-avatar"><?php echo get_avatar( $id_or_email, $size, $default, $alt, $args ); ?></td>
								    <td class="td-title">
									    <h2>
												<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
												<?php
													if (strlen(the_title('','',FALSE)) > 28) { //Character length
												  	$title_short = substr(the_title('','',FALSE), 0, 28); // Character length
												  	preg_match('/^(.*)\s/s', $title_short, $matches);
														if ($matches[1]) $title_short = $matches[1];
												  	$title_short = $title_short.' ...'; // Ellipsis
													}
													else {
												  	$title_short = the_title('','',FALSE);
													} ?>
												<?php echo $title_short ?></a>
											</h2>
								      <small><span class="post-info">Posted on <?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small></span></small>
								    </td>
								  </tr>
								</table>
								<?php the_post_thumbnail(); ?>
								<?php the_content(); ?>
							<?php endwhile; else : ?>
			        <!-- The very first "if" tested to see if there were any Posts to -->
			        <!-- display.  This "else" part tells what do if there weren't any. -->
			        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			        <!-- REALLY stop The Loop. -->
			      <?php endif; wp_reset_postdata();?>
		    </div><!-- End Col -->
		    <div id="articles-sidebar" class="col-md-16 col-md-offset-2 col-xs-44 col-xs-offset-2">
					<div class="text-center">
						<h3>Other Articles</h3>
					</div>
		      	<!-- Start the Loop. -->
						<?php $recentCases = new WP_Query( array( 'cat' => 4 ) );
							if ($recentCases->have_posts()) : while ($recentCases->have_posts()) : $recentCases->the_post(); ?>
							<h4>
								<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
								<?php if (strlen(the_title('','',FALSE)) > 80) { //Character length
									$title_short = substr(the_title('','',FALSE), 0, 80); // Character length
									preg_match('/^(.*)\s/s', $title_short, $matches);
								if ($matches[1]) $title_short = $matches[1];
									$title_short = $title_short.' ...'; // Ellipsis
								} else {
									$title_short = the_title('','',FALSE);
								} ?>
								<?php echo $title_short ?></a>
							</h4>
			        <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small><br>
							<p><?php the_post_thumbnail(); ?></p>
							<p><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></p>
			        <!-- Stop The Loop (but note the "else:" - see next line). -->
	        	<?php endwhile; else : ?>
		        <!-- The very first "if" tested to see if there were any Posts to -->
		        <!-- display.  This "else" part tells what do if there weren't any. -->
		        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		        <!-- REALLY stop The Loop. -->
		      <?php endif; wp_reset_postdata();?>
		    </div>
		  </div>
		</div>
	</section>

<?php get_footer(); ?>
