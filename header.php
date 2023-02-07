<?php
session_start();
!defined('URL_BASE') ? define('URL_BASE', "http://127.0.0.1/erimarc/") : null;
!defined('title') ? define('title', "Erimarc - Manutenção, Reparação e Assistência Técnica de UPS's") : "Erimarc Angola";
// !defined('URL_BASE') ? define('URL_BASE', "https://erimarc.co.ao/teste/") : null;
?>

<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Erimarc é uma empresa de direito angolano constituída por capital 100% nacional com a sede social em Luanda e que atua na área da Assistência Técnica e Prestação de Serviços em Energia Estabilizada (UPS)." />

	<meta property="og:url" content="<?php echo URL_BASE ?>/sobre-nos" />
	<meta property="og:site_name" content="<?php echo title ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo title ?>" />
	<meta property="og:description" content="Erimarc é uma empresa de direito angolano constituída por capital 100% nacional com a sede social em Luanda e que atua na área da Assistência Técnica e Prestação de Serviços em Energia Estabilizada (UPS)." />
	<meta property="og:image" content="<?php echo URL_BASE ?>assets/img/icone.png" />
	<meta property="fb:app_id" content="" />

	<meta property="twitter:title" content="<?php echo title ?>">
	<meta property="twitter:description" content="Erimarc é uma empresa de direito angolano constituída por capital 100% nacional com a sede social em Luanda e que atua na área da Assistência Técnica e Prestação de Serviços em Energia Estabilizada (UPS).">
	<meta property="twitter:image" content="<?php echo URL_BASE ?>assets/img/icone.png">
	<meta property="twitter:image:alt" content="<?php echo title ?>">
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:site" content="@erimarc.ao">

	<meta name="robots" content="noindex,nofollow">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
	<link href="<?php echo URL_BASE ?>assets/css/aldair.css" rel="stylesheet">
	<title><?php echo title ?></title>
	<link rel="shortcut icon" href="<?php echo URL_BASE ?>assets/img/icone.png" type="image/png">
	<link rel="icon" href="<?php echo URL_BASE ?>assets/img/icone.png" type="image/png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo URL_BASE ?>assets/img/icone.png">
</head>

<body>
<<<<<<< HEAD

	<header class="header border-bottom border-4 mb-5" id="top">
		<div class="container-fluid border-bottom">
			<div class="container">
				<div class="d-flex justify-content-between menu-topo" id="topo">
					<ul class="align-items-center text-gray flex-row navbar-nav text-uppercase">
						<li class="nav-item"><a style="font-size: 0.85em !important;font-weight: 600 !important;letter-spacing:0!important" href="<?php echo URL_BASE ?>sobre-nos" class="nav-link p-0 pt-1 text-gray">Sobre nós</a></li>
						<li class="fw-light mx-3 separator">|</li>
						<li class="nav-item"><a style="font-size: 0.85em !important;font-weight: 600 !important;letter-spacing:0!important" href="<?php echo URL_BASE ?>solutions" class="nav-link p-0 pt-1 text-gray">Soluções</a></li>
						<li class="fw-light mx-3 separator">|</li>
						<li class="nav-item"><a style="font-size: 0.85em !important;font-weight: 600 !important;letter-spacing:0!important" href="<?php echo URL_BASE ?>contactos" class="nav-link p-0 pt-1 text-gray">Contactos</a></li>
						<li class="fw-light mx-3 separator">|</li>
					</ul>
					<div class="menu-topo" id="contactos">
						<div class="contacts d-flex">
							<div class="contact-email" style="font-size: 0.85em !important;font-weight: 600 !important;letter-spacing:0!important">
								<a href="mailto:comercial@erimarc.co.ao" class="d-flex flex-row nav-link align-items-center text-gray">
									<div class="bg-light rounded-0 p-2 me-2">
										<i class="fa fa-envelope text-dark"></i>
									</div>
									comercial@erimarc.co.ao
								</a>
							</div>

							<div class="contact-phone" style="font-size: 0.85em !important;font-weight: 600 !important;letter-spacing:0!important">
								<a href="tel:+244928085691" class="d-flex flex-row nav-link align-items-center text-gray">
									<div class="bg-light rounded-0 p-2 me-2 ">
										<i style="transform: rotate(90deg);" class="fa fa-phone text-dark"></i>
									</div>
									(+244) 928 085 691
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
=======
	<header class="header" id="top">
>>>>>>> 8819e90ffca9fec2782cce16b80dd41d8017d30d
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="<?php echo URL_BASE ?>">
					<img src="<?php echo URL_BASE ?>assets/img/logo.svg" alt="Logotipo da Erimarco">
				</a>
				<button class="me-4 me-lg-0 navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse justify-content-lg-end navbar-collapse" id="menu">
					<ul class="navbar-nav">
						<li style="font-weight:600;" class="text-uppercase nav-item me-lg-3 m-0"><a href="<?php echo URL_BASE ?>" class="text-gray nav-link active" aria-current="page">Início</a></li>
						<li style="font-weight:600;" class="text-uppercase nav-item me-lg-3 m-0"><a href="<?php echo URL_BASE ?>sobre-nos/" class="text-gray nav-link">Sobre nós</a></li>
						<li style="font-weight:600;" class="text-uppercase nav-item me-lg-3 m-0"><a href="<?php echo URL_BASE ?>servicos" class="text-gray nav-link">Serviços</a></li>
						<li style="font-weight:600;" class="text-uppercase nav-item"><a href="<?php echo URL_BASE ?>solutions" class="text-gray nav-link">Soluções</a></li>
						<li style="font-weight:600;" class="text-uppercase nav-item ms-lg-3 m-0"><a href="<?php echo URL_BASE ?>contactos" class="text-gray nav-link">Contactos</a></li>
					</ul>
					<div class="cajicua-coluna ms-lg-4 cajicua-search" style="margin-top: -2px;">
						<i class="fa fa-search small" onclick="cajicuaSearch()"></i>
					</div>
					<div class="cajicua-coluna ms-lg-4 dropdown cajicua-search" style="margin-top: -2px;">
						<button class="fa fa-language btn dropdown-toggle" type="button" id="btn-toggle" data-bs-toggle="dropdown" aria-expanded="false" title="Escolha o idioma">&nbsp;</button>
						<ul class="dropdown-menu" aria-labelledby="btn-toggle">
							<li><a href="" class="dropdown-item active">Português</a></li>
							<!-- <li><a href="" class="dropdown-item">English</a></li> -->
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>