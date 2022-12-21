<?php
session_start();
!defined('URL_BASE') ? define('URL_BASE', "http://127.0.0.1/erimarc/") : null;
!defined('title') ? define('title', "Erimarc - Manutenção, Reparação e Assistência Técnica de UPS's") : "Erimarc Angola";
// !defined('URL_BASE') ? define('URL_BASE', "http://erimarc.co.ao/teste/") : null;
?>

<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link href="http://127.0.0.1/aldair/repositorio/bootstrap/5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- <link href="http://127.0.0.1/aldair/repositorio/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="<?php echo URL_BASE ?>assets/css/aldair.css" rel="stylesheet">
	<title><?php echo title ?></title>
	<link rel="shortcut icon" href="<?php echo URL_BASE ?>assets/img/icone.png" type="image/png">
	<link rel="icon" href="<?php echo URL_BASE ?>assets/img/icone.png" type="image/png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo URL_BASE ?>assets/img/icone.png">
</head>

<body>
	<header class="header">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="<?php echo URL_BASE ?>">
					<img src="<?php echo URL_BASE ?>assets/img/logo.svg" alt="Logotipo da IMFC Consulting">
				</a>
				<button class="me-4 me-lg-0 navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse justify-content-lg-end navbar-collapse" id="menu">
					<ul class="navbar-nav">
						<li class="nav-item me-lg-3 m-0"><a href="<?php echo URL_BASE ?>" class="nav-link active" aria-current="page">Início</a></li>
						<li class="nav-item me-lg-3 m-0"><a href="<?php echo URL_BASE ?>about" class="nav-link">Sobre nós</a></li>
						<li class="nav-item me-lg-3 m-0"><a href="<?php echo URL_BASE ?>services" class="nav-link">Serviços</a></li>
						<li class="nav-item"><a href="<?php echo URL_BASE ?>solutions" class="nav-link">Soluções</a></li>
						<li class="nav-item ms-lg-3 m-0"><a href="<?php echo URL_BASE ?>contacts" class="nav-link">Contactos</a></li>
					</ul>
					<div class="cajicua-coluna ms-lg-4 cajicua-search" style="margin-top: -2px;">
						<i class="fa fa-search small"></i>
					</div>
				</div>
			</nav>
		</div>
	</header>