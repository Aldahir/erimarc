<?php
/**
 * Ficheiro Front Page
 *
 * @author Aldair Cajicua
 * 
 * @package IMFC Consulting
 *
 * @year 2022
 */
?>

<?php get_header() ?>

<div id="content" class="site-content">
	<style>
		.background-overlay {
			min-height: 100vh;
			background-color: rgb(0 0 0 / 50%);
			background-image: url(/wp-content/uploads/2022/03/1.webp);
		}
	</style>
	<main id="main" class="">
		<div class="container">
			<section class="main">
				<?php get_template_part('template-parts/body/main_section'); ?> 
			</section>
			
			<section class="background-overlay"></section>
			
			<section class="pt-lg-4">
				<?php get_template_part('template-parts/body/section', 'one'); ?> 
			</section>
		</div>
	</main>
</div>
		
<?php get_template_part('template-parts/body/about'); ?> 

<?php get_template_part('template-parts/body/section', 'articles'); ?>

<?php get_template_part('template-parts/body/section', 'video'); ?>

<section class="section-title mt-5" id="section-clientes">
    <div class="container p-0">
    </div>
</section>

<section cass="section-clients mt-5" id="clientes">
    <div class="container p-5"></div>
</section> 

<!--<?php #get_template_part('template-parts/body/section', 'clients'); ?>-->

<?php get_footer() ?>