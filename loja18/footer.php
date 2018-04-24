<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<section id="countdown">
		<div class="container">
							<div class="row">

									<h3>Garanta já seu ingresso!</h3>
									<p>Faltam</p>

									<div class="col-sm-3">
											<h4><span id="dias"></span></h4>
											<span>DIAS</span>
									</div>
									<div class="col-sm-3">
											<h4><span id="horas"></span></h4>
											<span>HORAS</span>
									</div>
									<div class="col-sm-3">
											<h4><span id="minutos"></span></h4>
											<span>MINUTOS</span>
									</div>
									<div class="col-sm-3">
											<h4><span id="segundos"></span></h4>
											<span>SEGUNDOS</span>
									</div>

							</div>
		</div>
	</section>

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' ); ?>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->



<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<script src="<?php echo get_site_url(); ?>/wp-content/themes/loja18/js/jquery.countdown.js"></script>

<script type="text/javascript">
(function($) {

$( document ).ready(function() {
	AOS.init({
		easing: 'ease-out-back',
		duration: 1000,
		offset: 200,
		once: true,
		disable: window.innerWidth < 1024,
	});

/*	jQuery('#clock').countdown('2018/09/06', function(event) {
		 jQuery(this).html(event.strftime('%D dias %H horas %M minutos %S segundos'));
	 });*/

	 $('#dias').countdown('2018/09/06', function(event) {
	 		 $(this).html(event.strftime('%D'));
	 });
	 $('#horas').countdown('2018/09/06', function(event) {
	 		 $(this).html(event.strftime('%H'));
	 });
	 $('#minutos').countdown('2018/09/06', function(event) {
	 		 $(this).html(event.strftime('%M'));
	 });
	 $('#segundos').countdown('2018/09/06', function(event) {
	 		 $(this).html(event.strftime('%S'));
	 });


});
})(jQuery);

</script>


</body>
</html>
