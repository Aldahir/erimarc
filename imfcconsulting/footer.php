<?php
/**
 * Ficheiro Footer
 *
 * @author Aldair Cajicua
 * 
 * @package IMFC Consulting
 *
 * @year 2022
 */
?>

<span id="scroll-to-top" class="ti-angle-up scroll-to-top-position-right scroll-to-top-show-default" title="Scroll To Top">
	<a href="#top">
		<i class="fas fa-angle-up"></i>
	</a>
</span>

<div class="atr">
	<div class="cajicua-container">
		<div class="dialog-search-content">
			<div class="dialog-search-header">
				<span class="dialog-search-title">Escreva o que deseja pesquisar</span>
				<span class="align-items-center d-flex dialog-search-close-icon justify-content-center ti-close">
					<i class="fas fa-times"></i>
				</span>
			</div>
			
			<div class="dialog-search-main">
				<div class="widget woocommerce widget_product_search">
					<?php get_search_form() ?>
				</div>
			</div>
		</div>
	</div>
</div>

<footer class="footer pt-5 pb-4">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6 col-sm-12 col-md-12">
				<?php dynamic_sidebar( 'menu_footer_area' ); ?>
			</div>
			<div class="col-12 col-lg-6 col-sm-12 col-md-12">
				<?php dynamic_sidebar( 'contacts_area' ); ?>
			</div>
			<hr class="my-5	" />
			<div class="col-12 col-lg-6 col-sm-12 col-md-12 text-center text-lg-start text-md-center">
				<?php dynamic_sidebar( 'address_area' ); ?>
			</div>
			<div class="col-12 col-lg-6 col-sm-12 col-md-12">
				<?php dynamic_sidebar( 'social_media_area' ); ?>
			</div>			
		</div>
		<div class="row">
			<div class="container">
				<div class="col-12 col-lg-12 col-sm-12 col-md-12 p-0 mt-5">
					<h2 class="headling-title">© <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?> - Consultoria e Assessoria. Todos os direitos reservados.</h2>
				</div>	
			</div>		
		</div>
	</div>
</footer>
<?php wp_footer(); ?>

</body>
</html>