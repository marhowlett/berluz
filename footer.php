<?php
/**
 * The template for displaying the footer
 *
 */
?>
<?php if ( woodmart_needs_footer() ): ?>
	<?php if ( ! woodmart_is_woo_ajax() ): ?>
		</div><!-- .main-page-wrapper --> 
	<?php endif ?>
		</div> <!-- end row -->
	</div> <!-- end container -->
	<?php
		$page_id = woodmart_page_ID();
		$disable_prefooter = get_post_meta( $page_id, '_woodmart_prefooter_off', true );
		$disable_footer_page = get_post_meta( $page_id, '_woodmart_footer_off', true );
		$disable_copyrights_page = get_post_meta( $page_id, '_woodmart_copyrights_off', true );
	?>
	<?php if ( ! $disable_prefooter && woodmart_get_opt( 'prefooter_area' ) ): ?>
		<div class="woodmart-prefooter">
			<div class="container">
				<?php echo do_shortcode( woodmart_get_opt( 'prefooter_area' ) ); ?>
			</div>
		</div>
	<?php endif ?>
	
	<!-- FOOTER -->
	<footer>
     <section id="esbrillante" class="template-section">
 <div class="center">
 <p class="acerca"><a href="https://berluz.com/acerca/">ACERCA DE</a><a href="https://berluz.com/aviso-de-privacidad-integral/">AVISO DE PRIVACIDAD</a><a href="">TÉRMINOS Y CONDICIONES</a><a href="" class="espe">DEVOLUCIONES Y REEMPLAZOS</a></p>
 <p class="sitio">Sitio web diseñado y desarrollado por <a href="http://esbrillante.mx/">EsBrillante</a></p>
 </div>
</section>
</footer>
<?php endif ?>
</div> <!-- end wrapper -->
<div class="woodmart-close-side"></div>
<?php wp_footer(); ?>
</body>
</html>