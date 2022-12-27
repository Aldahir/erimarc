<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
	<?php #if (function_exists ( 'wp_body_open' )) wp_body_open(); ?>
	
	<div class="container-fluid" style="background-color:#4b3560">
		<div class="row py-1">
			<span class="top">CONSULTORIA E ASSESSORIA</span>
		</div>
	</div>
    
	<header class="header">
		<div class="container pb-2 pe-0 pt-2 px-0">
			<nav class="navbar navbar-expand-lg navbar-dark bg-alternate">		
				<div class="cajicua-coluna col-6 col-md-6 col-sm-8 col-lg-4 p-0 cajicua-logo">
					<div class="cajicua-cropped" style="width:60%">
						<a class="navbar-brand" href="<?php echo get_site_url(); ?>" style="display:block">
							<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/03/imfc_logo_main.png" alt="Logotipo da IMFC Consulting" srcset="<?php echo get_site_url(); ?>/wp-content/uploads/2022/03/imfc_logo_main.png" sizes="(max-width:100%) 300px" style="max-width: 100%;">
						</a>
					</div>
				</div>
				
				<div class="cajicua-coluna col-6 col-md-6 col-sm-4 col-lg-8 cajicua-menu">
					<button class="me-4 me-lg-0 navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<?php get_template_part('template-parts/nav'); ?>

					<div class="cajicua-coluna cajicua-search" style="align-self:center;text-align:center;">
						<i class="fas text-white fa-search"></i>
					</div>
				</div>
			</nav>
		</div>
    </header>