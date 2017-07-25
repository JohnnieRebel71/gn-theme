			</article>
		</div>
	</section>
	<footer class="full left">
		<section id="footer-awards">
			<div class="container-fluid">
				<div class="col-md-48 col-md-offset-0">
				  <div class="row footer-awards">
						<div class="container">
					    <div class="col-md-7 col-md-offset-7 col-xs-24 col-xs-offset-0 foo"><?php dynamic_sidebar( 'Footer Award Icon1' ); ?></div>
					    <div class="col-md-7 col-md-offset-2 col-xs-24 col-xs-offset-0 foo"><?php dynamic_sidebar( 'Footer Award Icon2' ); ?></div>
							<div class="col-md-7 col-md-offset-2 col-xs-24 col-xs-offset-0 foo"><?php dynamic_sidebar( 'Footer Award Icon3' ); ?></div>
							<div class="col-md-7 col-md-offset-2 col-xs-24 col-xs-offset-0 foo"><?php dynamic_sidebar( 'Footer Award Icon4' ); ?></div>
						</div>
				  </div>
				</div>
			</div>
		</section>

		<section id="footer-nav">
			<div class="container">
				<div class="col-md-48 col-md-offset-0 col-xs-44 col-xs-offset-2">
					<div class="row footer-sec">
						<div class="container">
							<div class="col-lg-12 col-md-12 col-xs-24 footer-nav-sec foo"><ul><?php dynamic_sidebar( 'Footer Nav Col1' ); ?></ul></div>
							<div class="col-lg-12 col-md-12 col-xs-24 footer-nav-sec foo"><ul class="sub-menu"><?php dynamic_sidebar( 'Footer Nav Col2' ); ?></ul></div>
							<div class="col-lg-12 col-md-12 col-xs-24 footer-nav-sec foo"><ul class="sub-menu"><?php dynamic_sidebar( 'Footer Nav Col3' ); ?></ul></div>
							<div class="col-lg-12 col-md-12 col-xs-24 footer-nav-sec foo"><ul class="sub-menu"><?php dynamic_sidebar( 'Footer Nav Col4' ); ?></ul></div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="footer-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-48 col-md-offset-0 col-xs-44 col-xs-offset-2 text-center foo">
						<?php dynamic_sidebar( 'Footer Contact Form' ); ?>
					</div>
				</div>
			</div>
		</section>

		<section id="footer-disclaimer">
			<div class="container">
				<div class="row">
					<div class="col-md-48 col-md-offset-0 col-xs-44 col-xs-offset-2 text-center footer-disclaimer foo">
						<p>All Contents Copyright &copy; <?php $current_year=date("o"); if ($current_year=="2014") echo "2014"; else echo "2014 - $current_year"; ?> Greco Neyland  |  All Rights Reserved  |   <a href="/firm-overview/contact-us/" target="_self">Contact Us</a></p>
						<p>Web Design and Development by <a href="http://www.jlongdesign.com" target="_blank">John Long Design</a></p>
					</div>
				</div>
			</div>
		</section>
	</footer>

	<?php wp_footer(); ?>

	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.equalheightcolumns.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/respond.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.matchHeight.js"></script>
	<script type="text/javascript">
			(function($) {

				$('.open-inline').magnificPopup({ /* POPUP FOR INLINE CONTENT */
					type:'inline',
					removalDelay: 500, //delay removal by X to allow out-animation
					callbacks: {
						beforeOpen: function() {
							this.st.mainClass = this.st.el.attr('data-effect');
						}
					},
					midClick: true
				});

				$(function() { /* ON DOCUMENT LOAD */

					$('.slider').bxSlider({ /* SLIDER */
						speed: 2000,
						pause: 5000,
						auto: true,
						startSlide: 0,
						infiniteLoop: true
					});

					// $('select').uniform(); /* MAKE SELECT BOXES STYLIZED */

				});

				var jRes = jRespond([ /* BECAUSE RESPONSIVE NEEDS LOVE */
					{
						label: 'handheld',
						enter: 0,
						exit: 767
					},{
						label: 'tablet',
						enter: 768,
						exit: 992
					},{
						label: 'laptop',
						enter: 993,
						exit: 1199
					},{
						label: 'desktop',
						enter: 1200,
						exit: 10000
					}
				]);

				jRes.addFunc([
					{
						breakpoint: ['desktop','laptop','tablet'],
						enter: function() {},
						exit: function() {}
					},{
						breakpoint: ['handheld'],
						enter: function() {},
						exit: function() {}
					}
				]);

				// VERTICAL ALIGN FUNCTION
				$.fn.verticalAlign = function() { /* VERTICAL ALIGN FUNCTION */
					return this
						.css("margin-top", ($(this).parent().height() - $(this).height()) / 2 + 'px')
				};
				$(function() { /* on document load */

					// VERTICAL ALIGN
					$('.vertalign').each(function() {
						$(this).verticalAlign();
					});

				});

				//SAMEHEIGHT
				$('.sameheight').equalHeightColumns({
					selector: ".column",
			    outerHeight: false,
			    responsive: true,
			    excludeFullWidth: false
				});

				$('.woocommerce ul.products li.product').equalHeightColumns();
				$('.woocommerce-page ul.products li.product').equalHeightColumns();
				$('.woocommerce ul.products li.product h3').equalHeightColumns();
				$('.menu-board-wrap.full.left.rel').equalHeightColumns();

				$('.featured-4-blocks').equalHeightColumns();

				//REMOVE SAMEHEIGHT

				$(window).bind("resize",function(){
					console.log($(this).width())
					if($(this).width() <991){
					$('div').removeClass('sameheight');
					}
				});

				//MATCH HEIGHT
				$(function() {
			    $('.item').matchHeight({
				    byRow: true,
				    property: 'height',
				    target: null,
				    remove: false
				});
				});

			})(jQuery);

			window.sr = ScrollReveal({ duration: 2000 });
			sr.reveal('.foo', 50);
	</script>

</body>
</html>
